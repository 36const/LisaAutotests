<?php

use lisa\Page\Other\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех зафиксированных данных по СВ',
            'rows' => 135
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
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Отчетный период",
                    "B" => "Номер заявки",
                    "C" => "Супервайзер",
                    "D" => "Поле",
                    "E" => "Значение",
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по отчётному периоду',
            'rows' => 19
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
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Отчетный период",
                    "B" => "Номер заявки",
                    "C" => "Супервайзер",
                    "D" => "Поле",
                    "E" => "Значение",
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по номеру заявки',
            'rows' => 7
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
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Отчетный период",
                    "B" => "Номер заявки",
                    "C" => "Супервайзер",
                    "D" => "Поле",
                    "E" => "Значение",
                ],
                "2" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Ошибки в оформлении товаров",
                    "E" => "10"
                ],
                "3" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Рассчитанное количество проверенных товаров",
                    "E" => "75"
                ],
                "4" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Рассчитанное количество проверенных товаров с ошибками",
                    "E" => "75"
                ],
                "5" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Количество проверенных товаров",
                    "E" => "10"
                ],
                "6" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Общее количество ошибок",
                    "E" => "10"
                ],
                "7" => [
                    "A" => "2020-02-01 - 2020-02-28",
                    "B" => "10",
                    "C" => "Супервайзер Начальникович 1",
                    "D" => "Общее количество товаров с ошибками",
                    "E" => "10"
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по супервайзеру',
            'rows' => 31
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
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Отчетный период",
                    "B" => "Номер заявки",
                    "C" => "Супервайзер",
                    "D" => "Поле",
                    "E" => "Значение",
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Выгрузка зафиксированных данных по СВ с фильтром по полю',
            'rows' => 5
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
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Отчетный период",
                    "B" => "Номер заявки",
                    "C" => "Супервайзер",
                    "D" => "Поле",
                    "E" => "Значение",
                ],
                //иногда строки выгружаются в порядке 5-2-3-4
//                "2" => [
//                    "A" => "2020-04-01 - 2020-04-30",
//                    "B" => "12",
//                    "C" => "Супервайзер Начальникович 2",
//                    "D" => "Ошибки в характеристиках и описаниях товаров",
//                    "E" => "5"
//                ],
//                "3" => [
//                    "A" => "2020-01-01 - 2020-01-31",
//                    "B" => "18",
//                    "C" => "Супервайзер Проектенко 14",
//                    "D" => "Ошибки в характеристиках и описаниях товаров",
//                    "E" => "10"
//                ],
//                "4" => [
//                    "A" => "2020-02-01 - 2020-02-28",
//                    "B" => "24",
//                    "C" => "Супервайзер Категоркин 18",
//                    "D" => "Ошибки в характеристиках и описаниях товаров",
//                    "E" => "5"
//                ],
//                "5" => [
//                    "A" => "2020-03-01 - 2020-03-31",
//                    "B" => "24",
//                    "C" => "Супервайзер Категоркин 18",
//                    "D" => "Ошибки в характеристиках и описаниях товаров",
//                    "E" => "5"
//                ],
            ]
        ]
    ],

];
