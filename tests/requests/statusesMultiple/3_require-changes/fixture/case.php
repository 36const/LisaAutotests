<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                'id' => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 3,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => 'description',
                'category_id' => 1,
                'seller_id' => -2,
                'recommendations' => null,
                'reason' => 'Просто надо',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
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
                'previous_status' => 1,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 17,
                'supervisor_team' => 1,
                'manager_team' => null,
            ],
            [
//                'id' => 2,
                'author_id' => 16,
                'type_id' => 2,
                'supervisor_id' => 10,
                'manager_id' => null,
                'status' => 3,
                'direction' => 2,
                'priority' => null,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-09 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\\|<\\|1234567890абвгдеёжзийклмноп513\r\nhttp://splitter.docker/bpm/request/view?id=11&forCrossCheck=0",
                'reason' => 'Затребовать изменения',
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
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 2,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => 19,
                'supervisor_team' => 7,
                'manager_team' => null,
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
                'field_id' => 144,
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
            [
                'request_id' => 2,
                'field_id' => 8,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 15,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 19,
                'value' => 1
            ],
            [
                'request_id' => 2,
                'field_id' => 49,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 50,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 51,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 53,
                'value' => 3
            ],
            [
                'request_id' => 2,
                'field_id' => 60,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 64,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 65,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 67,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 72,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 73,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 74,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 75,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 93,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 94,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 101,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 114,
                'value' => 3
            ],
            [
                'request_id' => 2,
                'field_id' => 122,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 142,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 143,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 144,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 146,
                'value' => 0
            ],
            [
                'request_id' => 2,
                'field_id' => 158,
                'value' => 0
            ]
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [
            [
                //'id' => 1,
                'user_id' => 4,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "30", "53", "54", "67", "supervisor_id", "description", "priority"]',
                'statuses_for_notification' => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 2,
                'user_id' => 6,
                'types_for_notification' => '{"create": 1, "comment": 2, "mention": "1", "manager_id": 0, "attachments": 1, "supervisor_id": 0}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 0, "2": 1, "3": 2, "4": 2, "5": 1, "6": 0, "7": 0, "8": 0, "9": 0, "11": 0}'
            ],
            [
                //'id' => 1,
                'user_id' => 11,
                'types_for_notification' => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                'fields_for_complete' => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                'statuses_for_notification' => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
            ],
        ],
        'user_notifications' => [],
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 12
            ],
            [
                'request_id' => 1,
                'reason_id' => 11
            ],
            [
                'request_id' => 2,
                'reason_id' => 13
            ],
        ],
        'request_status_history' => [],
        'observers' => [],
    ],
];