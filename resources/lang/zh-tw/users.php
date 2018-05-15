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
    'deleted' => '[被刪除的用戶]',

    'beatmapset_activities' => [
        'title' => ":user 的摸圖歷史紀錄",

        'discussions' => [
            'title_recent' => '最近開始的討論',
        ],

        'events' => [
            'title_recent' => '近期活動',
        ],

        'posts' => [
            'title_recent' => '最新發表',
        ],

        'votes_received' => [
            'title_most' => '得讚最多（最近三個月）',
        ],

        'votes_made' => [
            'title_most' => '讚數最多（最近三個月）',
        ],
    ],

    'card' => [
        'loading' => '載入中...',
        'send_message' => '傳送訊息',
    ],

    'login' => [
        '_' => '登入',
        'locked_ip' => '您的 IP 位址已被鎖定。請稍候幾分鐘。',
        'username' => '使用者名稱',
        'password' => '密碼',
        'button' => '登入',
        'button_posting' => '登入中...',
        'remember' => '記住我這台裝置',
        'title' => '登入以繼續',
        'failed' => '登入失敗',
        'register' => "沒有 osu! 帳戶？現在就註冊一個！",
        'forgot' => '忘記密碼？',
        'beta' => [
            'main' => 'Beta 僅限於特定用戶訪問',
            'small' => '（贊助者將在不久後開放）',
        ],

        'here' => '這裡', // this is substituted in when generating a link above. change it to suit the language.
    ],

    'posts' => [
        'title' => ':username 的貼文',
    ],

    'signup' => [
        '_' => '註冊',
    ],
    'anonymous' => [
        'login_link' => '點擊登入',
        'login_text' => '登入',
        'username' => '訪客',
        'error' => '請先登入',
    ],
    'logout_confirm' => '確定要登出嗎？o(TヘTo)',
    'restricted_banner' => [
        'title' => '帳戶進入限制模式！',
        'message' => '在被限制時，無法與其他玩家互動，分數只有自己可見。該限制通常由系統自動給予，並將在24小時內解除。需要申訴？請<a href="mailto:accounts@ppy.sh">聯繫支持團隊</a>.',
    ],
    'show' => [
        'age' => ':age 歲',
        'change_avatar' => '更換你的頭像！',
        'first_members' => '元老玩家',
        'is_developer' => 'osu! 開發者',
        'is_supporter' => 'osu! 支持者',
        'joined_at' => '註冊時間：:date',
        'lastvisit' => '最後登入於：:date',
        'missingtext' => '未找到的使用者！（或者該使用者已經被 ban）',
        'origin_age' => ':age 歲',
        'origin_country_age' => ':age，來自 :country',
        'origin_country' => '來自 :country',
        'page_description' => 'osu! - 您想知道關於 :username 的資訊!',
        'previous_usernames' => '舊的使用者名稱',
        'plays_with' => '慣用 :devices',
        'title' => ":username 的個人簡介",

        'edit' => [
            'cover' => [
                'button' => '變更個人簡介的皮膚',
                'defaults_info' => '未來將提供更多的封面選項',
                'upload' => [
                    'broken_file' => '上傳失敗.請檢查上傳的圖片然後重試.',
                    'button' => '上傳圖片',
                    'dropzone' => '拖拽到此處',
                    'dropzone_info' => '您也可以將圖片拉到此處上傳',
                    'restriction_info' => "自定義皮膚只有 <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!贊助者</a> 可用",
                    'size_info' => '圖片尺寸應為2000x500',
                    'too_large' => '上傳的圖片檔案過大.',
                    'unsupported_format' => '不支援的檔案格式.',
                ],
            ],

            'default_playmode' => [
                'is_default_tooltip' => '默認的遊戲模式',
                'set' => '設定 :mode 為個人簡介默認的遊戲模式',
            ],
        ],

        'extra' => [
            'followers' => '關注者：:count',
            'unranked' => '近期沒有遊玩記錄',

            'achievements' => [
                'title' => '成就',
                'achieved-on' => '達成於 :date',
            ],
            'beatmaps' => [
                'none' => '暫時沒有...',
                'title' => '圖譜',

                'favourite' => [
                    'title' => '喜愛的圖譜 (:count)',
                ],
                'graveyard' => [
                    'title' => '墓地裡的圖譜 (:count)',
                ],
                'ranked_and_approved' => [
                    'title' => '被列入排名且認可的圖譜 (:count)',
                ],
                'unranked' => [
                    'title' => '待認可的圖譜 (:count)',
                ],
            ],
            'historical' => [
                'empty' => '尚無遊戲分數。:(',
                'title' => '歷史記錄',

                'monthly_playcounts' => [
                    'title' => '遊玩紀錄',
                ],
                'most_played' => [
                    'count' => '遊玩次數',
                    'title' => '玩過次數最多的圖譜',
                ],
                'recent_plays' => [
                    'accuracy' => '準確率：:percentage',
                    'title' => '最近24小時遊玩',
                ],
                'replays_watched_counts' => [
                    'title' => '回放被观看记录',
                ],
            ],
            'kudosu' => [
                'available' => '可用 kudosu',
                'available_info' => "kudosu 可以兌換為 kudosu 星,它可以讓你的譜面更引人注意。這是你還沒有兌換的 kudosu 數。",
                'recent_entries' => '最近 Kudosu 記錄',
                'title' => 'Kudosu!',
                'total' => '總共獲得 kudosu',
                'total_info' => '取決於你對制譜的貢獻如何。查看 <a href="'.osu_url('user.kudosu').'">這個頁面</a> 以得到更多信息。',

                'entry' => [
                    'amount' => ':amount kudosu',
                    'empty' => "該用戶還沒有收到過 kudosu ！",

                    'beatmap_discussion' => [
                        'allow_kudosu' => [
                            'give' => '因討論帖 :post 的 kudosu 移除操作的撤銷而獲得 :amount',
                        ],

                        'deny_kudosu' => [
                            'reset' => '在討論帖 :post 中被移除 :amount',
                        ],

                        'delete' => [
                            'reset' => '因討論帖 :post 被刪除而失去 :amount',
                        ],

                        'restore' => [
                            'give' => '因討論帖 :post 被恢復而獲得 :amount',
                        ],

                        'vote' => [
                            'give' => '因在討論帖 :post 中得到了足夠票數而獲得 :amount',
                            'reset' => '因在討論帖 :post 中丟失了票數而失去 :amount',
                        ],

                        'recalculate' => [
                            'give' => '因討論帖 :post 的投票重新計算而獲得 :amount',
                            'reset' => '因討論帖 :post 的投票重新計算而失去 :amount',
                        ],
                    ],

                    'forum_post' => [
                        'give' => '在帖子 :post 中被 :giver 給予 :amount ',
                        'reset' => '在帖子 :post 中被 :giver 重置 kudosu ',
                        'revoke' => '在帖子 :post 中被 :giver 移除 kudosu ',
                    ],
                ],
            ],
            'me' => [
                'title' => '個人介紹',
            ],
            'medals' => [
                'empty' => "該用戶還沒有獲得成就。;_;",
                'title' => '成就',
            ],
            'recent_activity' => [
                'title' => '最近活動',
            ],
            'top_ranks' => [
                'empty' => '還沒有上傳過成績。 :(',
                'not_ranked' => '只有 ranked 谱面才能得到 pp。',
                'pp' => ':amountpp',
                'title' => '成績',
                'weighted_pp' => '權重：:pp (:percentage)',

                'best' => [
                    'title' => '最好成績',
                ],
                'first' => [
                    'title' => '第一名',
                ],
            ],
            'account_standing' => [
                'title' => '帐号状态',
                'bad_standing' => "<strong>:username</strong> 的帐号存在不良记录 :(",
                'remaining_silence' => '<strong>:username</strong> 的禁言将在 :duration 解除',

                'recent_infringements' => [
                    'title' => '最近记录',
                    'date' => '时间',
                    'action' => '处理',
                    'length' => '时长',
                    'length_permanent' => '永久',
                    'description' => '原因',
                    'actor' => '裁决者： :username',

                    'actions' => [
                        'restriction' => '封禁',
                        'silence' => '禁言',
                        'note' => '注释',
                    ],
                ],
            ],
        ],
        'info' => [
            'discord' => 'Discord',
            'interests' => '兴趣爱好',
            'lastfm' => 'Last.fm',
            'location' => '所在地',
            'occupation' => '职业',
            'skype' => 'Skype',
            'twitter' => '推特',
            'website' => '网站',
        ],
        'not_found' => [
            'reason_1' => '他可能换了用户名。',
            'reason_2' => '该帐号由于安全或滥用问题暂时不可用。',
            'reason_3' => '你可能输错用户名了！',
            'reason_header' => '可能是由于以下原因：',
            'title' => '找不到指定的用戶',
        ],
        'page' => [
            'description' => '<strong>個人介紹</strong> 是您可以自定義的展示區.',
            'edit_big' => '編輯',
            'placeholder' => '在這裡編輯',
            'restriction_info' => "需要成為 <a href='".route('store.products.show', 'supporter-tag')."' target='_blank'>osu!支持者</a> 以解鎖該特性.",
        ],
        'post_count' => [
            '_' => '发表了 :link',
            'count' => ':count 篇帖子',
        ],
        'rank' => [
            'country' => ':mode 模式的國內排名',
            'global' => ':mode 模式的全球排名',
        ],
        'stats' => [
            'hit_accuracy' => '準確率',
            'level' => '等級 :level',
            'maximum_combo' => '最大連擊',
            'play_count' => '遊戲次數',
            'play_time' => '遊戲時間',
            'ranked_score' => 'Ranked 譜面總分',
            'replays_watched_by_others' => '回放被觀看次數',
            'score_ranks' => '得分等級',
            'total_hits' => '總命中次數',
            'total_score' => '總分',
        ],
    ],
    'status' => [
        'online' => '在線',
        'offline' => '離線',
    ],
    'store' => [
        'saved' => '帳戶已創建',
    ],
    'verify' => [
        'title' => '帳戶認證',
    ],
];
