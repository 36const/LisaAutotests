<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.user_changing_history' => [],
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[3],
            [
                //"id" => 5,
                'name' => 'Супервайзер Руководько 1',
                'login' => 'bpm_headSupervisor_1',
                'email' => 'bpm_headSupervisor_1@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'headSupervisor',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000005",
                'positions' => '["headSupervisor"]',
            ]
        ],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php'
    ],
];