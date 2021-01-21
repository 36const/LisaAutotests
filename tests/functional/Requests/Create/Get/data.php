<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Розетки)',
            'type' => 1,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        ["selector" => RequestCreate::findCheckbox(' Лоты')],
                        ["selector" => RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Промо-описание')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' С тегами к товарам')],
                        ["selector" => RequestCreate::findCheckbox(' С фотосъемкой')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case1_2' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Маркетплейса)',
            'type' => 1,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Автомодерация')],
                        ["selector" => RequestCreate::findCheckbox(' БУ, REF')],
                        ["selector" => RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С палитрой')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' Стоп-бренды')],
                        ["selector" => RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ],

            ]
        ]
    ],

    'case2_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
            'type' => 2,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление/обновление инструкций')],
                        ["selector" => RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        ["selector" => RequestCreate::findCheckbox(' Обновление описания')],
                        ["selector" => RequestCreate::findCheckbox(' Обновление фото')],
                        ["selector" => RequestCreate::findCheckbox(' Обновление характеристик')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' По заявке с MobileCourier')],
                        ["selector" => RequestCreate::findCheckbox(' Промо-описание')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' С тегами к товарам')],
                        ["selector" => RequestCreate::findCheckbox(' С фотосъемкой')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case2_2' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
            'type' => 2,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Автомодерация')],
                        ["selector" => RequestCreate::findCheckbox(' БУ, REF')],
                        ["selector" => RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        ["selector" => RequestCreate::findCheckbox(' По заявке с MobileCourier')],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С палитрой')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' Стоп-бренды')],
                        ["selector" => RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ],

            ]
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Розетки)',
            'type' => 3,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        ["selector" => RequestCreate::findCheckbox(' Лоты')],
                        ["selector" => RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Промо-описание')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' С тегами к товарам')],
                        ["selector" => RequestCreate::findCheckbox(' С фотосъемкой')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case3_2' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Маркетплейса)',
            'type' => 3,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "Общие" => [
                    ["selector" => RequestCreate::$subject],
                    ["selector" => RequestCreate::$description],
                    ["selector" => RequestCreate::$amount],
                    ["selector" => RequestCreate::$plannedFinishDate],
                    ["selector" => RequestCreate::$observers],
                    ["selector" => RequestCreate::$priority],
                ],
                "canSee" => [
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Автомодерация')],
                        ["selector" => RequestCreate::findCheckbox(' БУ, REF')],
                        ["selector" => RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С палитрой')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' Стоп-бренды')],
                        ["selector" => RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ],

            ]
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => 'Новая заявка на Группировка товаров (Определяется типом задачи)',
            'type' => 4,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "Общие" => [
                    ["selector" => RequestCreate::$subject],
                    ["selector" => RequestCreate::$description],
                    ["selector" => RequestCreate::$amount],
                    ["selector" => RequestCreate::$plannedFinishDate],
                    ["selector" => RequestCreate::$observers],
                    ["selector" => RequestCreate::$priority],
                ],
                "canSee" => [
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case5_1' => [
        'setting' => [
            'description' => 'Новая заявка на Заливка фото с фотостудии (Работа с товарами Розетки)',
            'type' => 5,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        ["selector" => RequestCreate::findCheckbox(' Лоты')],
                        ["selector" => RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Промо-описание')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' С тегами к товарам')],
                        ["selector" => RequestCreate::findCheckbox(' С фотосъемкой')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case6_2' => [
        'setting' => [
            'description' => 'Новая заявка на Проверка скрытых товаров (Работа с товарами Маркетплейса)',
            'type' => 6,
            'direction' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Автомодерация')],
                        ["selector" => RequestCreate::findCheckbox(' БУ, REF')],
                        ["selector" => RequestCreate::findCheckbox(' Жалоба на товар продавца маркета')],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С палитрой')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' Стоп-бренды')],
                        ["selector" => RequestCreate::findCheckbox(' Укр. поля')],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ]
                ],

            ]
        ]
    ],

    'case7_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
            'type' => 7,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление графики')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' Точки входа')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case8_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
            'type' => 8,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление графики')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' Точки входа')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case9_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление параметров/значений (Определяется типом задачи)',
            'type' => 9,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case10_0' => [
        'setting' => [
            'description' => 'Новая заявка на Изменение существующих параметров/значений (Определяется типом задачи)',
            'type' => 10,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => 'Новая заявка на Проектирование структуры (Определяется типом задачи)',
            'type' => 11,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case12_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
            'type' => 12,
            'direction' => 1
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Продавец" => [
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[1][@value='9423']",
                            "value" => "anytech"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[2][@value='67757']",
                            "value" => "iTook"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[3][@value='83']",
                            "value" => "Euromart"
                        ],
                        [
                            "selector" => "//select[@name='Request[seller_id]']/option[4][@value='5' and @selected]",
                            "value" => "Rozetka"
                        ],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Добавление товаров в новую категорию')],
                        ["selector" => RequestCreate::findCheckbox(' Лоты')],
                        ["selector" => RequestCreate::findCheckbox(' На основе отзыва клиента на сайте')],
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Промо-описание')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                        ["selector" => RequestCreate::findCheckbox(' С видео')],
                        ["selector" => RequestCreate::findCheckbox(' С размерной сеткой')],
                        ["selector" => RequestCreate::findCheckbox(' С тегами к товарам')],
                        ["selector" => RequestCreate::findCheckbox(' С фотосъемкой')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка')],
                        ["selector" => RequestCreate::findCheckbox(' Уценка 2')],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case13_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение видео (Определяется типом задачи)',
            'type' => 13,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case14_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение размерной сетки (Определяется типом задачи)',
            'type' => 14,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ],

    'case15_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение тегов (Определяется типом задачи)',
            'type' => 15,
            'direction' => 0
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    "Общие" => [
                        ["selector" => RequestCreate::$subject],
                        ["selector" => RequestCreate::$description],
                        ["selector" => RequestCreate::$amount],
                        ["selector" => RequestCreate::$plannedFinishDate],
                        ["selector" => RequestCreate::$observers],
                        ["selector" => RequestCreate::$priority],
                    ],
                    "Чекбоксы" => [
                        ["selector" => RequestCreate::findCheckbox(' Пакетная загрузка')],
                        ["selector" => RequestCreate::findCheckbox(' Ручная загрузка') . '[@checked]'],
                    ]
                ],
                "cantSee" => [
                    [
                        ["selector" => RequestCreate::$blockedCategory]
                    ]
                ]
            ]
        ]
    ]
];
