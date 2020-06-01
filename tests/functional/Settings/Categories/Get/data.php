<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница категорий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Cтраница категорий с обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница категорий с обратной сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-title',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница категорий с прямой сортировкой по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=supervisor_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Cтраница категорий с обратной сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Cтраница категорий с фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?CategorySearch%5Bid%5D=2&CategorySearch%5Btitle%5D=&CategorySearch%5Bdifficulty%5D=&CategorySearch%5Bsupervisor_id%5D=&CategorySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Добавление логотипов к производителям"
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Авиабилеты"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница категорий с фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?CategorySearch%5Bid%5D=&CategorySearch%5Btitle%5D=Видео&CategorySearch%5Bdifficulty%5D=&CategorySearch%5Bsupervisor_id%5D=&CategorySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Видео к товару"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Авиабилеты"
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Добавление логотипов к производителям"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница категорий с фильтром по супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?CategorySearch%5Bid%5D=&CategorySearch%5Btitle%5D=&CategorySearch%5Bdifficulty%5D=&CategorySearch%5Bsupervisor_id%5D=6&CategorySearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Авиабилеты"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=1']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Видео к товару"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Cтраница категорий с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?CategorySearch%5Bid%5D=&CategorySearch%5Btitle%5D=&CategorySearch%5Bdifficulty%5D=&CategorySearch%5Bsupervisor_id%5D=&CategorySearch%5Bstatus%5D=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "ID категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Название категории"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Супервизор"
                        ],
                        [
                            "selector" => "//thead/tr/th[6]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Добавление логотипов к производителям" => [
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Добавление логотипов к производителям"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Супервайзер Начальникович 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[7]/a[@href='/bpm/category/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Авиабилеты" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Авиабилеты"
                        ],
                    ],
                    "Видео к товару" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Видео к товару"
                        ],
                    ],
                ]
            ]
        ]
    ],
];
