<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'reports' => (include __DIR__ . '/case1.php')['lisa_fixtures']['reports'],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'auth.users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
            [
                3 => [
                    //'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 1,
                    'parent_id' => 1,
                    'position' => 'contentManager',
                    'status' => 1,
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => "'000000004",
                    'positions' => '["contentManager"]',
                ],
            ]
        ),
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'updateUser'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewOwnRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportView'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewOwnDashboards'
            ],
        ],
    ]
];