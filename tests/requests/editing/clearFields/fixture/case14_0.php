<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 14,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 6,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => 'Комментарий на исправление',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => 'Рекоммендации',
                'reason' => 'Комментарий на исправление',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий супервайзера',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => 12,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 9,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 16,
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
                'field_id' => 20,
                'value' => 61,
            ],
            [
                'request_id' => 1,
                'field_id' => 26,
                'value' => 23,
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
                'field_id' => 57,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 80,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 82,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 108,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 120,
                'value' => 'http://splitter.docker/lisa/#/request/view/1',
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
                'field_id' => 153,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 156,
                'value' => 'http://splitter.docker/lisa/#/request/view/1',
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'user_notifications' => [],
        'request_attachments' => [],
        'request_status_history' => [],
        'notification_settings' => [],
        'observers' => [
            [
                'request_id' => 1,
                'user_id' => 15
            ],
            [
                'request_id' => 1,
                'user_id' => 17
            ],
        ],
        'requests_reasons' => [],
    ]
];