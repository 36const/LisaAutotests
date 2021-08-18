<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель активного коэффициента с чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 3,
            'responseBody' => [
                'model' => [
                    'id' => 3,
                    'type_id' => 2,
                    'field_ids' => [
                        0 => 8,
                        1 => 15,
                        2 => 19,
                    ],
                    'difficulty_coef' => 3,
                    'status' => 1,
                ],
                'initialValues' => [
                    'types' => [
                        1 => 'Добавление новых товаров',
                        2 => 'Добавление/изменение информации в существующих товарах',
                        3 => 'Перенос товаров',
                        4 => 'Группировка товаров',
                        5 => 'Заливка фото с фотостудии',
                        6 => 'Проверка скрытых товаров',
                        7 => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        8 => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        9 => 'Добавление параметров/значений',
                        10 => 'Изменение существующих параметров/значений',
                        11 => 'Проектирование структуры',
                        12 => 'Добавление новых СЦ/изменение существующих СЦ',
                        13 => 'Добавление/изменение видео',
                        14 => 'Добавление/изменение размерной сетки',
                        15 => 'Добавление/изменение тегов',
                    ],
                    'checkBoxes' => [
                        0 => [
                            1 => 'Ручная загрузка',
                            2 => 'Пакетная загрузка',
                            3 => 'Виза супервайзера',
                        ],
                        1 => [
                            4 => 'С фотосъемкой',
                            6 => 'Точки входа',
                            7 => 'Добавление графики',
                        ],
                        2 => [
                            8 => 'С размерной сеткой',
                            9 => 'С тегами к товарам',
                            10 => 'Уценка',
                        ],
                        3 => [
                            11 => 'Уценка 2',
                            12 => 'На основе отзыва клиента на сайте',
                            13 => 'Жалоба на товар продавца маркета',
                        ],
                        4 => [
                            14 => 'Промо-описание',
                            15 => 'С видео',
                            16 => 'Лоты',
                        ],
                        5 => [
                            17 => 'БУ, REF',
                            18 => 'Добавление товаров в новую категорию',
                            19 => 'С палитрой',
                        ],
                        6 => [
                            123 => 'Обновление фото',
                            124 => 'Обновление описания',
                            125 => 'Обновление характеристик',
                        ],
                        7 => [
                            126 => 'Добавление/обновление инструкций',
                            5 => 'Стоп-бренды',
                            127 => 'Автомодерация',
                        ],
                        8 => [
                            159 => 'По заявке с MobileCourier',
                            160 => 'Укр. поля',
                            169 => 'Алгоритм',
                        ],
                    ],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель заблокированного коэффициента без чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'type_id' => 2,
                    'field_ids' => [
                    ],
                    'difficulty_coef' => 0.5,
                    'status' => 0,
                ],
                'initialValues' => [
                    'types' => [
                        1 => 'Добавление новых товаров',
                        2 => 'Добавление/изменение информации в существующих товарах',
                        3 => 'Перенос товаров',
                        4 => 'Группировка товаров',
                        5 => 'Заливка фото с фотостудии',
                        6 => 'Проверка скрытых товаров',
                        7 => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        8 => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        9 => 'Добавление параметров/значений',
                        10 => 'Изменение существующих параметров/значений',
                        11 => 'Проектирование структуры',
                        12 => 'Добавление новых СЦ/изменение существующих СЦ',
                        13 => 'Добавление/изменение видео',
                        14 => 'Добавление/изменение размерной сетки',
                        15 => 'Добавление/изменение тегов',
                    ],
                    'checkBoxes' => [
                        0 => [
                            1 => 'Ручная загрузка',
                            2 => 'Пакетная загрузка',
                            3 => 'Виза супервайзера',
                        ],
                        1 => [
                            4 => 'С фотосъемкой',
                            6 => 'Точки входа',
                            7 => 'Добавление графики',
                        ],
                        2 => [
                            8 => 'С размерной сеткой',
                            9 => 'С тегами к товарам',
                            10 => 'Уценка',
                        ],
                        3 => [
                            11 => 'Уценка 2',
                            12 => 'На основе отзыва клиента на сайте',
                            13 => 'Жалоба на товар продавца маркета',
                        ],
                        4 => [
                            14 => 'Промо-описание',
                            15 => 'С видео',
                            16 => 'Лоты',
                        ],
                        5 => [
                            17 => 'БУ, REF',
                            18 => 'Добавление товаров в новую категорию',
                            19 => 'С палитрой',
                        ],
                        6 => [
                            123 => 'Обновление фото',
                            124 => 'Обновление описания',
                            125 => 'Обновление характеристик',
                        ],
                        7 => [
                            126 => 'Добавление/обновление инструкций',
                            5 => 'Стоп-бренды',
                            127 => 'Автомодерация',
                        ],
                        8 => [
                            159 => 'По заявке с MobileCourier',
                            160 => 'Укр. поля',
                            169 => 'Алгоритм',
                        ],
                    ],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить модель полей для создания коэффициента',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'model' => [
                    'id' => NULL,
                    'type_id' => NULL,
                    'field_ids' => [
                    ],
                    'difficulty_coef' => NULL,
                    'status' => 1,
                ],
                'initialValues' => [
                    'types' => [
                        1 => 'Добавление новых товаров',
                        2 => 'Добавление/изменение информации в существующих товарах',
                        3 => 'Перенос товаров',
                        4 => 'Группировка товаров',
                        5 => 'Заливка фото с фотостудии',
                        6 => 'Проверка скрытых товаров',
                        7 => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        8 => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        9 => 'Добавление параметров/значений',
                        10 => 'Изменение существующих параметров/значений',
                        11 => 'Проектирование структуры',
                        12 => 'Добавление новых СЦ/изменение существующих СЦ',
                        13 => 'Добавление/изменение видео',
                        14 => 'Добавление/изменение размерной сетки',
                        15 => 'Добавление/изменение тегов',
                    ],
                    'checkBoxes' => [
                        0 => [
                            1 => 'Ручная загрузка',
                            2 => 'Пакетная загрузка',
                            3 => 'Виза супервайзера',
                        ],
                        1 => [
                            4 => 'С фотосъемкой',
                            6 => 'Точки входа',
                            7 => 'Добавление графики',
                        ],
                        2 => [
                            8 => 'С размерной сеткой',
                            9 => 'С тегами к товарам',
                            10 => 'Уценка',
                        ],
                        3 => [
                            11 => 'Уценка 2',
                            12 => 'На основе отзыва клиента на сайте',
                            13 => 'Жалоба на товар продавца маркета',
                        ],
                        4 => [
                            14 => 'Промо-описание',
                            15 => 'С видео',
                            16 => 'Лоты',
                        ],
                        5 => [
                            17 => 'БУ, REF',
                            18 => 'Добавление товаров в новую категорию',
                            19 => 'С палитрой',
                        ],
                        6 => [
                            123 => 'Обновление фото',
                            124 => 'Обновление описания',
                            125 => 'Обновление характеристик',
                        ],
                        7 => [
                            126 => 'Добавление/обновление инструкций',
                            5 => 'Стоп-бренды',
                            127 => 'Автомодерация',
                        ],
                        8 => [
                            159 => 'По заявке с MobileCourier',
                            160 => 'Укр. поля',
                            169 => 'Алгоритм',
                        ],
                    ],
                ],
            ]
        ]
    ]
];