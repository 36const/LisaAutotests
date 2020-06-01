<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница команд',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/team/update?id=3']",
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/team/update?id=4']",
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/team/update?id=5']",
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "6   "
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/team/update?id=6']",
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
            'description' => 'Cтраница команд с обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/team/update?id=3']",
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/team/update?id=4']",
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/team/update?id=5']",
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=6']",
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
            'description' => 'Cтраница команд с прямой сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=name',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/team/update?id=3']",
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/team/update?id=4']",
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/team/update?id=5']",
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/team/update?id=6']",
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
            'description' => 'Cтраница команд с прямой сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/team/update?id=3']",
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/team/update?id=4']",
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody/tr[6]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[2]",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[3]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[6]/td[5]/a[@href='/bpm/team/update?id=5']",
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=6']",
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
            'description' => 'Cтраница команд с фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?TeamSearch%5Bid%5D=6&TeamSearch%5Bname%5D=&TeamSearch%5Bdirection%5D=&TeamSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "6"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Управление отделом"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=6']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с товарами Rozetka"
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с группами"
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Cтраница команд с фильтром по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?TeamSearch%5Bid%5D=&TeamSearch%5Bname%5D=Fash&TeamSearch%5Bdirection%5D=&TeamSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с группами"
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Управление отделом"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница команд с фильтром по направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?TeamSearch%5Bid%5D=&TeamSearch%5Bname%5D=&TeamSearch%5Bdirection%5D=2&TeamSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Fashion" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с товарами Rozetka"
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с группами"
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                    ],
                    "Административная команда" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Управление отделом"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница команд с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?TeamSearch%5Bid%5D=&TeamSearch%5Bname%5D=&TeamSearch%5Bdirection%5D=&TeamSearch%5Bstatus%5D=1',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Название"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Направление"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "Маркетплейс 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Маркетплейс 1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Работа с товарами Маркетплейса"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/team/update?id=1']",
                        ],
                    ],
                    "Fashion" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Fashion"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Работа с товарами Rozetka"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/team/update?id=2']",
                        ],
                    ],
                    "Группировка товаров" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Группировка товаров"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Работа с группами"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/team/update?id=3']",
                        ],
                    ],
                    "Проектирование структур категорий + фильтры" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Проектирование структур категорий + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Работа с проектированием структур + фильтрами"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/team/update?id=4']",
                        ],
                    ],
                    "Изменения в категориях" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "5"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => "Изменения в категориях"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]",
                            "value" => "Работа с порталами, фат-меню, категориями"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[5]/a[@href='/bpm/team/update?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "Административная команда" => [
                        [
                            "selector" => "//tbody",
                            "value" => "Административная команда"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Управление отделом"
                        ],
                    ],
                ]
            ]
        ]
    ],
];
