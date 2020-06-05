<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница причин изменения статусов',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с сортировкой по id',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с сортировкой по начал. статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=parent_status',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с сортировкой по конеч. статусу',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с сортировкой по причине',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с сортировкой по статусу',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=4&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=4']",
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

    'case8' => [
        'setting' => [
            'description' => 'Cтраница причин изменения статусов с фильтром по начал. статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=&ReasonSearch%5Bparent_status%5D=1&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=4']",
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

    'case9' => [
        'setting' => [
            'description' => 'Cтраница причин изменения статусов с фильтром по конеч. статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=4&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с фильтром по причине',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=Дубль&ReasonSearch%5Bstatus%5D=',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=3']",
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
            'description' => 'Cтраница причин изменения статусов с фильтром по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=0',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID причины"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с фильтром по id > 999 999 999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=9999999999&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с нечисловым фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=%3D~%7D%21%40%23%24%25%5E%26*%28%29_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
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
                            "value" => "Изначальный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конечный статус заявки"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Причина"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
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
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/reason/update?id=1']",
                        ],
                    ],
                    "6-7 2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "В работе"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "Ожидает"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/reason/update?id=2']",
                        ],
                    ],
                    "1-4 1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "Отменена"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "Дубль задачи"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "Активный"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/reason/update?id=3']",
                        ],
                    ],
                    "1-4 2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "Ожидает проверки условий"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "Отменена    "
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "Все товары уже есть на сайте"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "Заблокированый"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/reason/update?id=4']",
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
            'description' => 'Cтраница причин изменения статусов с несуществующим фильтром по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=999&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=&ReasonSearch%5Bstatus%5D=',
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
            'description' => 'Cтраница причин изменения статусов с несуществующим фильтром по причине',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?ReasonSearch%5Bid%5D=&ReasonSearch%5Bparent_status%5D=&ReasonSearch%5Bchild_status%5D=&ReasonSearch%5Breason%5D=%3D~%7D%21%40%23%24%25%5E%26*%28%29_%2B%60-%5D%27%2F%5B%3B.%2C%7D"%3F%7B%3A>%5C%7C<&ReasonSearch%5Bstatus%5D=',
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
