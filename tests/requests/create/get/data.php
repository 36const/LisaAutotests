<?php

use lisa\Constants;

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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 1,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
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
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 2,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 2,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 3,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 3,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 4,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 5,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 6,
                    'direction' => 2,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 7,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 8,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 9,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 10,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 11,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 12,
                    'direction' => 1,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 13,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 14,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
                'excludedFields' => Constants::EXCLUDED_FIELDS,
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
                    'rz_category_id' => NULL,
                    'type_id' => 15,
                    'direction' => 0,
                ],
                'templates' => [
                ],
                'initCategory' => [
                ],
                'initRzCategory' => [
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
