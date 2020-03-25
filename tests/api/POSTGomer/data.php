<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров',
        ],
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
                    "id" => 622
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 622,
                    "author_id" => 1,
                    "type_id" => 1,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c автомодерацией',
        ],
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
                    "id" => 623
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 623,
                    "author_id" => 1,
                    "type_id" => 1,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => [
                    'request_id' => 623,
                    'field_id' => 5,
                    'value' => 1,
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c Б/У>',
        ],
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
                    "id" => 624
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 624,
                    "author_id" => 1,
                    "type_id" => 1,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => [
                    'request_id' => 624,
                    'field_id' => 17,
                    'value' => 1,
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров c Автомодерацией и Б/У>',
        ],
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
                    "id" => 625
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 625,
                    "author_id" => 1,
                    "type_id" => 1,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => [
                    'request_id' => 625,
                    'field_id' => 5,
                    'value' => 1,
                ],
                "requests_fields" => [
                    'request_id' => 625,
                    'field_id' => 17,
                    'value' => 1
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Заявка на Добавление/изменение информации в существующих товарах',
        ],
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
                    "id" => 626
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 626,
                    "author_id" => 1,
                    "type_id" => 2,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=2',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => []
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Заявка на Перенос товаров (изменение категории в товарах)',
        ],
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
                    "id" => 627
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 627,
                    "author_id" => 1,
                    "type_id" => 3,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bchange_type%5D=sync_source_category_id',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => []
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Заявка на Проверку скрытых товаров',
        ],
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
                    "id" => 628
                ]
            ],
            'db' => [
                "requests" => [
                    "id" => 628,
                    "author_id" => 1,
                    "type_id" => 6,
                    "supervisor_id" => 6,
                    "manager_id" => null,
                    "status" => 1,
                    "direction" => 2,
                    "priority" => null,
                    "awaiting_correction" => 0,
                    //"created_at" =>
                    "correction_comment" => null,
                    "amount_to_work" => 10,
                    "subject" => "Euromart. Источник №1",
                    "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=9',
                    "attachments" => '[]',
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
                    "supervisor_comment" => null,
                    //"last_change_status_date" =>
                    "team_direction" => 2,
                    "report_period_id" => null,
                    "sync_source_id" => 1,
                    "sv_report_periods" => null,
                ],
                "requests_fields" => []
            ]
        ]
    ]
];