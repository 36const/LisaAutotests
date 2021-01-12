<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 1,
                "items_count" => 10
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
                            "author_id" => 1,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                ]
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c автомодерацией',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 1,
                "items_count" => 10,
                "auto_moderation" => true
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
                            "author_id" => 1,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
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
                            'field_id' => 5,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c Б/У>',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 1,
                "items_count" => 10,
                "used_ref" => true
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
                            "author_id" => 1,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
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
                            'field_id' => 17,
                            'value' => 1,
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c Автомодерацией и Б/У>',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 1,
                "items_count" => 10,
                "auto_moderation" => true,
                "used_ref" => true
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
                            "author_id" => 1,
                            "type_id" => 1,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
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
                            'field_id' => 5,
                            'value' => 1,
                        ],
                        [
                            'request_id' => 1,
                            'field_id' => 17,
                            'value' => 1
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Заявка на Добавление/изменение информации в существующих товарах',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 2,
                "items_count" => 10,
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
                            "author_id" => 1,
                            "type_id" => 2,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=2',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Заявка на Перенос товаров (изменение категории в товарах)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 3,
                "items_count" => 10
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
                            "author_id" => 1,
                            "type_id" => 3,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bchange_type%5D=sync_source_category_id',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Заявка на Проверку скрытых товаров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 83,
                "type_id" => 6,
                "items_count" => 10
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
                            "author_id" => 1,
                            "type_id" => 6,
                            "supervisor_id" => 6,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at >=" => date("Y-m-d"),
                            "correction_comment" => null,
                            "amount_to_work" => 10,
                            "subject" => "Euromart. Источник №1",
                            "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=9',
                            "category_id" => null,
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
                            "last_change_status_date >=" => date("Y-m-d"),
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => 1,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ]
                    ],
                    "requests_fields" => []
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Пустой запрос',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Не передано поле sync_source_id",
                    "Не передано поле market_id",
                    "Не передано поле type_id",
                    "Не передано поле items_count"
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
            'description' => 'Несуществующий продавец',
        ],
        'provider_data' => [
            'requestURL' => '/bpm/api/create-request-by-market-id',
            'requestBody' => [
                "sync_source_id" => 1,
                "market_id" => 9999999,
                "type_id" => 1,
                "items_count" => 10
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "Передан несуществующий продавец"
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