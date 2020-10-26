<?php

use lisa\Page\Functional\RequestView;

return [
    'case1_1_сс_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_1_cc_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
            ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case1_1_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_1_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case1_1_product' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_1_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case1_1_sv' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_1_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case1_2_cc_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Маркетплейса) из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2_cc_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case1_2_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Маркетплейса) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case1_2_product' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Маркетплейса) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case1_2_sv' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Маркетплейса) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1_2_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2_1_manager' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_1_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case2_1_product' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_1_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case2_1_sv' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_1_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2_2_manager' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_2_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case2_2_product' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_2_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case2_2_sv' => [
        'setting' => [
            'description' => 'Заявка на на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2_2_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case7_0_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_0_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case7_0_product' => [
        'setting' => [
            'description' => 'Заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_0_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case7_0_sv' => [
        'setting' => [
            'description' => 'Заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7_0_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case9_0_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_0_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case9_0_product' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_0_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case9_0_sv' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9_0_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case11_0_manager' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0_manager.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ]
            ]
        ]
    ],

    'case11_0_product' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0_product.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$svReportPeriods],
                        ["selector" => RequestView::$reportPeriodId],
                    ]
                ]
            ]
        ]
    ],

    'case11_0_sv' => [
        'setting' => [
            'description' => 'Заявка на Добавление параметров/значений (Определяется типом задачи) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11_0_sv.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$commonInformation],
                        ["selector" => RequestView::$results],
                        ["selector" => RequestView::$errors],
                        ["selector" => RequestView::$errorsCrossCheck],
                        ["selector" => RequestView::$motivationSupervisors],
                        ["selector" => RequestView::$motivationManagers],
                        ["selector" => RequestView::$motivationCcManagers],
                        ["selector" => RequestView::$dates],
                        ["selector" => RequestView::$reportPeriodId],
                        ["selector" => RequestView::$svReportPeriods],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

];
