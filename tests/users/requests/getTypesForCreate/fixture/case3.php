<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'request_attachments' => [],
        'request_status_history' => [],
        'observers' => [],
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            [
//        "id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 14,
                'parent_id' => 1,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2021-10-22 09:57:21',
                'drfo' => '\'000000004',
                'positions' => '["supervisor"]',
            ],
        ],
        'auth.auth_assignment' => (include __DIR__ . '/case1.php')['lisa_fixtures']['auth.auth_assignment'],
    ],
//    'gomer_fixtures' => [
//        'users' => [
//            [
//                'id' => 1,
//                'username' => 'kutsan.k',
//                'auth_key' => 'WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo',
//                'password_hash' => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
//                'password_reset_token' => null,
//                'email' => 'kutsan.k@rozetka.com.ua',
//                'created_at' => 1584396309,
//                'updated_at' => 1584475046,
//                'status' => 1,
//                'color' => null,
//                'first_name' => '',
//                'second_name' => '',
//                'avatar_image' => null,
//                'reason_for_edit' => 'kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k',
//                'ldap_sync_code' => null,
//                'site_theme' => null
//            ],
//        ],
//    ]
];