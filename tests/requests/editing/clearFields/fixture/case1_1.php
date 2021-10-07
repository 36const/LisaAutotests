<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 6,
                'manager_id' => 11,
                'status' => 6,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => 'Комментарий на исправление',
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
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
                'team_direction' => 3,
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
                'field_id' => 20,
                'value' => 61,
            ],
            [
                'request_id' => 1,
                'field_id' => 21,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 22,
                'value' => 6,
            ],
            [
                'request_id' => 1,
                'field_id' => 23,
                'value' => 11,
            ],
            [
                'request_id' => 1,
                'field_id' => 24,
                'value' => 15,
            ],
            [
                'request_id' => 1,
                'field_id' => 25,
                'value' => 18,
            ],
            [
                'request_id' => 1,
                'field_id' => 26,
                'value' => 22,
            ],
            [
                'request_id' => 1,
                'field_id' => 27,
                'value' => 24,
            ],
            [
                'request_id' => 1,
                'field_id' => 31,
                'value' => 48,
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 10.1,
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => 10,
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
                'value' => 10.1,
            ],
            [
                'request_id' => 1,
                'field_id' => 65,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 66,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 68,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 69,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 71,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 76,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 77,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 88,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 93,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 94,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 111,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 121,
                'value' => 'http://gomer.local/lisa/#/request/view/1',
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 144,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 157,
                'value' => 'http://gomer.local/lisa/#/request/view/1',
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