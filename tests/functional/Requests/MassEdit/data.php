<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Типы 1/1, 2/2, 4, 8, 11, 14 в статусе "Новая"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[20]' => '66',
                'RequestField[29]' => '30',
                'RequestField[30]' => '39',
                'RequestField[32]' => '52',
                'RequestField[3]' => '1',
                'Request[supervisor_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'keys' => '6,5,4,3,2,1',
                'load_type' => '1',
                'report_period_id' => '1',
                'sv_report_periods[]' => '1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:11:24",
                            "team_direction" => 3,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:12:04",
                            "team_direction" => 2,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 3,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:13:24",
                            "team_direction" => 4,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 4,
                            "author_id" => 4,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:14:21",
                            "team_direction" => 6,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 5,
                            "author_id" => 4,
                            "type_id" => 11,
                            "supervisor_id" => 34,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Проектирование структуры (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:16:27",
                            "team_direction" => 5,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 6,
                            "author_id" => 4,
                            "type_id" => 14,
                            "supervisor_id" => 38,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => '0',
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-01 11:18:03",
                            "team_direction" => 6,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ]
                    ],
                    'requests_fields' => [
                        [
                            "request_id" => 1,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 52,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 8,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 15,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 19,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 114,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 61,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 6,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 7,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 55,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 3,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 20,
                            "value" => "66"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 32,
                            "value" => "52"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 54,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 57,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Тип-статус: 3/2-2, 5-3, 7-5, 9-6, 10-7, 13-8, 15-9',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[20]' => '65',
                'RequestField[29]' => '30',
                'RequestField[30]' => '39',
                'RequestField[32]' => '',
                'RequestField[3]' => '0',
                'Request[supervisor_comment]' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1001234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНО<textarea /><input></input><form action="http://live.hh.ru"><input type="submit"></form>',
                'keys' => '7,6,5,4,3,2,1',
                'load_type' => '0',
                'report_period_id' => '',
                'sv_report_periods[]' => '1',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 2,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркетплейса)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 2,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason_id" => 15,
                            "reason" => "Затребовать изменения",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:33:25",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 3,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 5,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:34:18",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 4,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:35:47",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 5,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 37,
                            "manager_id" => 11,
                            "status" => 7,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => 5,
                            "reason" => "Ожидать",
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => null,
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:36:10",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 6,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 38,
                            "manager_id" => 11,
                            "status" => 8,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => 6,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => "Комментарий к результату задачи",
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:36:42",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ],
                        [
                            "id" => 7,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => "Описание",
                            "attachments" => "[]",
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => "Комментарий к результату задачи",
                            "supervisor_comment" => "!@#$%^&*()_+`-]'/[;.,}\"?{:>\|",
                            //"last_change_status_date" => "2020-05-02 19:36:59",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => '0',
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0
                        ]
                    ],
                    'requests_fields' => [
                        [
                            "request_id" => 1,
                            "field_id" => 8,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 15,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 19,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 114,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 1,
                            "field_id" => 122,
                            "value" => null
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 49,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 50,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 51,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 52,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 60,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 64,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 2,
                            "field_id" => 122,
                            "value" => null
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
                            'request_id' => 2,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 2,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 6,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 7,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 53,
                            "value" => "3"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 55,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 3,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 3,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 1,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 53,
                            "value" => "0.5"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 4,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 4,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 59,
                            "value" => "0"
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 5,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 5,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 27,
                            "value" => "24"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 47,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 48,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 56,
                            "value" => "60"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 62,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 63,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 70,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 86,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 87,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 88,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 100,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 6,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 6,
                            'field_id' => 158,
                            'value' => null,
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 2,
                            "value" => "1"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 20,
                            "value" => "65"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 29,
                            "value" => "30"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 30,
                            "value" => "39"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 53,
                            "value" => "2"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 54,
                            "value" => "1.5"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 58,
                            "value" => "90"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 83,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 92,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 101,
                            "value" => null
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 110,
                            "value" => "10"
                        ],
                        [
                            "request_id" => 7,
                            "field_id" => 122,
                            "value" => null
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 146,
                            'value' => null,
                        ],
                        [
                            'request_id' => 7,
                            'field_id' => 158,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

];
