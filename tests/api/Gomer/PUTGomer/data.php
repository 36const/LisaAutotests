<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение количества товаров в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [
                "amount" => 10
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
                            'id' => 1,
                            "author_id" => 4,
                            "type_id" => 1,
                            "supervisor_id" => 7,
                            "manager_id" => null,
                            "status" => 1,
                            "direction" => 2,
                            "priority" => null,
                            "awaiting_correction" => 0,
                            "created_at" => '2020-01-01 00:00:00',
                            "correction_comment" => null,
                            "amount_to_work" => 20,
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
                            //"last_change_status_date" => "2020-01-01 00:00:01",
                            "team_direction" => 2,
                            "report_period_id" => null,
                            "sync_source_id" => null,
                            "sv_report_periods" => null,
                            "cross_check_status" => 0,
                            "cross_check_manager_id" => null,
                            "employee_code_1c" => null,
                            "child_count" => 0,
                            "photo_load_status" => 0,
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пустой body',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "не передан amount"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Пустой amount',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [
                "amount" => ''
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "не передан amount"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Несуществующий ID заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=999999',
            'requestBody' => [
                "amount" => 10
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 404,
                "errors" => [
                    "заявка не найдена"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ]
    ]
];