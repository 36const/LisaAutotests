<?php

use lisa\Page\Functional\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех зафиксированных данных по СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '[]',
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
                "cantSee" => [
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
            'url' => '{"ReportPeriodRequestFieldSearch":{"report_period_id":"3","request_id":"","supervisor_id":"","field_id":""},"page":"7"}',
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
                "cantSee" => [
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
            'url' => '{"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"10","supervisor_id":"","field_id":""}}',
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
                "cantSee" => [
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
            'url' => '{"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"","supervisor_id":"35","field_id":""}}',
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
                "cantSee" => [
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
            'url' => '{"ReportPeriodRequestFieldSearch":{"report_period_id":"","request_id":"","supervisor_id":"","field_id":"35"}}',
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
                "cantSee" => [
                ],
            ]
        ]
    ],

];
