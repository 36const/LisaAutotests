<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница магазинов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/seller/update?id=9423']",
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=67757']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница магазинов с обратной сортировкой по owox id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-owox_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=67757']",
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=9423']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница магазинов с прямой сортировкой по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-supervisor_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=9423']",
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=67757']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница магазинов с фильтром по owox id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=83&SellerSearch[name]=&SellerSearch[supervisor_id]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Маркетплейс (общий)"
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "anytech"
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "iTook"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница магазинов с фильтром по названию магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=&SellerSearch[name]=Маркет&SellerSearch[supervisor_id]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Euromart"
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "anytech"
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "iTook"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница магазинов с фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=&SellerSearch[name]=&SellerSearch[supervisor_id]=6',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Маркетплейс (общий)"
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "anytech"
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "iTook"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница магазинов с фильтром по id > 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=999999999999&SellerSearch[name]=&SellerSearch[supervisor_id]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «OWOX ID магазина» не должно превышать 999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/seller/update?id=9423']",
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=67757']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница магазинов с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&SellerSearch[name]=&SellerSearch[supervisor_id]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «OWOX ID магазина» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "OWOX ID магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Куратор Магазина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "0"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Маркетплейс (общий)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Руководько 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ],
                    ],
                    "Магазин 5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/seller/update?id=5']",
                        ],
                    ],
                    "Магазин 83" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "83"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/seller/update?id=83']",
                        ],
                    ],
                    "Магазин 9423" => [
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "9423"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/seller/update?id=9423']",
                        ],
                    ],
                    "Магазин 67757" => [
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "67757"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "(не задано)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=67757']",
                        ],
                    ],
                ],
                "cantSee" => []
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Страница магазинов с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=999&SellerSearch[name]=&SellerSearch[supervisor_id]=',
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
            'description' => 'Страница магазинов с несуществующим фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch[owox_id]=&SellerSearch[name]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&SellerSearch[supervisor_id]=',
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
