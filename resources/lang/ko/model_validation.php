<?php

/**
 *    Copyright 2015-2018 ppy Pty. Ltd.
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

return [
    'not_negative' => ':attribute 속성은 음수가 될 수 없습니다.',
    'required' => ':attribute 속성이 필요합니다.',
    'too_long' => '',
    'wrong_confirmation' => '확인란이 일치하지 않습니다.',

    'beatmap_discussion_post' => [
        'discussion_locked' => '',
        'first_post' => '시작글은 삭제할 수 없습니다.',
    ],

    'beatmapset_discussion' => [
        'beatmap_missing' => '',
        'beatmapset_no_hype' => "",
        'hype_requires_null_beatmap' => '',
        'invalid_beatmap_id' => '',
        'invalid_beatmapset_id' => '',
        'locked' => '',
        'mapper_note_wrong_user' => '',

        'hype' => [
            'guest' => '로그인하셔야 홍보하실 수 있습니다.',
            'hyped' => '이미 이 비트맵을 홍보했습니다.',
            'limit_exceeded' => '',
            'not_hypeable' => '',
            'owner' => '',
        ],

        'timestamp' => [
            'exceeds_beatmapset_length' => '',
            'negative' => "",
        ],
    ],

    'forum' => [
        'feature_vote' => [
            'not_feature_topic' => '기능을 요청하는 주제에만 투표할 수 있습니다.',
            'not_enough_feature_votes' => '득표 수가 충분하지 않습니다.',
        ],

        'poll_vote' => [
            'invalid' => '항목 선택이 잘못되었습니다.',
        ],

        'post' => [
            'beatmapset_post_no_delete' => '',
            'beatmapset_post_no_edit' => '',
        ],

        'topic_poll' => [
            'duplicate_options' => '지정하려는 항목이 이미 존재합니다.',
            'invalid_max_options' => '지정된 항목보다 많이 투표하도록 설정할 수 없습니다.',
            'minimum_one_selection' => '투표자들이 최소 한 개 이상은 선택할 수 있도록 해야합니다.',
            'minimum_two_options' => '투표 항목이 적어도 두 개는 필요합니다.',
            'too_many_options' => '허용된 것 보다 많은 항목을 선택하셨습니다.',
        ],

        'topic_vote' => [
            'required' => '',
            'too_many' => '허용된 것 보다 많은 항목을 선택하셨습니다.',
        ],
    ],

    'user' => [
        'contains_username' => '비밀번호는 유저 이름을 포함할 수 없습니다.',
        'email_already_used' => '이미 사용중인 이메일 주소입니다.',
        'invalid_country' => '해당하는 국가가 데이터베이스에 존재하지 않습니다.',
        'invalid_discord' => '',
        'invalid_email' => "이메일 주소가 잘못되었습니다.",
        'too_short' => '새 비밀번호가 너무 짧습니다.',
        'unknown_duplicate' => '유저 이름 또는 이메일 주소가 이미 사용중입니다.',
        'username_available_in' => '',
        'username_available_soon' => '',
        'username_invalid_characters' => '',
        'username_in_use' => '',
        'username_no_space_userscore_mix' => '',
        'username_no_spaces' => "",
        'username_not_allowed' => '',
        'username_too_short' => '요청하신 유저 이름이 너무 짧습니다.',
        'username_too_long' => '',
        'weak' => '비밀번호에 사용할 수 없는 문자나 패턴이 포함되어 있습니다.',
        'wrong_current_password' => '현재 비밀번호가 일치하지 않습니다.',
        'wrong_email_confirmation' => '이메일과 이메일 확인란이 일치하지 않습니다.',
        'wrong_password_confirmation' => '비밀번호와 비밀번호 확인란이 일치하지 않습니다.',
        'too_long' => '최대 길이를 초과하셨습니다 - :limit자리 까지만 가능합니다.',

        'change_username' => [
            'supporter_required' => [
                '_' => '',
                'link_text' => '',
            ],
            'username_is_same' => '',
        ],
    ],
];
