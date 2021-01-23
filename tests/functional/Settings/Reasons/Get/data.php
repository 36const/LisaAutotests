<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Страница причин изменения статусов с сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Страница причин изменения статусов с сортировкой по конеч. статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=child_status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Страница причин изменения статусов с сортировкой по причине',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=reason',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Страница причин изменения статусов с сортировкой по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=4&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=&ReasonSearch[status]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "6-7 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Дубль задачи"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с фильтром по конеч. статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=&ReasonSearch[parent_status]=&ReasonSearch[child_status]=4&ReasonSearch[reason]=&ReasonSearch[status]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "6-7 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с фильтром по причине',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=Дубль&ReasonSearch[status]=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "6-7 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Все товары уже есть на сайте"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=&ReasonSearch[status]=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                    "6-7 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody",
                            "value" => "Дубль задачи"
                        ],
                    ],
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с фильтром по id > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=9999999999&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=&ReasonSearch[status]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID причины» не должно превышать 999999999."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Страница причин изменения статусов с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=&ReasonSearch[status]=',
            "pageObjects" => [
                "canSee" => [
                    "Ошибка" => [
                        [
                            "selector" => "//thead//td[@class='has-error']//div",
                            "value" => "Значение «ID причины» должно быть целым числом."
                        ],
                    ],
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Статус причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    "6-7 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]/a[@href='/bpm/reason/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=999&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]=&ReasonSearch[status]=',
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

    'case15' => [
        'setting' => [
            'description' => 'Страница причин изменения статусов с несуществующим фильтром по причине',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch[id]=&ReasonSearch[parent_status]=&ReasonSearch[child_status]=&ReasonSearch[reason]==~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<&ReasonSearch[status]=',
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
