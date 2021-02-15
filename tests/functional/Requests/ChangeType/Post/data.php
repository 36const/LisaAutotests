<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Новая" с 1 на 2 без изменений полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 2,
                'direction' => 1,
            ],
            'requestBody' => [
                'RequestField[1]' => '1',
                'Request[category_id]' => '1',
                'Request[direction]' => '1',
                'Request[seller_id]' => '83',
                'Request[type_id]' => '2',
            ],
            'otherTypesFields' => [],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 2,
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
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => null,
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Готова для распределения" с 3 на 4 с изменением чек-боксов, категории, продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 4,
                'direction' => 0,
            ],
            'requestBody' => [
                'RequestField[169]' => '1',
                'Request[category_id]' => '1',
                'Request[direction]' => '0',
                'Request[seller_id]' => '5',
                'Request[type_id]' => '4',
            ],
            'otherTypesFields' => [
                'RequestField[49]',
                'RequestField[50]',
                'RequestField[51]',
                'RequestField[60]',
                'RequestField[114]',
                'RequestField[142]',
                'RequestField[143]',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 4,
                            "supervisor_id" => 33,
                            "manager_id" => null,
                            "status" => 2,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Перенос товаров (Работа с товарами Маркета)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => null,
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => null,
                            "supervisor_comment" => null,
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 4,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
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
                            'field_id' => 61,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 164,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 165,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 166,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 167,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 168,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 169,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 170,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 171,
                            'value' => 0.07,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 172,
                            'value' => 0.15,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 173,
                            'value' => 0.1,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "На доработке" с 5 на 6 без изменений полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 6,
                'direction' => 2,
            ],
            'requestBody' => [
                'RequestField[8]' => '1',
                'Request[direction]' => '2',
                'Request[seller_id]' => '5',
                'Request[type_id]' => '6',
            ],
            'otherTypesFields' => [
                'RequestField[52]',
                'RequestField[54]',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 6,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 3,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Заливка фото с фотостудии (Работа с товарами Розетки)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => 5,
                            "recommendations" => '',
                            "reason" => 'Комментарий',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 8,
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
                            'value' => 0,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Ожидает взятия в работу" с 7 на 8 с изменением чек-боксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 8,
                'direction' => 0,
            ],
            'requestBody' => [
                'RequestField[1]' => '1',
                'Request[category_id]' => '1',
                'Request[direction]' => '0',
                'Request[seller_id]' => '83',
                'Request[type_id]' => '8',
            ],
            'otherTypesFields' => [],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 8,
                            "supervisor_id" => 35,
                            "manager_id" => 11,
                            "status" => 5,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => null,
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
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
                            'field_id' => 55,
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
                            'field_id' => 146,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 158,
                            'value' => 0,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "В работе" с 9 на 10 с изменением категории и продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 10,
                'direction' => 0,
            ],
            'requestBody' => [
                'RequestField[1]' => '1',
                'Request[category_id]' => '2',
                'Request[direction]' => '0',
                'Request[seller_id]' => '0',
                'Request[type_id]' => '10',
            ],
            'otherTypesFields' => [],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 10,
                            "supervisor_id" => 34,
                            "manager_id" => 11,
                            "status" => 6,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 2,
                            "seller_id" => '0',
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 5,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
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
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Ожидает" с 11 на 12 с изменением чек-бокса и продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 12,
                'direction' => 0,
            ],
            'requestBody' => [
                'RequestField[2]' => '1',
                'Request[category_id]' => '1',
                'Request[direction]' => '1',
                'Request[seller_id]' => '5',
                'Request[type_id]' => '12',
            ],
            'otherTypesFields' => [
                'RequestField[29]',
                'RequestField[30]',
                'RequestField[54]',
                'RequestField[59]',
                'RequestField[79]',
                'RequestField[80]',
                'RequestField[84]',
                'RequestField[91]',
                'RequestField[97]',
                'RequestField[98]',
                'RequestField[99]',
                'RequestField[113]',
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
                            "status" => 7,
                            "direction" => 1,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Проектирование структуры (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 5,
                            "recommendations" => '',
                            "reason" => 'Ожидать',
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => null,
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => '',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 2,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 66,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 29,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 30,
                            'value' => 47,
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
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 59,
                            'value' => 61.1,
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
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Частично выполнен" с 13 на 14 без изменений полей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 14,
                'direction' => 0,
            ],
            'requestBody' => [
                'RequestField[1]' => '1',
                'Request[category_id]' => '1',
                'Request[direction]' => '0',
                'Request[seller_id]' => '83',
                'Request[type_id]' => '14',
            ],
            'otherTypesFields' => [
                'RequestField[27]',
                'RequestField[47]',
                'RequestField[48]',
                'RequestField[56]',
                'RequestField[62]',
                'RequestField[63]',
                'RequestField[65]',
                'RequestField[70]',
                'RequestField[86]',
                'RequestField[87]',
                'RequestField[88]',
                'RequestField[100]',
//                'RequestField[101]',
                'RequestField[102]',
                'RequestField[121]',
//                'RequestField[122]',
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
                            "status" => 8,
                            "direction" => 0,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение видео (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => 1,
                            "seller_id" => 83,
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => 'Частично выполнена',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 6,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 1,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 20,
                            'value' => 66,
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
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 56,
                            'value' => 50,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 57,
                            'value' => 0,
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
                            'field_id' => 65,
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
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 100,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 102,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'http://gomer.local/bpm/request/to-correction?id=1',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                    "request_errors" => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 10,
                            'items_with_errors' => 10,
                            'field_value_id' => 138,
                            'comment' => 'comment',
                            'status' => 0,
                            'create_ts' => '2020-01-01 00:00:10',
                            'correction_date' => null
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Изменение типа в статусе "Выполнены" с 15 на 1 с изменением чек-боксов и продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'requestParameter' => [
                'typeId' => 1,
                'direction' => 2,
            ],
            'requestBody' => [
                'RequestField[15]' => '1',
                'RequestField[19]' => '1',
                'RequestField[8]' => '1',
                'Request[direction]' => '2',
                'Request[seller_id]' => '0',
                'Request[type_id]' => '1',
            ],
            'otherTypesFields' => [
                'RequestField[20]',
                'RequestField[54]',
                'RequestField[58]',
                'RequestField[83]',
                'RequestField[92]',
                'RequestField[110]',
                'RequestField[117]',
                'RequestField[155]',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            "id" => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 5,
                            "manager_id" => 11,
                            "status" => 9,
                            "direction" => 2,
                            "priority" => 2,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => '',
                            "amount_to_work" => 10,
                            "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                            "description" => 'description',
                            "category_id" => null,
                            "seller_id" => '0',
                            "recommendations" => '',
                            "reason" => null,
                            "parent_id" => null,
                            "planned_start_date" => null,
                            "planned_finish_date" => null,
                            "actual_start_date" => '2020-01-01 00:00:03',
                            "actual_finish_date" => '2020-01-01 00:00:04',
                            "supervisor_process_date" => '2020-01-01 00:00:02',
                            "supervisor_check_date" => null,
                            "result_comment" => 'Выполнена',
                            "supervisor_comment" => '',
                            "last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => '{"1": 1}',
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => [
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
                            'field_id' => 20,
                            'value' => 66,
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
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 53,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 54,
                            'value' => 2,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 58,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 60,
                            'value' => 30,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 64,
                            'value' => 0,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 65,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 83,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 89,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 92,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 101,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 110,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 114,
                            'value' => 3,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 117,
                            'value' => 10,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 121,
                            'value' => 'http://gomer.local/bpm/request/to-correction?id=1',
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 122,
                            'value' => 10,
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
                    "request_errors" => [
                        [
                            'id' => 1,
                            'request_id' => 1,
                            'manager_id' => 11,
                            'errors_count' => 10,
                            'items_with_errors' => 10,
                            'field_value_id' => 122,
                            'comment' => 'comment',
                            'status' => 0,
                            'create_ts' => '2020-01-01 00:00:10',
                            'correction_date' => null
                        ]
                    ],
                ]
            ]
        ]
    ],
];
