<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница должностей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница должностей с обратной сортировкой по ID должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница должностей с сортировкой по названию должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=name',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница должностей с сортировкой по описанию должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=description',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница должностей с сортировкой по дате создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-created_at',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница должностей с обратной сортировкой по дате обновления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=updated_at',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница должностей с фильтром по id > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=9999999999&RolesSearch[name]=&RolesSearch[description]=&RolesSearch[created_at]=&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID должности» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница должностей с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&RolesSearch[name]=&RolesSearch[description]=&RolesSearch[created_at]=&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID должности» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Описание должности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Администратор" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'admin'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Администратор"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-10 13:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/roles/update?id=2']",
                        ],
                    ],
                    "Руководитель супервайзеров" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'headSupervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Руководитель супервайзеров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-03-10 14:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/roles/update?id=3']",
                        ],
                    ],
                    "Супервайзер" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'supervisor'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Супервайзер"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-03-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "2020-03-12 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/roles/update?id=4']",
                        ],
                    ],
                    "Контент-менеджер" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'contentManager'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Контент-менеджер"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-04-10 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-04-11 12:07:48"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/roles/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Система" => [
                        [
                            "selector" => "//tbody",
                            "value" => 'system'
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Система"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Страница должностей с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=999&RolesSearch[name]=&RolesSearch[description]=&RolesSearch[created_at]=&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница должностей с несуществующим фильтром по названию должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=&RolesSearch[name]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&RolesSearch[description]=&RolesSearch[created_at]=&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Страница должностей с несуществующим фильтром по описанию должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=&RolesSearch[name]=&RolesSearch[description]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&RolesSearch[created_at]=&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Страница должностей с несуществующим фильтром по дате создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=&RolesSearch[name]=&RolesSearch[description]=&RolesSearch[created_at]=2020-06-15 00:00:00to2020-06-21 23:59:00&RolesSearch[updated_at]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Страница должностей с несуществующим фильтром по дате обновления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?RolesSearch[id]=&RolesSearch[name]=&RolesSearch[description]=&RolesSearch[created_at]=&RolesSearch[updated_at]=2020-06-15 00:00:00to2020-06-21 23:59:00',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//div[@class='empty']",
                            "value" => "Ничего не найдено."
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
