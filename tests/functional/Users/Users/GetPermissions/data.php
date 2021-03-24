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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/request/index']"]
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/user/create']"]
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
                        ["selector" => "//div[@class='col-md-4']//select[@id='userbpm-status' and @disabled]"]
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
                        ["selector" => "//table[@class='table table-striped table-bordered']//a[@href='/bpm/user/update?id=4']"]
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
                        ["selector" => "//div[@class='user-bpm-view']//a[@href='/bpm/user/update?id=4']"],
                        ["selector" => "//div[@class='user-bpm-view']//a[@href='/bpm/user/refresh-name?login=kutsan.k']"],
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
                        ["selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"],
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
                        ["selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"],
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
                        ["selector" => "//table//input[@name='Errors[1][RequestError][errors_count]' and @disabled]"],
                        ["selector" => "//table//input[@name='Errors[1][RequestError][items_with_errors]' and @disabled]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/seller']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/category/create']"],
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/category']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/team/create']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/difficulty-coef/create']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/field-values/create']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/reason/create']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/priority/create']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//header[@class='main-header']//a[@href='/bpm/excluded-fields']"],
                        ["selector" => "//tbody//a[contains(@href, '/update?id')]"],
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
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление новых товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Перенос товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Заливка фото с фотостудии']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление нового портала/раздела фат-меню/категории товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление параметров/значений']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Проектирование структуры']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение видео']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение тегов']"],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих товарах']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Группировка товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Проверка скрытых товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Изменение существующих параметров/значений']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление новых СЦ/изменение существующих СЦ']"],
                        ["selector" => "//select[@name='RequestType']//option[text()='Добавление/изменение размерной сетки']"],
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
                        ["selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"],
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
                        ["selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"],
                    ],
                ],
            ]
        ]
    ],

    //**** Шаблоны ****//
    'case23' => [
        'setting' => [
            'description' => 'Кнопка редактирования у чужих шаблонов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=1']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=2']"],
                    ],
                ],
            ]
        ]
    ],

    'case24' => [
        'setting' => [
            'description' => 'Поле редактирования владельца шаблона',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case23.php',
        'provider_data' => [
            "url" => '/bpm/request-template/update?id=1',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//select[@name='RequestTemplate[parent_id]']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//select[@name='RequestTemplate[user_id]']"],
                    ],
                ],
            ]
        ]
    ],

    'case25' => [
        'setting' => [
            'description' => 'Возможность использовать все шаблоны',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case25.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=1']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=2']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=3']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=4']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=5']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=6']"],
                    ],
                ],
            ]
        ]
    ],

    'case26' => [
        'setting' => [
            'description' => 'Возможность использовать шаблоны только своего направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case26.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=1']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=3']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=4']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=2']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=5']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=6']"],
                    ],
                ],
            ]
        ]
    ],

    'case27' => [
        'setting' => [
            'description' => 'Возможность использовать шаблоны только своей команды',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case27.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=1']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=3']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=2']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=4']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=5']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=6']"],
                    ],
                ],
            ]
        ]
    ],

    'case28' => [
        'setting' => [
            'description' => 'Возможность использовать только свои шаблоны',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case28.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=1']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=2']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=3']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=4']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=5']"],
                        ["selector" => "//tbody//a[@href='/bpm/request-template/update?id=6']"],
                    ],
                ],
            ]
        ]
    ],

    'case29' => [
        'setting' => [
            'description' => 'Доступ к разделу "Шаблоны задач"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '/bpm/request-template',
            "responseCode" => 403,
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => "//section[@class='content']//*[text() = 'Forbidden (#403)']"],
                    ]
                ],
            ]
        ]
    ],

];
