/**
 *    Copyright (c) ppy Pty Ltd <contact@ppy.sh>.
 *
 *    This file is part of osu!web. osu!web is distributed with the hope of
 *    attracting more community contributions to the core ecosystem of osu!.
 *
 *    osu!web is free software: you can redistribute it and/or modify
 *    it under the terms of the Affero GNU General Public License version 3
 *    as published by the Free Software Foundation.
 *
 *    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
 *    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *    See the GNU Affero General Public License for more details.
 *
 *    You should have received a copy of the GNU Affero General Public License
 *    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
 */

import NotificationJson from 'interfaces/notification-json';
import { route } from 'laroute';
import { debounce } from 'lodash';
import { action, observable } from 'mobx';
import LegacyPmNotification from 'models/legacy-pm-notification';
import Notification from 'models/notification';
import NotificationStack from 'models/notification-stack';
import NotificationType from 'models/notification-type';
import { NotificationEventNewJson } from 'notifications/notification-events';
import Store from 'stores/store';
import NotificationStackStore from './notification-stack-store';
import UnreadNotificationStackStore from './unread-notification-stack-store';

export default class NotificationStore extends Store {
  @observable notifications = new Map<number, Notification>();
  @observable pmNotification = new LegacyPmNotification();
  readonly stacks = new NotificationStackStore(this.root, this.dispatcher);
  readonly unreadStacks = new UnreadNotificationStackStore(this.root, this.dispatcher);

  private debouncedSendQueued = debounce(this.sendQueued, 500);
  private queued = new Set<number>();
  private queuedXhr?: JQuery.jqXHR;

  @action
  flushStore() {
    this.notifications.clear();
  }

  get(id: number) {
    this.notifications.get(id);
  }

  getMany(ids: number[]) {
    const notifications = [] as Notification[];
    for (const id of ids) {
      const notification = this.notifications.get(id);
      if (notification != null) {
        notifications.push(notification);
      }
    }

    return notifications;
  }

  @action
  handleNotificationEventNew(event: NotificationEventNewJson) {
    this.updateWithJson(event.data);
  }

  @action
  queueMarkAsRead(notification: Notification) {
    if (notification.canMarkRead) {
      notification.isMarkingAsRead = true;
      this.queued.add(notification.jsonNotificationId);
    }

    this.debouncedSendQueued();
  }

  queueMarkStackAsRead(stack: NotificationStack) {
    stack.isMarkingAsRead = true;

    $.ajax({
      data: {
        stack: stack.jsonNotificationId,
      },
      dataType: 'json',
      method: 'POST',
      url: route('notifications.mark-read'),
    })
    .then(action(() => this.unreadStacks.handleNotificationEventStackRead({ data: stack.jsonNotificationId, event: 'notification.stack.read' })))
    .always(action(() => stack.isMarkingAsRead = false));
  }

  queueMarkTypeAsRead(type: NotificationType) {
    type.isMarkingAsRead = true;
    $.ajax({
      data: { type: type.name },
      dataType: 'json',
      method: 'POST',
      url: route('notifications.mark-read'),
    })
    .then(action(() => this.unreadStacks.handleNotificationEventTypeRead({ data: type.jsonNotificationId, event: 'notification.type.read' })))
    .always(action(() => type.isMarkingAsRead = false));
  }

  sendQueued() {
    const ids = [...this.queued];
    if (ids.length === 0) { return; }

    this.queuedXhr = $.ajax({
      data: { ids },
      dataType: 'json',
      method: 'POST',
      url: route('notifications.mark-read'),
    });

    ids.forEach((id) => this.queued.delete(id));

    this.queuedXhr
    .then(action(() => this.unreadStacks.handleNotificationEventRead({ data: { ids }, event: 'read'})))
    .always(action(() => this.getMany(ids).forEach((notification) => notification.isMarkingAsRead = false)));

    return this.queuedXhr;
  }

  private updateWithJson(json: NotificationJson) {
    let notification = this.notifications.get(json.id);

    if (notification == null) {
      notification = new Notification(json.id);
      this.notifications.set(notification.id, notification);
    }

    return notification.updateFromJson(json);
  }
}
