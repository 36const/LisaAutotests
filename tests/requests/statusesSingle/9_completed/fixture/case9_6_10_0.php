<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 10,
                'supervisor_id' => 34,
                'manager_id' => 11,
                'status' => 9,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
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
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'previous_status' => 6,
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
                'field_id' => 59,
                'value' => 30.55,
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
                'field_id' => 84,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 91,
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
                'field_id' => 113,
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
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'observers' => [],
        'request_attachments' => [],
        'request_status_history' => [],
        'requests_reasons' => [],
    ]
];