<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание активного коэф. сложности тип 1 со всеми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
            ],
            'requestBody' => [
                'difficulty_coef' => 1.5,
                'type_id' => 1,
                'status' => 1,
                'field_ids' => [
                    0 => '1',
                    1 => '2',
                    2 => '3',
                    3 => '4',
                    4 => '6',
                    5 => '7',
                    6 => '8',
                    7 => '10',
                    8 => '12',
                    9 => '13',
                    10 => '14',
                    11 => '15',
                    12 => '9',
                    13 => '11',
                    14 => '16',
                    15 => '17',
                    16 => '18',
                    17 => '19',
                    18 => '123',
                    19 => '124',
                    20 => '125',
                    21 => '5',
                    22 => '126',
                    23 => '127',
                    24 => '159',
                    25 => '160',
                    26 => '169',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 43,
                    'type_id' => 'Добавление новых товаров',
                    'difficulty_coef' => 1.5,
                    'status' => 'Активный',
                    'field_ids' => 'Ручная загрузка | Пакетная загрузка | Виза супервайзера | С фотосъемкой | Стоп-бренды | Точки входа | Добавление графики | С размерной сеткой | С тегами к товарам | Уценка | Уценка 2 | На основе отзыва клиента на сайте | Жалоба на товар продавца маркета | Промо-описание | С видео | Лоты | БУ, REF | Добавление товаров в новую категорию | С палитрой | Обновление фото | Обновление описания | Обновление характеристик | Добавление/обновление инструкций | Автомодерация | По заявке с MobileCourier | Укр. поля | Алгоритм',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            [
                                'id' => 43,
                                'type_id' => 1,
                                'field_ids' => '[1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 123, 124, 125, 126, 127, 159, 160, 169]',
                                'difficulty_coef' => 1.5,
                                'status' => 1
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 43,
                            'old_value' => '[]',
                            'new_value' => '{"status": 1, "type_id": 1, "field_ids": "[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,123,124,125,126,127,159,160,169]", "difficulty_coef": 1.5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заблокированного коэф. сложности тип 4 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e',
            ],
            'requestBody' => [
                'difficulty_coef' => 0.75,
                'type_id' => 4,
                'status' => 0,
                'field_ids' => [
                    0 => '1',
                    1 => '4',
                    2 => '7',
                    3 => '10',
                    4 => '13',
                    5 => '16',
                    6 => '19',
                    7 => '125',
                ]
            ],
            'responseBody' => [
                'model' => [
                    'id' => 43,
                    'type_id' => 'Группировка товаров',
                    'difficulty_coef' => 0.75,
                    'status' => 'Заблокированный',
                    'field_ids' => 'Ручная загрузка | С фотосъемкой | Добавление графики | Уценка | Жалоба на товар продавца маркета | Лоты | С палитрой | Обновление характеристик',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            [
                                'id' => 43,
                                'type_id' => 4,
                                'field_ids' => '[1, 4, 7, 10, 13, 16, 19, 125]',
                                'difficulty_coef' => 0.75,
                                'status' => 0
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 43,
                            'old_value' => '[]',
                            'new_value' => '{"status": 0, "type_id": 4, "field_ids": "[1,4,7,10,13,16,19,125]", "difficulty_coef": 0.75}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание активного коэф. сложности тип 7 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38',
                'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd',
            ],
            'requestBody' => [
                'difficulty_coef' => 2.5,
                'type_id' => 7,
                'status' => 1,
                'field_ids' => [
                    0 => '2',
                    1 => '5',
                    2 => '8',
                    3 => '11',
                    4 => '14',
                    5 => '17',
                    6 => '123',
                    7 => '126',
                ]
            ],
            'responseBody' => [
                'model' => [
                    'id' => 43,
                    'type_id' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                    'difficulty_coef' => 2.5,
                    'status' => 'Активный',
                    'field_ids' => 'Пакетная загрузка | Стоп-бренды | С размерной сеткой | Уценка 2 | Промо-описание | БУ, REF | Обновление фото | Добавление/обновление инструкций',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            [
                                'id' => 43,
                                'type_id' => 7,
                                'field_ids' => '[2, 5, 8, 11, 14, 17, 123, 126]',
                                'difficulty_coef' => 2.5,
                                'status' => 1
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 43,
                            'old_value' => '[]',
                            'new_value' => '{"status": 1, "type_id": 7, "field_ids": "[2,5,8,11,14,17,123,126]", "difficulty_coef": 2.5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание заблокированного коэф. сложности тип 11 без чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6',
            ],
            'requestBody' => [
                'difficulty_coef' => 3.0,
                'type_id' => 11,
                'status' => 0,
                'field_ids' => [
                ]
            ],
            'responseBody' => [
                'model' => [
                    'id' => 43,
                    'type_id' => 'Проектирование структуры',
                    'difficulty_coef' => 3,
                    'status' => 'Заблокированный',
                    'field_ids' => '',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            [
                                'id' => 43,
                                'type_id' => 11,
                                'field_ids' => '[]',
                                'difficulty_coef' => 3,
                                'status' => 0
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 43,
                            'old_value' => '[]',
                            'new_value' => '{"status": 0, "type_id": 11, "field_ids": "[]", "difficulty_coef": 3}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания коэф. сложности с пустым полем "Тип"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'type_id' => NULL,
                'field_ids' => [
                ],
                'difficulty_coef' => '2',
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'type_id' => [
                        0 => 'Необходимо заполнить «Тип задачи».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs']
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность создания коэф. сложности с пустым полем "Коэффициент сложности"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'type_id' => 1,
                'field_ids' => [
                ],
                'difficulty_coef' => '',
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'difficulty_coef' => [
                        0 => 'Необходимо заполнить «Коэффициент сложности».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs']
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность создания коэф. сложности с существующей комбинацией коэф-та и типа',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'type_id' => 1,
                'field_ids' => [
                    0 => '1',
                ],
                'difficulty_coef' => 2,
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'type_id' => [
                        0 => 'Такая комбинация Типа заявки и выбраных полей уже существует',
                    ],
                    'field_ids' => [
                        0 => 'Такая комбинация Типа заявки и выбраных полей уже существует',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs']
                ],
            ]
        ]
    ],

];
