<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 1,
                'type_id' => 9,
                'supervisor_id' => 2,
                'manager_id' => 3,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => '',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"3": 3}',
                'cross_check_status' => 1,
                'cross_check_manager_id' => 4,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 15,
                'manager_team' => 1,
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
                'field_id' => 6,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 7,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 28,
                'value' => 27,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 55,
                'value' => 273.3,
            ],
            [
                'request_id' => 1,
                'field_id' => 79,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 80,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 81,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 84,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 85,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 90,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 97,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 98,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 99,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 112,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 113,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 115,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
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
        'request_attachments' => [],
        'request_status_history' => [],
        'request_errors' => [],
        'requests_reasons' => [],
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
        'auth.auth_assignment' =>  (include __DIR__ . '/case1_1.php')['lisa_fixtures']['auth.auth_assignment'],
    ],
];