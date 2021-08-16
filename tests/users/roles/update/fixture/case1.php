<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[3],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[4],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[5],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[6],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[7],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[8],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[9],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[10],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[11],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[12],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[13],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[14],
        ],
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
                'item_name' => 'requestViewAllRequests',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'takeToWork',
                'user_id' => 6,
                'created_at' => '2021-04-15 16:19:36'
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
                'item_name' => 'requestCreateRelated',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'requestViewAllRequests',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:36'
            ],
            [
                'item_name' => 'requestViewDirectionRequests',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:37'
            ],
            [
                'item_name' => 'takeToWork',
                'user_id' => 10,
                'created_at' => '2021-04-15 16:19:36'
            ]
        ],
        'auth.user_changing_history' => [],
    ],
    'gomer_fixtures' => [
        'users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php')[0],
        ],
    ]
];