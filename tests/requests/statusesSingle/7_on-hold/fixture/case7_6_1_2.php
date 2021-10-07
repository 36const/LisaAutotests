<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
//                'id' => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 10,
                'manager_id' => 11,
                'status' => 7,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => '',
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'description' => 'description',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => '',
                'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
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
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 8,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 15,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 19,
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
                'field_id' => 53,
                'value' => 3,
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
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 67,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 72,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 73,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 74,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 75,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 93,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 94,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 114,
                'value' => 3,
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
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'request_status_history' => [
            [
                //"id" => 1,
                'request_id' => 1,
                'user_id' => 4,
                'old_status' => 6,
                'new_status' => 7,
                'reason' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО',
                'created_at' => '2020-01-01 00:00:01',
                'manager_id' => 11,
                'reasons' => 'Другое (описан в коментариях), Требуется уточнение информации по задаче'
            ]
        ],
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 1,
            ],
            [
                'request_id' => 1,
                'reason_id' => 2,
            ],
        ],
        'observers' => [],
    ]
];