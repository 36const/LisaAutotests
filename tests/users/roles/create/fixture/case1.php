<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.users' => (include TestHelper::getGlobalFixtureDefaultPath() . 'oneUser.php')['lisa_fixtures']['auth.users'],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
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

        ],
    ],
];