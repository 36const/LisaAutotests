<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница коэффициентов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов с обратной сортировкой по типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-type_id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов с сортировкой по полям',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=field_ids',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов с сортировкой по коэффициенту',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-difficulty_coef',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов с сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов c фильтром по типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=1&DifficultyCoefSearch[difficulty_coef]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Тип 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница коэффициентов c фильтром по коэффициенту',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=&DifficultyCoefSearch[difficulty_coef]=2',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Коэффициент 0.5" => [
                        [
                            "selector" => "//tbody",
                            "value" => "0.5"
                        ],
                    ],
                    "Коэффициент 3" => [
                        [
                            "selector" => "//tbody",
                            "value" => "3"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница коэффициентов c фильтром по статусу Заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=&DifficultyCoefSearch[difficulty_coef]=&DifficultyCoefSearch[status]=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody//a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody//a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody//a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Страница коэффициентов с фильтром по коэффициенту > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=&DifficultyCoefSearch[difficulty_coef]=9999999999',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «Коэффициент сложности» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ],
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница коэффициентов с нечисловым фильтром по коэффициенту',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=&DifficultyCoefSearch[difficulty_coef]=%3D~%7D%21%40%23%24%25%5E%26*%28%29_%2B%60-]%27%2F[%3B.%2C%7D"%3F%7B%3A>%5C%7C<',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «Коэффициент сложности» должно быть числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Тип задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Поля задачи"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Коэффициент сложности"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Тип 1-1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/difficulty-coef/update?id=1']",
                        ],
                    ],
                    "Тип 1-2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/difficulty-coef/update?id=2']",
                        ],
                    ],
                    "Тип 1-3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Добавление новых товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/difficulty-coef/update?id=3']",
                        ],
                    ],
                    "Тип 2-1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ручная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "0.5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/difficulty-coef/update?id=4']",
                        ],
                    ],
                    "Тип 2-2" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Пакетная загрузка"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/difficulty-coef/update?id=5']",
                        ],
                    ],
                    "Тип 2-3" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "Добавление/изменение информации в существующих товарах"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С размерной сеткой",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С видео",
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "С палитрой"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/difficulty-coef/update?id=6']",
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
            'description' => 'Страница коэффициентов с несуществующим фильтром по коэффициенту',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?DifficultyCoefSearch[type_id]=&DifficultyCoefSearch[difficulty_coef]=999',
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
