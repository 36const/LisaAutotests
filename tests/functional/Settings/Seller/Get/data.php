<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница магазинов',
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
                            "selector" => "//tbody/tr[1]/td[6]",
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
                "cantSee" => [
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Cтраница магазинов с обратной сортировкой по owox id',
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
                            "selector" => "//tbody/tr[5]/td[6]",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница магазинов с прямой сортировкой по супервайзеру',
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
                            "selector" => "//tbody/tr[5]/td[6]",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Магазин 0" => [
                        [
                            "selector" => "//tbody/tr[5]/td[6]/a[@href='/bpm/seller/update?id=0']",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница магазинов с фильтром по owox id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch%5Bowox_id%5D=83&SellerSearch%5Bname%5D=&SellerSearch%5Bsupervisor_id%5D=',
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
            'description' => 'Cтраница магазинов с фильтром по названию магазина',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch%5Bowox_id%5D=&SellerSearch%5Bname%5D=Маркет&SellerSearch%5Bsupervisor_id%5D=',
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
            'description' => 'Cтраница магазинов с фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?SellerSearch%5Bowox_id%5D=&SellerSearch%5Bname%5D=&SellerSearch%5Bsupervisor_id%5D=6',
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
];
