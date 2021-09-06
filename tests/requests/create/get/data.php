<?php

$priorities = [
    0 => [
        'id' => 1,
        'name' => 'Информация необходима для склада',
        'status' => 1,
    ],
    1 => [
        'id' => 2,
        'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
        'status' => 1,
    ],
];
$excludedFields = [
    1 => [
        0 => 2,
    ],
    2 => [
        0 => 1,
        1 => 6,
        2 => 7,
        3 => 12,
        4 => 14,
        5 => 7,
    ],
    10 => [
        0 => 11,
        1 => 5,
        2 => 6,
        3 => 7,
        4 => 8,
        5 => 9,
        6 => 12,
        7 => 14,
        8 => 15,
        9 => 16,
        10 => 17,
        11 => 13,
        12 => 18,
        13 => 128,
        14 => 127,
    ],
    11 => [
        0 => 10,
        1 => 5,
        2 => 6,
        3 => 7,
        4 => 8,
        5 => 9,
        6 => 12,
        7 => 14,
        8 => 15,
        9 => 16,
        10 => 17,
        11 => 13,
        12 => 18,
        13 => 128,
        14 => 127,
    ],
    5 => [
        0 => 10,
        1 => 11,
        2 => 4,
        3 => 6,
        4 => 7,
        5 => 8,
        6 => 9,
        7 => 12,
        8 => 14,
        9 => 15,
        10 => 16,
    ],
    6 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 13,
        4 => 2,
        5 => 8,
        6 => 9,
        7 => 12,
        8 => 14,
        9 => 16,
        10 => 4,
        11 => 17,
        12 => 128,
        13 => 127,
    ],
    7 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 2,
        4 => 13,
        5 => 2,
        6 => 4,
        7 => 8,
        8 => 9,
        9 => 12,
        10 => 14,
        11 => 16,
        12 => 17,
        13 => 128,
        14 => 127,
    ],
    8 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 6,
        4 => 7,
        5 => 12,
        6 => 14,
        7 => 13,
        8 => 128,
        9 => 127,
    ],
    9 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 6,
        4 => 7,
        5 => 12,
        6 => 16,
        7 => 17,
        8 => 13,
        9 => 128,
        10 => 127,
    ],
    12 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 6,
        4 => 2,
        5 => 7,
        6 => 8,
        7 => 9,
        8 => 4,
        9 => 14,
        10 => 15,
        11 => 16,
        12 => 17,
        13 => 128,
        14 => 127,
    ],
    14 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 6,
        4 => 2,
        5 => 7,
        6 => 8,
        7 => 12,
        8 => 4,
        9 => 16,
        10 => 17,
        11 => 13,
        12 => 128,
        13 => 127,
    ],
    15 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 12,
        4 => 16,
        5 => 17,
        6 => 13,
        7 => 128,
        8 => 127,
    ],
    16 => [
        0 => 10,
        1 => 11,
        2 => 5,
        3 => 6,
        4 => 7,
        5 => 9,
        6 => 12,
        7 => 14,
        8 => 15,
        9 => 17,
        10 => 13,
        11 => 128,
        12 => 127,
    ],
    17 => [
        0 => 10,
        1 => 11,
        2 => 6,
        3 => 7,
        4 => 9,
        5 => 12,
        6 => 14,
        7 => 15,
        8 => 16,
    ],
    13 => [
        0 => 10,
        1 => 11,
        2 => 6,
        3 => 7,
        4 => 8,
        5 => 9,
        6 => 14,
        7 => 15,
        8 => 16,
    ],
    18 => [
        0 => 10,
        1 => 11,
    ],
    4 => [
        0 => 5,
        1 => 6,
        2 => 7,
        3 => 12,
        4 => 14,
        5 => 128,
        6 => 127,
    ],
    128 => [
        0 => 10,
        1 => 11,
        2 => 4,
        3 => 6,
        4 => 7,
        5 => 8,
        6 => 9,
        7 => 12,
        8 => 14,
        9 => 15,
        10 => 16,
    ],
    127 => [
        0 => 10,
        1 => 11,
        2 => 4,
        3 => 6,
        4 => 7,
        5 => 8,
        6 => 9,
        7 => 12,
        8 => 14,
        9 => 15,
        10 => 16,
    ],
];
$checkboxesDirection0 = [
    0 => [
        'id' => 2,
        'name' => 'Пакетная загрузка',
        'checked' => false,
    ],
    1 => [
        'id' => 1,
        'name' => 'Ручная загрузка',
        'checked' => true,
    ],
];
$checkboxesDirection1 = [
    0 => [
        'id' => 18,
        'name' => 'Добавление товаров в новую категорию',
        'checked' => false,
    ],
    1 => [
        'id' => 16,
        'name' => 'Лоты',
        'checked' => false,
    ],
    2 => [
        'id' => 12,
        'name' => 'На основе отзыва клиента на сайте',
        'checked' => false,
    ],
    3 => [
        'id' => 2,
        'name' => 'Пакетная загрузка',
        'checked' => false,
    ],
    4 => [
        'id' => 14,
        'name' => 'Промо-описание',
        'checked' => false,
    ],
    5 => [
        'id' => 1,
        'name' => 'Ручная загрузка',
        'checked' => true,
    ],
    6 => [
        'checked' => false,
        'id' => 15,
        'name' => 'С видео',
    ],
    7 => [
        'checked' => false,
        'id' => 8,
        'name' => 'С размерной сеткой',
    ],
    8 => [
        'checked' => false,
        'id' => 9,
        'name' => 'С тегами к товарам',
    ],
    9 => [
        'checked' => false,
        'id' => 4,
        'name' => 'С фотосъемкой',
    ],
    10 => [
        'checked' => false,
        'id' => 10,
        'name' => 'Уценка',
    ],
    11 => [
        'checked' => false,
        'id' => 11,
        'name' => 'Уценка 2',
    ],
];
$checkboxesDirection2 = [
    0 => [
        'checked' => false,
        'id' => 127,
        'name' => 'Автомодерация',
    ],
    1 => [
        'checked' => false,
        'id' => 17,
        'name' => 'БУ, REF',
    ],
    2 => [
        'checked' => false,
        'id' => 13,
        'name' => 'Жалоба на товар продавца маркета',
    ],
    3 => [
        'checked' => false,
        'id' => 15,
        'name' => 'С видео',
    ],
    4 => [
        'checked' => false,
        'id' => 19,
        'name' => 'С палитрой',
    ],
    5 => [
        'checked' => false,
        'id' => 8,
        'name' => 'С размерной сеткой',
    ],
    6 => [
        'checked' => false,
        'id' => 5,
        'name' => 'Стоп-бренды',
    ],
    7 => [
        'checked' => false,
        'id' => 160,
        'name' => 'Укр. поля',
    ],
];
$initSeller = [
    0 => [
        'owox_id' => 9423,
        'title' => 'anytech',
    ],
    1 => [
        'owox_id' => 67757,
        'title' => 'iTook',
    ],
    2 => [
        'owox_id' => 83,
        'title' => 'Euromart',
    ],
    3 => [
        'owox_id' => 5,
        'title' => 'Rozetka',
    ],
    4 => [
        'owox_id' => 72141,
        'title' => 'Rozetka.md',
    ],
    5 => [
        'owox_id' => 124276,
        'title' => 'Rozetka.uz',
    ],
    6 => [
        'owox_id' => 128603,
        'title' => 'RozetkaEU',
    ],
    7 => [
        'owox_id' => -2,
        'title' => 'Все продавцы',
    ],
];

