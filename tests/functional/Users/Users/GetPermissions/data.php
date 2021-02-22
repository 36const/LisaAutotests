<?php

return [
    //**** Управление заявками ****//
    'case1' => [
        'setting' => [
            'description' => 'Кнопка создания заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '/bpm/request/index',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/request/index']"]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Кнопка создания связанной заявки (конт. меню)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "cantSee" => [
                    [
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*",
                            "value" => "  Создать подзадачу"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Кнопка создания связанной заявки (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='col-md-12']//*",
                            "value" => "  Создать подзадачу"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Кнопка пакетного редактирования',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*",
                            "value" => " Пакетное редактирование"
                        ]
                    ]
                ]
            ]
        ]
    ],

    //**** Управление пользователями ****//
    'case5' => [
        'setting' => [
            'description' => 'Кнопка добавления пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            "url" => '/bpm/user',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/user/create']"]
                    ]
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Кнопка блокировки пользователя пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            "url" => '/bpm/user/update?id=4',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//div[@class='col-md-4']//select[@id='userbpm-status' and @disabled]"]
                    ]
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Кнопка изменения пользователя в таблице',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "url" => '/bpm/user',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//table[@class='table table-striped table-bordered']//a[@href='/bpm/user/update?id=4']"]
                    ]
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Кнопки изменения и синхронизации пользователя в профиле',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "url" => '/bpm/user/view?id=4',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//div[@class='user-bpm-view']//a[@href='/bpm/user/update?id=4']"],
                        ["//div[@class='user-bpm-view']//a[@href='/bpm/user/refresh-name?login=kutsan.k']"],
                    ]
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Заблокированный просмотр пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            "url" => '/bpm/user',
            "responseCode" => 403,
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//section[@class='content']//*[text() = 'Forbidden (#403)']"],
                    ]
                ],
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Заблокированный просмотр истории изменений пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case9.php',
        'provider_data' => [
            "url" => '/bpm/user-changes',
            "responseCode" => 403,
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//section[@class='content']//*[text() = 'Forbidden (#403)']"],
                    ]
                ],
            ]
        ]
    ],

    'case19' => [
        'setting' => [
            'description' => 'Редактирование количества ошибок заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case19.php',
        'provider_data' => [
            "url" => '/bpm/request/correction?id=1',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//table//input[@name='Errors[1][RequestError][errors_count]' and @disabled]"],
                        ["//table//input[@name='Errors[1][RequestError][items_with_errors]' and @disabled]"],
                    ]
                ],
            ]
        ]
    ],

    //**** Управление настройками ****//
    'case11' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек магазинов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            "url" => '/bpm/seller',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/seller']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек категорий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case12.php',
        'provider_data' => [
            "url" => '/bpm/category',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/category/create']"],
                        ["//header[@class='main-header']//a[@href='/bpm/category']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек команд',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case13.php',
        'provider_data' => [
            "url" => '/bpm/team',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/team/create']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек коэффициентов типов задач',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case14.php',
        'provider_data' => [
            "url" => '/bpm/difficulty-coef',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/difficulty-coef/create']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек значений полей заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case15.php',
        'provider_data' => [
            "url" => '/bpm/field-values',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/field-values/create']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек причин изменения статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case16.php',
        'provider_data' => [
            "url" => '/bpm/reason',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/reason/create']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек приоритетов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case17.php',
        'provider_data' => [
            "url" => '/bpm/priority',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/priority/create']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Кнопка редактирования настроек взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case18.php',
        'provider_data' => [
            "url" => '/bpm/excluded-fields',
            "pageObjects" => [
                "cantSee" => [
                    [
                        ["//header[@class='main-header']//a[@href='/bpm/excluded-fields']"],
                        ["//tbody//a[contains(@href, '/update?id')]",],
                    ]
                ]
            ]
        ]
    ],

    //**** Заявки ****//
    'case20' => [
        'setting' => [
            'description' => 'Доступные для создания типы заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case20.php',
        'provider_data' => [
            "url" => '/bpm/request',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//select[@name='RequestType']//option[text()='Добавление новых товаров']"],
                        ["//select[@name='RequestType']//option[text()='Перенос товаров']"],
                        ["//select[@name='RequestType']//option[text()='Заливка фото с фотостудии']"],
                        ["//select[@name='RequestType']//option[text()='Добавление нового портала/раздела фат-меню/категории товаров']"],
                        ["//select[@name='RequestType']//option[text()='Добавление параметров/значений']"],
                        ["//select[@name='RequestType']//option[text()='Проектирование структуры']"],
                        ["//select[@name='RequestType']//option[text()='Добавление/изменение видео']"],
                        ["//select[@name='RequestType']//option[text()='Добавление/изменение тегов']"],
                    ]
                ],
                "cantSee" => [
                    [
                        ["//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих товарах']"],
                        ["//select[@name='RequestType']//option[text()='Группировка товаров']"],
                        ["//select[@name='RequestType']//option[text()='Проверка скрытых товаров']"],
                        ["//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров']"],
                        ["//select[@name='RequestType']//option[text()='Изменение существующих параметров/значений']"],
                        ["//select[@name='RequestType']//option[text()='Добавление новых СЦ/изменение существующих СЦ']"],
                        ["//select[@name='RequestType']//option[text()='Добавление/изменение размерной сетки']"],
                    ]
                ]
            ]
        ]
    ],

    //**** Отчёты ****//
    'case21' => [
        'setting' => [
            'description' => 'Заблокированный доступ к выгрузке отчётов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case21.php',
        'provider_data' => [
            "url" => '/bpm/report/generate',
            "responseCode" => 403,
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//section[@class='content']//*[text() = 'Forbidden (#403)']"],

                    ],
                ],
            ]
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Заблокированный доступ к шаблонам отчётов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case21.php',
        'provider_data' => [
            "url" => '/bpm/report/index',
            "responseCode" => 403,
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//section[@class='content']//*[text() = 'Forbidden (#403)']"],

                    ],
                ],
            ]
        ]
    ],


];
