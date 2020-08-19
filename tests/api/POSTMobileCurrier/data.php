<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями, направление Розетка',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            //"created_at" =>
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => "<br>http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "attachments" => '[]',
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "supervisor_comment" => null,
                            //"last_change_status_date" =>
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => 978654132,
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
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями, направление Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '2',
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            //"supervisor_id" => 4,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            //"created_at" =>
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => "<br>http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "attachments" => '[]',
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "supervisor_comment" => null,
                            //"last_change_status_date" =>
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => 978654132,
                        ]
                    ],
                    "requests_fields" => [
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка с обязательными полями и описанием, направление Розетка',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [
                        [
                            "id" => 1,
                            "author_id" => 8,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 1,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            //"created_at" =>
                            "correction_comment" => null,
                            "amount_to_work" => 1,
                            "subject" => "Исправление ошибки на основе запроса из MobileCourier",
                            "description" => "~!@#$%^&*()_+`=-\]'/[;.,|}\"?{:><<br>http://splitter.staging.com.ua/goods/list/update?id=123123123#goods-card-part-options-logistic",
                            "attachments" => '[]',
                            "category_id" => 3,
                            "seller_id" => 9423,
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
                            "supervisor_comment" => null,
                            //"last_change_status_date" =>
                            "team_direction" => 3,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "employee_code_1c" => 978654132,
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
                            'value' => 61,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 159,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Пустой item_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле item_id",
                    "item_id: поле должно быть числом",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Пустой market_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле market_id",
                    "market_id: поле должно быть числом",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Пустой employee_code_1c',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле employee_code_1c",
                    "employee_code_1c: поле должно быть числом",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Пустой direction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле direction",
                    "direction: поле должно быть числом",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Без item_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
//                'item_id' => '',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле item_id",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Без market_id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
//                'market_id' => '',
                'employee_code_1c' => '978654132',
                'direction' => '1',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле market_id",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Без employee_code_1c',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
//                'employee_code_1c' => '',
                'direction' => '1',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле employee_code_1c",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Без direction',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
//                'direction' => '',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле direction",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Значение direction - число кроме 1 и 2',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => '123123123',
                'market_id' => '9423',
                'employee_code_1c' => '978654132',
                'direction' => '3',
//                'files' => '',
                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "В поле direction переданы не валидные данные. Direction может быть равен только 1 и 2"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Текстовые значения вместо числовых',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'item_id' => 'йцук',
                'market_id' => 'asdf',
                'employee_code_1c' => '!@#$',
                'direction' => 'ZXCR',
//                'files' => '',
//                'description' => '~!@#$%^&*()_+`=-\\]\'/[;.,|}"?{:><'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "item_id: поле должно быть числом",
                    "market_id: поле должно быть числом",
                    "employee_code_1c: поле должно быть числом",
                    "direction: поле должно быть числом",
                    "Ошибки валидации входящих параметров."
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [],
                    "requests_fields" => []
                ]
            ]
        ]
    ],
];