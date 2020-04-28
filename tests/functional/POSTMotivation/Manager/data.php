<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Добавление новых товаров (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[66]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => 10.1,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Добавление новых товаров (Работа с товарами Маркета)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[66]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                        ]
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
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 60,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 66,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
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
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                        ]
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
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Перенос товаров (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
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
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Перенос товаров (Работа с товарами Маркета)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                        ]
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
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Группировка товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[116]' => '10',
                'RequestField[118]' => '10',
                'RequestField[31]' => '48',
                'RequestField[32]' => '52',
                'RequestField[91]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Группировка товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 31,
                            'value' => 48,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 32,
                            'value' => 52,
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
                            'field_id' => 61,
                            'value' => 6,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 91,
                            'value' => 10,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 116,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 118,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 5,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
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
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Проверка скрытых товаров (Работа с товарами Маркета)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[25]' => '18',
                'RequestField[67]' => '10',
                'RequestField[72]' => '10',
                'RequestField[73]' => '10',
                'RequestField[74]' => '10',
                'RequestField[75]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '5',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 6,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Проверка скрытых товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => null,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                        ]
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
                            'field_id' => 25,
                            'value' => 18,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 49,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 60,
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
                            'value' => 60,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 72,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 73,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 74,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 75,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 93,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 94,
                            'value' => 5,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case10.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[112]' => '10',
                'RequestField[113]' => '10',
                'RequestField[115]' => '10',
                'RequestField[28]' => '27',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[81]' => '10',
                'RequestField[84]' => '10',
                'RequestField[85]' => '10',
                'RequestField[90]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 7,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => null,
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
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[112]' => '10',
                'RequestField[113]' => '10',
                'RequestField[115]' => '10',
                'RequestField[28]' => '27',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[81]' => '10',
                'RequestField[84]' => '10',
                'RequestField[85]' => '10',
                'RequestField[90]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => null,
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
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Добавление параметров/значений (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case12.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 9,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case13.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Изменение существующих параметров/значений (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Проектирование структуры (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case14.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[113]' => '10',
                'RequestField[79]' => '10',
                'RequestField[80]' => '10',
                'RequestField[84]' => '10',
                'RequestField[91]' => '10',
                'RequestField[97]' => '10',
                'RequestField[98]' => '10',
                'RequestField[99]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 11,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Проектирование структуры (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 113,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case15.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[111]' => '10',
                'RequestField[21]' => '1',
                'RequestField[22]' => '6',
                'RequestField[23]' => '11',
                'RequestField[24]' => '15',
                'RequestField[25]' => '18',
                'RequestField[26]' => '22',
                'RequestField[27]' => '24',
                'RequestField[31]' => '48',
                'RequestField[67]' => '10',
                'RequestField[68]' => '10',
                'RequestField[69]' => '10',
                'RequestField[70]' => '10',
                'RequestField[71]' => '10',
                'RequestField[76]' => '10',
                'RequestField[77]' => '10',
                'RequestField[88]' => '10',
                'RequestField[93]' => '10',
                'RequestField[94]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 12,
                            "supervisor_id" => 6,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 50,
                            'value' => 10.1,
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
                            'value' => 10.1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 67,
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
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 111,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Добавление/изменение видео (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case16.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[100]' => '10',
                'RequestField[27]' => '24',
                'RequestField[47]' => '10',
                'RequestField[48]' => '10',
                'RequestField[62]' => '10',
                'RequestField[63]' => '10',
                'RequestField[70]' => '10',
                'RequestField[86]' => '10',
                'RequestField[87]' => '10',
                'RequestField[88]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 13,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 27,
                            'value' => 24,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 47,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 48,
                            'value' => 10,
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
                            'field_id' => 56,
                            'value' => 25,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 62,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 63,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 70,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 86,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 87,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 88,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 100,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case17.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[26]' => '23',
                'RequestField[80]' => '10',
                'RequestField[82]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 14,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение размерной сетки (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Добавление/изменение тегов (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case18.php',
        'provider_data' => [
            'requestParameter' => 'complete',
            'requestBody' => [
                'RequestField[110]' => '10',
                'RequestField[83]' => '10',
                'RequestField[92]' => '10',
                'Request[awaiting_correction]' => '0',
                'Request[result_comment]' => 'Комментарий к результату задачи',
                'Request[status]' => '9',
                "_csrf-backend" => null,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 15,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => 'description',
                            "attachments" => '[]',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason_id" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            //"actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "difficulty" => null,
                            "result_comment" => 'Комментарий к результату задачи',
                            "supervisor_comment" => '',
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
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
                            'field_id' => 58,
                            'value' => 15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 83,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 92,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => null,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 110,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => null,
                        ],
                    ]
                ]
            ]
        ]
    ],
];
