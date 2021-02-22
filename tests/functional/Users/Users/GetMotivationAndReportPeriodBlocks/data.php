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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$dates],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$svReportPeriods],
                        [RequestView::$reportPeriodId],
                        [RequestView::$supervisor_comment],
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
                        [RequestView::$commonInformation],
                        [RequestView::$results],
                        [RequestView::$errors],
                        [RequestView::$errorsCrossCheck],
                        [RequestView::$motivationSupervisors],
                        [RequestView::$motivationManagers],
                        [RequestView::$motivationCcManagers],
                        [RequestView::$dates],
                        [RequestView::$reportPeriodId],
                        [RequestView::$svReportPeriods],
                        [RequestView::$supervisor_comment],
                    ]
                ],
                "cantSee" => []
            ]
        ]
    ],

];
