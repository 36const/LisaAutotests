<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявки по marketId, без доп. параметров',
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
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'status_id' => 2,
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                    3 => [
                        'id' => 3,
                        'type' => 'Перенос товаров',
                        'subject' => 'Rozetka',
                        'status' => 'На доработке',
                        'status_id' => 3,
                        'created_at' => '2020-01-03 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => 0,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'status_id' => 4,
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'status_id' => 5,
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'status_id' => 7,
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
                        'status_id' => 5,
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'status_id' => 9,
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    10 => [
                        'id' => 10,
                        'type' => 'Изменение существующих параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Закрыта',
                        'status_id' => 11,
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
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'status_id' => 2,
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
                        'status_id' => 7,
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'status_id' => 8,
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
            'description' => 'Заявки по marketId с указанием сортировки по статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '83',
                'sort' => 'status',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 6,
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 7,
                        'status' => 'Ожидает',
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 5,
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 4,
                        'status' => 'Отменена',
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 4,
                'next_page' => NULL,
                'previous_page' => NULL,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
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
                        'status_id' => 8,
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'status_id' => 9,
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    10 => [
                        'id' => 10,
                        'type' => 'Изменение существующих параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Закрыта',
                        'status_id' => 11,
                        'created_at' => '2020-01-01 00:00:10',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'status_id' => 7,
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'status_id' => 5,
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'status_id' => 4,
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'status_id' => 2,
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    3 => [
                        'id' => 3,
                        'type' => 'Перенос товаров',
                        'subject' => 'Rozetka',
                        'status' => 'На доработке',
                        'status_id' => 3,
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
            'description' => 'Заявки по marketId с указанием кол-ва на страницу и сортировки по дате создания и обратной по id статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'perPage' => 5,
                'sort' => 'created_at,-status_id',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'status_id' => 7,
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'status_id' => 8,
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'status_id' => 9,
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
                        'status_id' => 3,
                        'created_at' => '2020-01-03 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => 0,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'status_id' => 5,
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

    'case19' => [
        'setting' => [
            'description' => 'Заявки по marketId и requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ',
                'requestId' => '1 5 9',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 5,
                        'status' => 'Ожидает взятия в работу',
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 2,
                'next_page' => null,
                'previous_page' => null,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ],
        ]
    ],

    'case20' => [
        'setting' => [
            'description' => 'Заявки по marketId, typeId и статусу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'status' => ' 4^%#$5#!~6}{:>7?><M8э9 ',
                'typeId' => '1 6 9',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 4,
                        'status' => 'Отменена',
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status_id' => 6,
                        'status' => 'В работе',
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'status_id' => 9,
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 3,
                'next_page' => null,
                'previous_page' => null,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ],
        ]
    ],

    'case21' => [
        'setting' => [
            'description' => 'Заявки по marketId и sideUserId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'sideUserId' => ' 999!~888}{:>7?><M8э9 ',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    1 => [
                        'id' => 1,
                        'type' => 'Добавление новых товаров',
                        'subject' => 'Rozetka',
                        'status' => 'Новая',
                        'status_id' => 1,
                        'created_at' => '2020-01-01 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 999,
                    ],
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'status_id' => 2,
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                ],
                'total_count' => 2,
                'next_page' => null,
                'previous_page' => null,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ],
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Заявки по marketId и sideUserId = 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'sideUserId' => ' 0 ',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'status_id' => 4,
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'status_id' => 5,
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    7 => [
                        'id' => 7,
                        'type' => 'Добавление нового портала/раздела фат-меню/категории товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает',
                        'status_id' => 7,
                        'created_at' => '2020-01-01 00:00:07',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    8 => [
                        'id' => 8,
                        'type' => 'Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Частично выполнена',
                        'status_id' => 8,
                        'created_at' => '2020-01-01 00:00:08',
                        'amount_to_work' => 8,
                        'side_user_id' => NULL,
                    ],
                    9 => [
                        'id' => 9,
                        'type' => 'Добавление параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Выполнена',
                        'status_id' => 9,
                        'created_at' => '2020-01-01 00:00:09',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                    10 => [
                        'id' => 10,
                        'type' => 'Изменение существующих параметров/значений',
                        'subject' => 'anytech. Источник №9423',
                        'status' => 'Закрыта',
                        'status_id' => 11,
                        'created_at' => '2020-01-01 00:00:10',
                        'amount_to_work' => 10,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 7,
                'next_page' => null,
                'previous_page' => null,
                'current_page' => 1,
                'per_page' => 100,
                'pages_count' => 1,
            ],
        ]
    ],

    'case23' => [
        'setting' => [
            'description' => 'Заявки по marketId и sideUserId (0 и существующий) и указанием кол-ва на страницу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '5!@#$%^83CFBHUNJ 9423',
                'sideUserId' => ' 0, 888 ',
                'perPage' => 4,
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [
                    2 => [
                        'id' => 2,
                        'type' => 'Добавление/изменение информации в существующих товарах',
                        'subject' => 'Rozetka',
                        'status' => 'Готова для распределения',
                        'status_id' => 2,
                        'created_at' => '2020-01-02 00:00:00',
                        'amount_to_work' => 2,
                        'side_user_id' => 888,
                    ],
                    4 => [
                        'id' => 4,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Отменена',
                        'status_id' => 4,
                        'created_at' => '2020-01-04 00:00:00',
                        'amount_to_work' => 4,
                        'side_user_id' => NULL,
                    ],
                    5 => [
                        'id' => 5,
                        'type' => 'Заливка фото с фотостудии',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'Ожидает взятия в работу',
                        'status_id' => 5,
                        'created_at' => '2020-01-05 00:00:00',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                    6 => [
                        'id' => 6,
                        'type' => 'Проверка скрытых товаров',
                        'subject' => 'Euromart. Источник №1',
                        'status' => 'В работе',
                        'status_id' => 6,
                        'created_at' => '2020-01-01 00:00:06',
                        'amount_to_work' => 6,
                        'side_user_id' => NULL,
                    ],
                ],
                'total_count' => 8,
                'next_page' => 2,
                'previous_page' => null,
                'current_page' => 1,
                'per_page' => 4,
                'pages_count' => 2,
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
            'description' => 'Ошибка если указан несуществующий marketId больше 9999999',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^10000000 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
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

    'case12' => [
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

    'case13' => [
        'setting' => [
            'description' => 'Ошибка если указана несуществующая page',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5  83 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 3,
                'perPage' => 5,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 200,
                'requests' => [],
                'total_count' => 7,
                'next_page' => NULL,
                'previous_page' => 2,
                'current_page' => 3,
                'per_page' => 5,
                'pages_count' => 2,
            ],
        ]
    ],

    'case14' => [
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

    'case18' => [
        'setting' => [
            'description' => 'Ошибка если указан perPage > 500',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 501,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'perPage' => 'Не валидный параметр perPage:\'501\'',
                ]
            ],
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Ошибка если указан пробел в параметре сортировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' 1asdf2+_)(3*^&%4^%#$5#!~6}{:>7?><M8э9 ',
                'page' => 2,
                'perPage' => 5,
                'sort' => 'amount_to_work, -id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'sort' => 'Не валидный параметр сортировки: \' -id\'',
                ]
            ],
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Ошибка если указан status текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' asdf+_)(*^&%^%#$#!~}{:>?><Mэ ',
                'page' => 2,
                'perPage' => 5,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'status' => 'Не валидные параметры в поле status:\' asdf+_)(*^&%^%#$#!~}{:>?><Mэ \'',
                ]
            ],
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Ошибка если указан несуществующий status',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'status' => ' asdf+_)(*10^&%^%#$#!~}{:>?><Mэ ',
                'page' => 2,
                'perPage' => 5,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'status' => 'Не валидные параметры в поле status:\'10\'',
                ]
            ],
        ]
    ],

    'case24' => [
        'setting' => [
            'description' => 'Ошибка если указан requestId текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'requestId' => 'ФЫВАФЫВАФЫВАФЫВА',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'requestId' => 'В переданой строке requestId не найдено ни одного ID.',
                ]
            ],
        ]
    ],

    'case25' => [
        'setting' => [
            'description' => 'Пустой ответ если указан несуществующий requestId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'requestId' => 11,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'current_page' => 1,
                'next_page' => NULL,
                'pages_count' => 0,
                'per_page' => 100,
                'previous_page' => NULL,
                'requests' => [],
                'status' => 200,
                'total_count' => 0,
            ],
        ]
    ],

    'case26' => [
        'setting' => [
            'description' => 'Ошибка если если указан typeId текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'typeId' => ' asdf+_)(*^&%^%#$#!~}{:>?><Mэ ',
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'typeId' => 'В переданой строке typeId не найдено ни одного ID.',
                ]
            ],
        ]
    ],

    'case27' => [
        'setting' => [
            'description' => 'Пустой ответ указан несуществующий typeId',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'typeId' => 20,
                'perPage' => 5,
            ],
            'responseBody' => [
                'current_page' => 1,
                'next_page' => NULL,
                'pages_count' => 0,
                'per_page' => 5,
                'previous_page' => NULL,
                'requests' => [],
                'status' => 200,
                'total_count' => 0,
            ],
        ]
    ],

    'case28' => [
        'setting' => [
            'description' => 'Пустой ответ если указан side_user_id текст',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestParameters' => [
                'marketId' => '!@#$%^5 CFBHUNJ ',
                'sideUserId' => 'ФЫВАФЫВАФЫВАФЫВА',
                'page' => 1,
                'perPage' => 5,
                'sort' => 'amount_to_work,-id',
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'sideUserId' => 'В переданой строке sideUserId не найдено ни одного ID.',
                ]
            ],
        ]
    ],

];