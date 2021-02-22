<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1_1' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление новых товаров (Работа с товарами Розетки)',
            'type' => 1,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                    ],
                    "Продавец" => [
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        [RequestCreate::findCheckbox(' Лоты')],
                        [RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Промо-описание')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' С тегами к товарам')],
                        [RequestCreate::findCheckbox(' С фотосъемкой')],
                        [RequestCreate::findCheckbox(' Уценка')],
                        [RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case1_2' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление новых товаров (Работа с товарами Маркетплейса)',
            'type' => 1,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$blockedCategory],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Автомодерация')],
                        [RequestCreate::findCheckbox(' БУ, REF')],
                        [RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С палитрой')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' Стоп-бренды')],
                        [RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ]
                ],
            ]
        ]
    ],

    'case2_1' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
            'type' => 2,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                    ],
                    "Продавец" => [
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление/обновление инструкций')],
                        [RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        [RequestCreate::findCheckbox(' Обновление описания')],
                        [RequestCreate::findCheckbox(' Обновление фото')],
                        [RequestCreate::findCheckbox(' Обновление характеристик')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' По заявке с MobileCourier')],
                        [RequestCreate::findCheckbox(' Промо-описание')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' С тегами к товарам')],
                        [RequestCreate::findCheckbox(' С фотосъемкой')],
                        [RequestCreate::findCheckbox(' Уценка')],
                        [RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case2_2' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
            'type' => 2,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$blockedCategory],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Автомодерация')],
                        [RequestCreate::findCheckbox(' БУ, REF')],
                        [RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        [RequestCreate::findCheckbox(' По заявке с MobileCourier')],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С палитрой')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' Стоп-бренды')],
                        [RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ]
                ],

            ]
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => 'Изменение типа на Перенос товаров (Работа с товарами Розетки)',
            'type' => 3,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                    ],
                    "Продавец" => [
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        [RequestCreate::findCheckbox(' Лоты')],
                        [RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Промо-описание')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' С тегами к товарам')],
                        [RequestCreate::findCheckbox(' С фотосъемкой')],
                        [RequestCreate::findCheckbox(' Уценка')],
                        [RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case3_2' => [
        'setting' => [
            'description' => 'Изменение типа на Перенос товаров (Работа с товарами Маркетплейса)',
            'type' => 3,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$blockedCategory],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Автомодерация')],
                        [RequestCreate::findCheckbox(' БУ, REF')],
                        [RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С палитрой')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' Стоп-бренды')],
                        [RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ]
                ],
            ]
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => 'Изменение типа на Группировка товаров (Определяется типом задачи)',
            'type' => 4,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Алгоритм')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case5_1' => [
        'setting' => [
            'description' => 'Изменение типа на Заливка фото с фотостудии (Работа с товарами Розетки)',
            'type' => 5,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                    ],
                    "Продавец" => [
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        [RequestCreate::findCheckbox(' Лоты')],
                        [RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Промо-описание')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' С тегами к товарам')],
                        [RequestCreate::findCheckbox(' С фотосъемкой')],
                        [RequestCreate::findCheckbox(' Уценка')],
                        [RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case6_2' => [
        'setting' => [
            'description' => 'Изменение типа на Проверка скрытых товаров (Работа с товарами Маркетплейса)',
            'type' => 6,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$blockedCategory]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Автомодерация')],
                        [RequestCreate::findCheckbox(' БУ, REF')],
                        [RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С палитрой')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' Стоп-бренды')],
                        [RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ]
                ],
            ]
        ]
    ],

    'case7_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
            'type' => 7,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление графики')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' Точки входа')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case8_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
            'type' => 8,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление графики')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' Точки входа')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case9_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление параметров/значений (Определяется типом задачи)',
            'type' => 9,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case10_0' => [
        'setting' => [
            'description' => 'Изменение типа на Изменение существующих параметров/значений (Определяется типом задачи)',
            'type' => 10,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => 'Изменение типа на Проектирование структуры (Определяется типом задачи)',
            'type' => 11,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case12_1' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
            'type' => 12,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                    ],
                    "Продавец" => [
                        [RequestCreate::rozetkaSellers(1, 9423, 'anytech')],
                        [RequestCreate::rozetkaSellers(2, 67757, 'iTook')],
                        [RequestCreate::rozetkaSellers(3, 83, 'Euromart')],
                        [RequestCreate::rozetkaSellers(4, 5, 'Rozetka') . '[@selected]'],
                        [RequestCreate::rozetkaSellers(5, -2, 'Все продавцы')],
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        [RequestCreate::findCheckbox(' Лоты')],
                        [RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Промо-описание')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        [RequestCreate::findCheckbox(' С видео')],
                        [RequestCreate::findCheckbox(' С размерной сеткой')],
                        [RequestCreate::findCheckbox(' С тегами к товарам')],
                        [RequestCreate::findCheckbox(' С фотосъемкой')],
                        [RequestCreate::findCheckbox(' Уценка')],
                        [RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case13_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение видео (Определяется типом задачи)',
            'type' => 13,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case14_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение размерной сетки (Определяется типом задачи)',
            'type' => 14,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case15_0' => [
        'setting' => [
            'description' => 'Изменение типа на Добавление/изменение тегов (Определяется типом задачи)',
            'type' => 15,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        [RequestCreate::$category],
                        [RequestCreate::$seller]
                    ],
                    "Чекбоксы" => [
                        [RequestCreate::findCheckbox(' Пакетная загрузка')],
                        [RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [RequestCreate::$subject],
                        [RequestCreate::$description],
                        [RequestCreate::$amount],
                        [RequestCreate::$plannedFinishDate],
                        [RequestCreate::$observers],
                        [RequestCreate::$priority],
                        [RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ]
];
