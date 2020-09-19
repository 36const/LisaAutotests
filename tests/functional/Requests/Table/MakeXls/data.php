<?php

use lisa\Page\Functional\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка заявки с заблокированными значениями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка заявки со специальными символами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка заявки с несколькими отчётными периодами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка заявки с причиной отмены/доработки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
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
            'description' => 'Выгрузка заявок со всеми случаями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
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
