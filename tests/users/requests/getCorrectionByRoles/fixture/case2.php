<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 1,
                'type_id' => 2,
                'supervisor_id' => 2,
                'manager_id' => 4,
                'status' => 9,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:01',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => NULL,
                'supplier_cabinet_id' => NULL,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => null,
                'supervisor_team' => null,
                'manager_team' => 17,
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 52,
                'value' => 2,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        'observers' => [],
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            [
//        "id" => 4,
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
        ],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
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
        ]
    ],
];