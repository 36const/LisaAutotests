<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Два продавца',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '83,5'
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                    3 => [
                        'id' => 3,
                        'type' => 'Перенос товаров',
                        'subject' => 'Rozetka',
                        'status' => 'На доработке',
                        'created_at' => '2020-01-03 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => 0,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 7,
                'next_page' => NULL,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявки по marketId и статусам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '83 9423',
                'status' => '1,2, 5фыва 9зшщг11'
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    10 => [
                        'id' => 10,
                        'type' => 'Изменение существующих параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Закрыта',
                        'created_at' => '2020-01-01 00:00:10',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 3,
                'next_page' => NULL,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявки по marketId и указанием кол-ва на страницу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5 83 9423',
                'perPage' => 2
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                ],
                'total_count' => 10,
                'next_page' => 2,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 2,
                'pages_count' => 5,
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявки по marketId и указанием кол-ва на страницу и другой страницы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'page' => 4,
                'perPage' => 2
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 10,
                'next_page' => 5,
                'previous_page' => 3,
                'current_page' => 4,
                'per_page' => 2,
                'pages_count' => 5,
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Заявки по marketId с указанием кол-ва на страницу и другой страницы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'page' => 4,
                'perPage' => 2
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 10,
                'next_page' => 5,
                'previous_page' => 3,
                'current_page' => 4,
                'per_page' => 2,
                'pages_count' => 5,
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Заявки по marketId с указанием сортировки по теме и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'sort' => 'subject,type',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    10 => [
                        'id' => 10,
                        'type' => 'Изменение существующих параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Закрыта',
                        'created_at' => '2020-01-01 00:00:10',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    3 => [
                        'id' => 3,
                        'type' => 'Перенос товаров',
                        'subject' => 'Rozetka',
                        'status' => 'На доработке',
                        'created_at' => '2020-01-03 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => 0,
                    ],
                ],
                'total_count' => 10,
                'next_page' => NULL,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Заявки по marketId с указанием кол-ва на страницу и сортировки по дате создания и обратной по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'perPage' => 5,
                'sort' => 'created_at,-status',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 10,
                'next_page' => 2,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 5,
                'pages_count' => 2,
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Заявки по marketId с указанием статуса, кол-ва на страницу, другой страницы и сортировки по кол-ву  и id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 3,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    3 => [
                        'id' => 3,
                        'type' => 'Перенос товаров',
                        'subject' => 'Rozetka',
                        'status' => 'На доработке',
                        'created_at' => '2020-01-03 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => 0,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 9,
                'next_page' => 3,
                'previous_page' => 1,
                'current_page' => 2,
                'per_page' => 3,
                'pages_count' => 3,
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Ошибка если не указан marketId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
//                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 3,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'marketId' => 'В переданой строке marketId не найдено ни одного ID.',
                ]
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Ошибка если указан marketId текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^ CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 3,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'marketId' => 'В переданой строке marketId не найдено ни одного ID.',
                ]
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Ошибка если указан page текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 'asdf',
                'perPage' => 3,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'page' => 'Не валидный параметр page:\'asdf\'',
                ]
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Ошибка если указан perPage текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 'adsf',
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'perPage' => 'Не валидный параметр perPage:\'adsf\'',
                ]
            ],
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Ошибка если указан perPage текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 'adsf',
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'perPage' => 'Не валидный параметр page:\'adsf\'',
                ]
            ],
        ]
    ],


];