return [
    'case1_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 1,
                'direction' => 1,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection1,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => 5,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 1,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => $initSeller,
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case1_2' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых товаров (Работа с товарами Маркетплейса)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 1,
                'direction' => 2,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection2,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление новых товаров (Работа с товарами Маркетплейса)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 1,
                    'direction' => 2,
                ],
                'templates' => [
                    0 => [
                        'id' => 1,
                        'name' => 'Добавление',
                    ],
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case2_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 2,
                'direction' => 1,
            ],
            'responseBody' => [
                'checkboxes' => [
                    0 => [
                        'checked' => false,
                        'id' => 126,
                        'name' => 'Добавление/обновление инструкций',
                    ],
                    1 => [
                        'id' => 12,
                        'name' => 'На основе отзыва клиента на сайте',
                        'checked' => false,
                    ],
                    2 => [
                        'checked' => false,
                        'id' => 124,
                        'name' => 'Обновление описания',
                    ],
                    3 => [
                        'id' => 123,
                        'name' => 'Обновление фото',
                        'checked' => false,
                    ],
                    4 => [
                        'id' => 125,
                        'name' => 'Обновление характеристик',
                        'checked' => false,
                    ],
                    5 => [
                        'id' => 2,
                        'name' => 'Пакетная загрузка',
                        'checked' => false,
                    ],
                    6 => [
                        'id' => 159,
                        'name' => 'По заявке с MobileCourier',
                        'checked' => false,
                    ],
                    7 => [
                        'checked' => false,
                        'id' => 14,
                        'name' => 'Промо-описание',
                    ],
                    8 => [
                        'id' => 1,
                        'name' => 'Ручная загрузка',
                        'checked' => true,
                    ],
                    9 => [
                        'checked' => false,
                        'id' => 15,
                        'name' => 'С видео',
                    ],
                    10 => [
                        'checked' => false,
                        'id' => 8,
                        'name' => 'С размерной сеткой',
                    ],
                    11 => [
                        'checked' => false,
                        'id' => 9,
                        'name' => 'С тегами к товарам',
                    ],
                    12 => [
                        'checked' => false,
                        'id' => 4,
                        'name' => 'С фотосъемкой',
                    ],
                    13 => [
                        'checked' => false,
                        'id' => 10,
                        'name' => 'Уценка',
                    ],
                    14 => [
                        'checked' => false,
                        'id' => 11,
                        'name' => 'Уценка 2',
                    ],
                ],
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => 5,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 2,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => $initSeller,
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case2_2' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 2,
                'direction' => 2,
            ],
            'responseBody' => [
                'checkboxes' => [
                    0 => [
                        'checked' => false,
                        'id' => 127,
                        'name' => 'Автомодерация',
                    ],
                    1 => [
                        'checked' => false,
                        'id' => 17,
                        'name' => 'БУ, REF',
                    ],
                    2 => [
                        'checked' => false,
                        'id' => 13,
                        'name' => 'Жалоба на товар продавца маркета',
                    ],
                    3 => [
                        'checked' => false,
                        'id' => 159,
                        'name' => 'По заявке с MobileCourier',
                    ],
                    4 => [
                        'checked' => false,
                        'id' => 15,
                        'name' => 'С видео',
                    ],
                    5 => [
                        'checked' => false,
                        'id' => 19,
                        'name' => 'С палитрой',
                    ],
                    6 => [
                        'checked' => false,
                        'id' => 8,
                        'name' => 'С размерной сеткой',
                    ],
                    7 => [
                        'checked' => false,
                        'id' => 5,
                        'name' => 'Стоп-бренды',
                    ],
                    8 => [
                        'checked' => false,
                        'id' => 160,
                        'name' => 'Укр. поля',
                    ],
                ],
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 2,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case3_1' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 3,
                'direction' => 1,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection1,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Перенос товаров (Работа с товарами Розетки)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => 5,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 3,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => $initSeller,
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case3_2' => [
        'setting' => [
            'description' => 'Новая заявка на Перенос товаров (Работа с товарами Маркетплейса)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 3,
                'direction' => 2,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection2,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 3,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case4_0' => [
        'setting' => [
            'description' => 'Новая заявка на Группировка товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 4,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => [
                    0 => [
                        'checked' => false,
                        'id' => 169,
                        'name' => 'Алгоритм',
                    ],
                ],
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Группировка товаров (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 4,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case5_1' => [
        'setting' => [
            'description' => 'Новая заявка на Заливка фото с фотостудии (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 5,
                'direction' => 1,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection1,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => 5,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 5,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => $initSeller,
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case6_2' => [
        'setting' => [
            'description' => 'Новая заявка на Проверка скрытых товаров (Работа с товарами Маркетплейса)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 6,
                'direction' => 2,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection2,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Проверка скрытых товаров (Работа с товарами Маркетплейса)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 6,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case7_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 7,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => [
                    0 => [
                        'checked' => false,
                        'id' => 7,
                        'name' => 'Добавление графики',
                    ],
                    1 => [
                        'checked' => false,
                        'id' => 2,
                        'name' => 'Пакетная загрузка',
                    ],
                    2 => [
                        'id' => 1,
                        'name' => 'Ручная загрузка',
                        'checked' => true,
                    ],
                    3 => [
                        'checked' => false,
                        'id' => 6,
                        'name' => 'Точки входа',
                    ],
                ],
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 7,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case8_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 8,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => [
                    0 => [
                        'checked' => false,
                        'id' => 7,
                        'name' => 'Добавление графики',
                    ],
                    1 => [
                        'checked' => false,
                        'id' => 2,
                        'name' => 'Пакетная загрузка',
                    ],
                    2 => [
                        'id' => 1,
                        'name' => 'Ручная загрузка',
                        'checked' => true,
                    ],
                    3 => [
                        'checked' => false,
                        'id' => 6,
                        'name' => 'Точки входа',
                    ],
                ],
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 8,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case9_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление параметров/значений (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 9,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление параметров/значений (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 9,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case10_0' => [
        'setting' => [
            'description' => 'Новая заявка на Изменение существующих параметров/значений (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 10,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 10,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case11_0' => [
        'setting' => [
            'description' => 'Новая заявка на Проектирование структуры (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 11,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Проектирование структуры (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 11,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case12_1' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 12,
                'direction' => 1,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection1,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление новых СЦ/изменение существующих СЦ (Работа с товарами Розетки)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => 5,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 12,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => $initSeller,
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case13_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение видео (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 13,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение видео (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 13,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case14_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение размерной сетки (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 14,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение размерной сетки (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 14,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

    'case15_0' => [
        'setting' => [
            'description' => 'Новая заявка на Добавление/изменение тегов (Определяется типом задачи)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'typeId' => 15,
                'direction' => 0,
            ],
            'responseBody' => [
                'checkboxes' => $checkboxesDirection0,
                'excludedFields' => $excludedFields,
                'priorities' => $priorities,
                'pageTitle' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'request' => [
                    'subject' => NULL,
                    'description' => NULL,
                    'category_id' => NULL,
                    'seller_id' => NULL,
                    'amount_to_work' => NULL,
                    'planned_finish_date' => NULL,
                    'priority' => NULL,
                    'type_id' => 15,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initSeller' => [
                ],
                'initObservers' => [
                ],
                'parentAttachments' => [
                ],
            ]
        ]
    ],

];
