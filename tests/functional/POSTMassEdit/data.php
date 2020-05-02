<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Типы 1, 2, 4, 8, 11, 14 в статусе "Ожидают проверки условий"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RequestField[20]' => '66',
                'RequestField[29]' => '30',
                'RequestField[30]' => '39',
                'RequestField[32]' => '52',
                'RequestField[3]' => '1',
                'Request[supervisor_comment]' => 'Комментарий Супервайзера',
                'keys' => '6,5,4,3,2,1',
                'load_type' => '1',
                'report_period_id' => '1',
                'sv_report_periods[]' => '1',
                '_csrf-backend' => null,
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:11:24",
                            "team_direction" => 3,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:12:04",
                            "team_direction" => 2,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:13:24",
                            "team_direction" => 4,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:14:21",
                            "team_direction" => 6,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                            "category_id" => 23,
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:16:27",
                            "team_direction" => 5,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                            "category_id" => 23,
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
                            "supervisor_comment" => "Комментарий Супервайзера",
                            //"last_change_status_date" => "2020-05-01 11:18:03",
                            "team_direction" => 6,
                            "report_period_id" => 1,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": "1"}'
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
                        ]
                    ]
                ]
            ]
        ]
    ],

];
