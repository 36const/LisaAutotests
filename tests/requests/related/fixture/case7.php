<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 2,
                'value' => '1'
            ],
            [
                'request_id' => 1,
                'field_id' => 20,
                'value' => '66'
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => '2'
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => '2'
            ],
            [
                'request_id' => 1,
                'field_id' => 58,
                'value' => '120'
            ],
            [
                'request_id' => 1,
                'field_id' => 83,
                'value' => '10'
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 92,
                'value' => '10'
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 1,
                'field_id' => 110,
                'value' => '10'
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0
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
        'report_periods' => [[]],
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'request_status_history' => [],
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 5,
            ],
        ],
        'observers' => [],
    ],
];