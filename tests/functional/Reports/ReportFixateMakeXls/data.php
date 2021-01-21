<?php

use lisa\Page\Other\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех зафиксированных данных по СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?q=[]',
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "[]"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "[]"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
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
                            "value" => 'export_fixated_fields_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по отчётному периоду',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?q={"ReportPeriodRequestFieldSearch":{"report_period_id":"3","request_id":"","supervisor_id":"","field_id":""},"page":"7"}',
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"3\",\"request_id\":\"\",\"supervisor_id\":\"\",\"field_id\":\"\"},\"page\":\"7\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"3\",\"request_id\":\"\",\"supervisor_id\":\"\",\"field_id\":\"\"},\"page\":\"7\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
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
                            "value" => 'export_fixated_fields_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по номеру заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?q={"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"10","supervisor_id":"","field_id":""}}',
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"10\",\"supervisor_id\":\"\",\"field_id\":\"\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"10\",\"supervisor_id\":\"\",\"field_id\":\"\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
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
                            "value" => 'export_fixated_fields_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?q={"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"","supervisor_id":"35","field_id":""}}',
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"\",\"supervisor_id\":\"35\",\"field_id\":\"\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"\",\"supervisor_id\":\"35\",\"field_id\":\"\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
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
                            "value" => 'export_fixated_fields_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по полю',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?q={"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"","supervisor_id":"","field_id":"35"}}',
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"\",\"supervisor_id\":\"\",\"field_id\":\"35\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
                            "status" => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
                            "conditions" => '{"type": "fixated_fields", "params": "{\"ReportPeriodRequestFieldSearch\":{\"report_period_id\":\"\",\"request_id\":\"\",\"supervisor_id\":\"\",\"field_id\":\"35\"}}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_fixated_fields_4_' . date("Y-m-d"),
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
                            "value" => 'export_fixated_fields_4_' . date("Y-m-d")
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
