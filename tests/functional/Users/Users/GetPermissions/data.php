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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/request/index']"
                        ]
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
                "canSee" => [
                ],
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
                "canSee" => [
                ],
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
                "canSee" => [
                ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/user/create']"
                        ]
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
                        [
                            "selector" => "//div[@class='col-md-4']//select[@id='userbpm-status' and @disabled]"
                        ]
                    ]
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Кнопка редактирования пользователя в таблице',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "url" => '/bpm/user',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//table[@class='table table-striped table-bordered']//a[@href='/bpm/user/update?id=4']"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Кнопка редактирования и синхронизации пользователя в профиле',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            "url" => '/bpm/user/view?id=4',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='user-bpm-view']//a[@href='/bpm/user/update?id=4']"
                        ],
                        [
                            "selector" => "//div[@class='user-bpm-view']//a[@href='/bpm/user/refresh-name?login=kutsan.k']"
                        ],
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
                        [
                            "selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"
                        ],
                    ]
                ],
                "cantSee" => [
                ]
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
                        [
                            "selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"
                        ],
                    ]
                ],
                "cantSee" => [
                ]
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
                        [
                            "selector" => "//table//input[@name='Errors[1][RequestError][errors_count]' and @disabled]"
                        ],
                        [
                            "selector" => "//table//input[@name='Errors[1][RequestError][items_with_errors]' and @disabled]"
                        ],
                    ]
                ],
                "cantSee" => [
                ]
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/seller']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/category/create']"
                        ],
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/category']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/team/create']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/difficulty-coef/create']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/field-values/create']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/reason/create']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/priority/create']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/excluded-fields']"
                        ],
                        [
                            "selector" => "//tbody//a[contains(@href, '/update?id')]",
                        ],
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
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих товарах']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Группировка товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Проверка скрытых товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Изменение существующих параметров/значений']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление новых СЦ/изменение существующих СЦ']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение размерной сетки']"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление новых товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Перенос товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Заливка фото с фотостудии']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление нового портала/раздела фат-меню/категории товаров']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление параметров/значений']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Проектирование структуры']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение видео']"
                        ],
                        [
                            "selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение тегов']"
                        ],
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
                        [
                            "selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"
                        ],

                    ],
                ],
                "cantSee" => [
                ]
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
                        [
                            "selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"
                        ],

                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    //**** Переводы по статусам ****//
    'case23' => [
        'setting' => [
            'description' => '1 -> 2 transferWaitCheckToInCheck (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//ul[@class='nav nav-tabs']//a[@href='/bpm/request/new']"
                        ],
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Готова для распределения']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Готова для распределения']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case24' => [
        'setting' => [
            'description' => '1 -> 2 transferWaitCheckToInCheck (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Готова для распределения']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case25' => [
        'setting' => [
            'description' => '1_/2 -> 3 transferInCheckToRequireChange (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' На доработке']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' На доработке']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case26' => [
        'setting' => [
            'description' => '1_/2 -> 3 transferInCheckToRequireChange (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' На доработке']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case27' => [
        'setting' => [
            'description' => '1/_2 -> 3 transferInCheckToRequireChange (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case27.php',
        'provider_data' => [
            "url" => '/bpm/request/in-check',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' На доработке']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' На доработке']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case28' => [
        'setting' => [
            'description' => '1/_2 -> 3 transferInCheckToRequireChange (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case27.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' На доработке']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case29' => [
        'setting' => [
            'description' => '1_/2/5 -> 4 transferInCheckToDeclined (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case29.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case30' => [
        'setting' => [
            'description' => '1_/2/5 -> 4 transferInCheckToDeclined (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case29.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case31' => [
        'setting' => [
            'description' => '1/_2_/5 -> 4 transferInCheckToDeclined (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case31.php',
        'provider_data' => [
            "url" => '/bpm/request/in-check',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case32' => [
        'setting' => [
            'description' => '1/_2_/5 -> 4 transferInCheckToDeclined (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case31.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case33' => [
        'setting' => [
            'description' => '1/2/_5 -> 4 transferInCheckToDeclined (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case33.php',
        'provider_data' => [
            "url" => '/bpm/request/wait-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case34' => [
        'setting' => [
            'description' => '1/2/_5 -> 4 transferInCheckToDeclined (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case33.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case35' => [
        'setting' => [
            'description' => '3 -> 1 transferRequireChangeToInCheck (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case35.php',
        'provider_data' => [
            "url" => '/bpm/request/require-changes',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в новые']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Вернуть в новые']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case36' => [
        'setting' => [
            'description' => '3 -> 1 transferRequireChangeToInCheck (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case35.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в новые']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case37' => [
        'setting' => [
            'description' => '5 -> 6 transferWaitWorkToInWork (таблица) + Взятие в работу не менеджером заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case37.php',
        'provider_data' => [
            "url" => '/bpm/request/wait-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Взять в работу']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Взять в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case38' => [
        'setting' => [
            'description' => '5 -> 6 transferWaitWorkToInWork (заявка) + Взятие в работу не менеджером заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case37.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Взять в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case39' => [
        'setting' => [
            'description' => '6 -> 7 transferInWorkToOnHold (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case39.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Ожидать']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Ожидать']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case40' => [
        'setting' => [
            'description' => '6 -> 7 transferInWorkToOnHold (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case39.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Ожидать']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case41' => [
        'setting' => [
            'description' => '6 -> 8 transferInWorkToPartialComplete (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case41.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Частично выполнен']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Частично выполнен']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case42' => [
        'setting' => [
            'description' => '6 -> 8 transferInWorkToPartialComplete     (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case41.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Частично выполнен']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case43' => [
        'setting' => [
            'description' => '6 -> 9 transferInWorkToCompleted (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case43.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Выполнен']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Выполнен']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case44' => [
        'setting' => [
            'description' => '6 -> 9 transferInWorkToCompleted (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case43.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Выполнен']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case45' => [
        'setting' => [
            'description' => '6 -> 4 transferInWorkToDeclined (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case45.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case46' => [
        'setting' => [
            'description' => '6 -> 4 transferInWorkToDeclined (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case45.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Отменить']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case47' => [
        'setting' => [
            'description' => '7 -> 6 transferOnHoldToInWork (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case47.php',
        'provider_data' => [
            "url" => '/bpm/request/in-work',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case48' => [
        'setting' => [
            'description' => '7 -> 6 transferOnHoldToInWork (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case47.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case49' => [
        'setting' => [
            'description' => '8_/9 -> 6 transferCompletedToRequireFix (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case49.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case50' => [
        'setting' => [
            'description' => '8_/9 -> 6 transferCompletedToRequireFix (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case49.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case51' => [
        'setting' => [
            'description' => '8/_9 -> 6 transferCompletedToRequireFix (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case51.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case52' => [
        'setting' => [
            'description' => '8/_9 -> 6 transferCompletedToRequireFix (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case51.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Вернуть в работу']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case53' => [
        'setting' => [
            'description' => '8_/9 -> 11 transferCompletedToClosed (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case53.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Закрыть']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Закрыть']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case54' => [
        'setting' => [
            'description' => '8_/9 -> 11 transferCompletedToClosed (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case53.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Закрыть']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case55' => [
        'setting' => [
            'description' => '8/_9 -> 11 transferCompletedToClosed (таблица)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case55.php',
        'provider_data' => [
            "url" => '/bpm/request/completed',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Закрыть']"
                        ],
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*[text()=' Закрыть']"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case56' => [
        'setting' => [
            'description' => '8/_9 -> 11 transferCompletedToClosed (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case55.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*[text()=' Закрыть']"
                        ],
                    ],
                ]
            ]
        ]
    ],

];
