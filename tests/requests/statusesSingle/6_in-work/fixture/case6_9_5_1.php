<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => 11,
                'status' => 6,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => '',
                'supervisor_comment' => '',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'photo_load_status' => 0,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 5,
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => 1,
            ],
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
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'requests_reasons' => [],
        'request_status_history' => [
            [
//                "id" => 1,
                'request_id' => 1,
                'user_id' => 4,
                'old_status' => 5,
                'new_status' => 6,
                'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'created_at' => date('Y-m-d H:i:s', strtotime('- 3 minutes')),
                'manager_id' => 11,
                'reasons' => null
            ]
        ],
        'transition_info' => [],
        'observers' => [],
        'auto_diff_log' => [],
    ]
];