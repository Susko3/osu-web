{{--
    Copyright 2015-2018 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License version 3
    as published by the Free Software Foundation.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@foreach ($search->data() as $entry)
    <div class="search-result-entry">
        <a
            class="search-entry"
            href="{{ wiki_url($entry->path, $entry->locale) }}"
        >
            <h1 class="search-entry__row search-entry__row--title">
                {{ $entry->title(true) }}
            </h1>

            <p class="search-entry__row search-entry__row--excerpt">
                {!! html_excerpt($entry->page()['output']) !!}
            </p>

            <p class="search-entry__row search-entry__row--footer">
                {{ wiki_url($entry->path, $entry->locale) }}
            </p>
        </a>
    </div>
@endforeach