<?php

use lisa\Page\Requests\RequestView;

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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
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
                        ["selector" => RequestView::$supervisor_comment],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

];
