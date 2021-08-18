<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        'auth.user_changing_history' => [],
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            [
                //"id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 0,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000004"
            ],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[4],
        ],
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php'
    ],
    'gomer_fixtures' => [
        'users' => (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
    ]
];