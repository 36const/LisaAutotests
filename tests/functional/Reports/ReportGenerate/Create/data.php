<?php

use lisa\Page\Other\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Запись новых данных при первой выгрузке детального с фиксацией за первый период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[detail_ids]' => ['1'],
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[type]' => '',
                'Report[type]' => '0',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 10
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 10
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 40
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 40
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 120
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 10
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Перезапись данных при повторной выгрузке детального с фиксацией за первый период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[detail_ids]' => ['1'],
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[type]' => '',
                'Report[type]' => '0',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 300
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 20
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Запись новых данных при выгрузке детального с фиксацией за второй период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[detail_ids]' => ['1'],
                'Report[report_period_id]' => '4',
                'Report[total_ids]' => '',
                'Report[type]' => '',
                'Report[type]' => '0',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "4", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 300
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 39,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 190
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 190
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 90
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 570
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 30
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "supervisor_id_fix_data", "reportPeriodId": "4", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d')
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],


    'case4' => [
        'setting' => [
            'description' => 'Запись новых данных при первой выгрузке сводного с фиксацией за первый период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[total_ids]' => ['5'],
                'Report[type]' => '',
                'Report[type]' => '1',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 10
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 10
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 40
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 40
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 120
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 10
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Перезапись данных при повторной выгрузке сводного с фиксацией за первый период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[total_ids]' => ['2'],
                'Report[type]' => '',
                'Report[type]' => '1',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["2"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 300
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 20
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["2"], "userField": "supervisor_id_fix_data", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_(сводный)_с_фиксацией_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Запись новых данных при выгрузке сводного с фиксацией за второй период',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[report_period_id]' => '4',
                'Report[total_ids]' => '',
                'Report[total_ids]' => ['2'],
                'Report[type]' => '',
                'Report[type]' => '1',
                'Report[user_field]' => 'supervisor_id_fix_data'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["2"], "userField": "supervisor_id_fix_data", "reportPeriodId": "4", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 100
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 300
                        ],
                        [
                            "report_period_id" => 3,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 36,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 33,
                            "value" => 20
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 37,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 39,
                            "value" => 30
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 35,
                            "value" => 60
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 101,
                            "value" => 190
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 122,
                            "value" => 190
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 51,
                            "value" => 90
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 60,
                            "value" => 570
                        ],
                        [
                            "report_period_id" => 4,
                            "request_id" => 11,
                            "field_id" => 65,
                            "value" => 30
                        ]
                    ],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["2"], "userField": "supervisor_id_fix_data", "reportPeriodId": "4", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_(сводный)_с_фиксацией_' . date('Y-m-d', strtotime('-6 days')) . '-2021-12-31' .
                                '__' . date('Y-m-d')
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],


    'case7' => [
        'setting' => [
            'description' => 'Выгрузка нескольких детальных по СВ',
            'format' => '*.zip'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[detail_ids]' => ['1', '2', '3', '4'],
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[type]' => '',
                'Report[type]' => '0',
                'Report[user_field]' => 'supervisor_id'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1", "2", "3", "4"], "userField": "supervisor_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'reports_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1", "2", "3", "4"], "userField": "supervisor_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'reports_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'reports_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Выгрузка детального по исполнителю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[detail_ids]' => ['1'],
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[type]' => '',
                'Report[type]' => '0',
                'Report[user_field]' => 'manager_id'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "manager_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["1"], "userField": "manager_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                    '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],


    'case9' => [
        'setting' => [
            'description' => 'Выгрузка сводного по СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[total_ids]' => ['5'],
                'Report[type]' => '',
                'Report[type]' => '1',
                'Report[user_field]' => 'supervisor_id'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5"], "userField": "supervisor_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5"], "userField": "supervisor_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'Всё_во_всём_(сводный)_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d"),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'Всё_во_всём_(сводный)_2020-07-01-' . date("Y-m-d", strtotime('+1 week')) .
                                '__' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Выгрузка нескольких сводных по исполнителю',
            'format' => '*.zip'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Report[detail_ids]' => '',
                'Report[report_period_id]' => '3',
                'Report[total_ids]' => '',
                'Report[total_ids]' => ['5', '6', '7', '8'],
                'Report[type]' => '',
                'Report[type]' => '1',
                'Report[user_field]' => 'manager_id'
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5", "6", "7", "8"], "userField": "manager_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'reports_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "report_period_request_fields" => [],
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"teamId": 17, "reportIds": ["5", "6", "7", "8"], "userField": "manager_id", "reportPeriodId": "3", "reportLoadAllUsers": true, "reportLoadYourTeam": true, "reportLoadMarketUsers": true}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'reports_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'reports_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

];
