<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.users' => array_slice(include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php', 0, 15),
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_item_child' => [
            [
                'parent' => 'admin',
                'child' => 'blockUser'
            ],
            [
                'parent' => 'admin',
                'child' => 'categoryUpdate'
            ],
            [
                'parent' => 'admin',
                'child' => 'coefUpdate'
            ],
            [
                'parent' => 'admin',
                'child' => 'createUser'
            ],
            [
                'parent' => 'headSupervisor',
                'child' => 'viewUser'
            ],
            [
                'parent' => 'moderator',
                'child' => 'viewSplitterModerationRequests'
            ],
            [
                'parent' => 'photoManager',
                'child' => 'requestCreate'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'blockUser'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'takeToWork'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'requestViewAllRequests'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'requestViewDirectionRequests'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'errorsUpdate'
            ],
            [
                'parent' => 'supervisor',
                'child' => 'requestCreateRelated'
            ]
        ],
        'auth.auth_assignment' => [
            [
                'item_name' => 'blockUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'categoryUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'coefUpdate',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'createUser',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'blockUser',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'createUser',
                'user_id' => 6,
                'created_at' => '2021-04-15 17:06:08'
            ],
            [
                'item_name' => 'errorsUpdate',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'requestCreateRelated',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'updateUser',
                'user_id' => 6,
                'created_at' => '2021-04-15 17:06:08'
            ],
            [
                'item_name' => 'blockUser',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'errorsUpdate',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'massEdit',
                'user_id' => 10,
                'created_at' => '2021-04-15 17:06:17'
            ],
            [
                'item_name' => 'requestCreate',
                'user_id' => 10,
                'created_at' => '2021-04-15 17:06:17'
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'takeToWork',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'viewSplitterModerationRequests',
                'user_id' => 10,
                'created_at' => '2021-04-15 17:06:17'
            ],
            [
                'item_name' => 'viewUser',
                'user_id' => 10,
                'created_at' => '2021-04-15 17:06:17'
            ]
        ],
        'auth.user_changing_history' => [],
    ],
];