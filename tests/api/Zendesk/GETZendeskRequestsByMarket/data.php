<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Один существующий продавец, без статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "1" => [
                        "id" => 1,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "3" => [
                        "id" => 3,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                ],
                "count" => 3,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Два существующих продавца, без статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,83'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "1" => [
                        "id" => 1,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "3" => [
                        "id" => 3,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "4" => [
                        "id" => 4,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "5" => [
                        "id" => 5,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "6" => [
                        "id" => 6,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "7" => [
                        "id" => 7,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                ],
                "count" => 7,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Один существующий, другой несущестующий, без статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,8883'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "1" => [
                        "id" => 1,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "3" => [
                        "id" => 3,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                ],
                "count" => 3,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Все продавцы несуществующие, без статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5555,8883'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [],
                "count" => 0,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Один существующий продавец, с указанием одного статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5',
                "status" => '2'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                ],
                "count" => 1,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Два существующих продавца, с указанием всех статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,9423',
                "status" => '1,2,3,4,5,6,7,8,9,11'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "1" => [
                        "id" => 1,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "3" => [
                        "id" => 3,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "8" => [
                        "id" => 8,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "9" => [
                        "id" => 9,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "10" => [
                        "id" => 10,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                ],
                "count" => 6,
                "next_page" => null,
                "previous_page" => null
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Пустой продавец, с указанием всех статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '',
                "status" => '1,2,3,4,5,6,7,8,9,11'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "В переданой строке marketId не найдено ни одного ID."
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Пустой продавец, пустые статусы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '',
                "status" => ''
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "В переданой строке marketId не найдено ни одного ID."
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Без продавца, пустые статусы',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [
                "status" => ''
            ],
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Отсутствуют обязательные параметры: marketId",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException",
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Без продавца, без статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "requestParameters" => [],
            "responseCode" => 400,
            "responseBody" => [
                "name" => "Bad Request",
                "message" => "Отсутствуют обязательные параметры: marketId",
                "code" => 0,
                "status" => 400,
                "type" => "yii\\web\\BadRequestHttpException",
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Первая страница из трёх, без указания статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,83,9423',
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "1" => [
                        "id" => 1,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "2" => [
                        "id" => 2,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "3" => [
                        "id" => 3,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "4" => [
                        "id" => 4,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "5" => [
                        "id" => 5,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "6" => [
                        "id" => 6,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "7" => [
                        "id" => 7,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "8" => [
                        "id" => 8,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "9" => [
                        "id" => 9,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "10" => [
                        "id" => 10,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "11" => [
                        "id" => 11,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "12" => [
                        "id" => 12,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "13" => [
                        "id" => 13,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "14" => [
                        "id" => 14,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "15" => [
                        "id" => 15,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "16" => [
                        "id" => 16,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "17" => [
                        "id" => 17,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "18" => [
                        "id" => 18,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "19" => [
                        "id" => 19,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "20" => [
                        "id" => 20,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "21" => [
                        "id" => 21,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "22" => [
                        "id" => 22,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "23" => [
                        "id" => 23,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "24" => [
                        "id" => 24,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "25" => [
                        "id" => 25,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "26" => [
                        "id" => 26,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "27" => [
                        "id" => 27,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "28" => [
                        "id" => 28,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "29" => [
                        "id" => 29,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "30" => [
                        "id" => 30,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "31" => [
                        "id" => 31,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "32" => [
                        "id" => 32,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "33" => [
                        "id" => 33,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "34" => [
                        "id" => 34,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "35" => [
                        "id" => 35,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "36" => [
                        "id" => 36,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "37" => [
                        "id" => 37,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "38" => [
                        "id" => 38,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "39" => [
                        "id" => 39,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "40" => [
                        "id" => 40,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "41" => [
                        "id" => 41,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "42" => [
                        "id" => 42,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "43" => [
                        "id" => 43,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "44" => [
                        "id" => 44,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "45" => [
                        "id" => 45,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "46" => [
                        "id" => 46,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "47" => [
                        "id" => 47,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "48" => [
                        "id" => 48,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "49" => [
                        "id" => 49,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "50" => [
                        "id" => 50,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "51" => [
                        "id" => 51,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "52" => [
                        "id" => 52,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "53" => [
                        "id" => 53,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "54" => [
                        "id" => 54,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "55" => [
                        "id" => 55,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "56" => [
                        "id" => 56,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "57" => [
                        "id" => 57,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "58" => [
                        "id" => 58,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "59" => [
                        "id" => 59,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "60" => [
                        "id" => 60,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "61" => [
                        "id" => 61,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "62" => [
                        "id" => 62,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "63" => [
                        "id" => 63,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "64" => [
                        "id" => 64,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "65" => [
                        "id" => 65,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "66" => [
                        "id" => 66,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "67" => [
                        "id" => 67,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "68" => [
                        "id" => 68,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "69" => [
                        "id" => 69,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "70" => [
                        "id" => 70,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "71" => [
                        "id" => 71,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "72" => [
                        "id" => 72,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "73" => [
                        "id" => 73,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "74" => [
                        "id" => 74,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "75" => [
                        "id" => 75,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "76" => [
                        "id" => 76,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "77" => [
                        "id" => 77,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "78" => [
                        "id" => 78,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "79" => [
                        "id" => 79,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "80" => [
                        "id" => 80,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "81" => [
                        "id" => 81,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "82" => [
                        "id" => 82,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "83" => [
                        "id" => 83,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "84" => [
                        "id" => 84,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "85" => [
                        "id" => 85,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "86" => [
                        "id" => 86,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "87" => [
                        "id" => 87,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "88" => [
                        "id" => 88,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "89" => [
                        "id" => 89,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "90" => [
                        "id" => 90,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "91" => [
                        "id" => 91,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "92" => [
                        "id" => 92,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "93" => [
                        "id" => 93,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "94" => [
                        "id" => 94,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "95" => [
                        "id" => 95,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "96" => [
                        "id" => 96,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "97" => [
                        "id" => 97,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "98" => [
                        "id" => 98,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "99" => [
                        "id" => 99,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "100" => [
                        "id" => 100,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ]
                ],
                "count" => 250,
                "next_page" => 2,
                "previous_page" => null
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Вторая страница из трёх, без указания статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,83,9423',
                "page" => '2'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "101" => [
                        "id" => 101,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "102" => [
                        "id" => 102,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "103" => [
                        "id" => 103,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "104" => [
                        "id" => 104,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "105" => [
                        "id" => 105,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "106" => [
                        "id" => 106,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "107" => [
                        "id" => 107,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "108" => [
                        "id" => 108,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "109" => [
                        "id" => 109,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "110" => [
                        "id" => 110,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "111" => [
                        "id" => 111,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "112" => [
                        "id" => 112,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "113" => [
                        "id" => 113,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "114" => [
                        "id" => 114,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "115" => [
                        "id" => 115,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "116" => [
                        "id" => 116,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "117" => [
                        "id" => 117,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "118" => [
                        "id" => 118,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "119" => [
                        "id" => 119,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "120" => [
                        "id" => 120,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "121" => [
                        "id" => 121,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "122" => [
                        "id" => 122,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "123" => [
                        "id" => 123,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "124" => [
                        "id" => 124,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "125" => [
                        "id" => 125,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "126" => [
                        "id" => 126,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "127" => [
                        "id" => 127,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "128" => [
                        "id" => 128,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "129" => [
                        "id" => 129,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "130" => [
                        "id" => 130,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "131" => [
                        "id" => 131,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "132" => [
                        "id" => 132,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "133" => [
                        "id" => 133,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "134" => [
                        "id" => 134,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "135" => [
                        "id" => 135,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "136" => [
                        "id" => 136,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "137" => [
                        "id" => 137,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "138" => [
                        "id" => 138,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "139" => [
                        "id" => 139,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "140" => [
                        "id" => 140,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "141" => [
                        "id" => 141,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "142" => [
                        "id" => 142,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "143" => [
                        "id" => 143,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "144" => [
                        "id" => 144,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "145" => [
                        "id" => 145,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "146" => [
                        "id" => 146,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "147" => [
                        "id" => 147,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "148" => [
                        "id" => 148,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "149" => [
                        "id" => 149,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "150" => [
                        "id" => 150,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "151" => [
                        "id" => 151,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "152" => [
                        "id" => 152,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "153" => [
                        "id" => 153,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "154" => [
                        "id" => 154,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "155" => [
                        "id" => 155,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "156" => [
                        "id" => 156,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "157" => [
                        "id" => 157,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "158" => [
                        "id" => 158,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "159" => [
                        "id" => 159,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "160" => [
                        "id" => 160,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "161" => [
                        "id" => 161,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "162" => [
                        "id" => 162,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "163" => [
                        "id" => 163,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "164" => [
                        "id" => 164,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "165" => [
                        "id" => 165,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "166" => [
                        "id" => 166,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "167" => [
                        "id" => 167,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "168" => [
                        "id" => 168,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "169" => [
                        "id" => 169,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "170" => [
                        "id" => 170,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "171" => [
                        "id" => 171,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "172" => [
                        "id" => 172,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "173" => [
                        "id" => 173,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "174" => [
                        "id" => 174,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "175" => [
                        "id" => 175,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "176" => [
                        "id" => 176,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "177" => [
                        "id" => 177,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "178" => [
                        "id" => 178,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "179" => [
                        "id" => 179,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "180" => [
                        "id" => 180,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "181" => [
                        "id" => 181,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "182" => [
                        "id" => 182,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "183" => [
                        "id" => 183,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "184" => [
                        "id" => 184,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "185" => [
                        "id" => 185,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "186" => [
                        "id" => 186,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "187" => [
                        "id" => 187,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "188" => [
                        "id" => 188,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "189" => [
                        "id" => 189,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "190" => [
                        "id" => 190,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "191" => [
                        "id" => 191,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "192" => [
                        "id" => 192,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "193" => [
                        "id" => 193,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "194" => [
                        "id" => 194,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "195" => [
                        "id" => 195,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "196" => [
                        "id" => 196,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "197" => [
                        "id" => 197,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "198" => [
                        "id" => 198,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "199" => [
                        "id" => 199,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "200" => [
                        "id" => 200,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ]
                ],
                "count" => 250,
                "next_page" => 3,
                "previous_page" => 1
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Третья страница из трёх, без указания статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,83,9423',
                "page" => '3'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "201" => [
                        "id" => 201,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "202" => [
                        "id" => 202,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "203" => [
                        "id" => 203,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "204" => [
                        "id" => 204,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "205" => [
                        "id" => 205,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "206" => [
                        "id" => 206,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "207" => [
                        "id" => 207,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "208" => [
                        "id" => 208,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "209" => [
                        "id" => 209,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "210" => [
                        "id" => 210,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "211" => [
                        "id" => 211,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "212" => [
                        "id" => 212,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "213" => [
                        "id" => 213,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "214" => [
                        "id" => 214,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "215" => [
                        "id" => 215,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "216" => [
                        "id" => 216,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "217" => [
                        "id" => 217,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "218" => [
                        "id" => 218,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "219" => [
                        "id" => 219,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "220" => [
                        "id" => 220,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "221" => [
                        "id" => 221,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "222" => [
                        "id" => 222,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "223" => [
                        "id" => 223,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "224" => [
                        "id" => 224,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "225" => [
                        "id" => 225,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "226" => [
                        "id" => 226,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "227" => [
                        "id" => 227,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "228" => [
                        "id" => 228,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "229" => [
                        "id" => 229,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "230" => [
                        "id" => 230,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "231" => [
                        "id" => 231,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "232" => [
                        "id" => 232,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "233" => [
                        "id" => 233,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "234" => [
                        "id" => 234,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "235" => [
                        "id" => 235,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "236" => [
                        "id" => 236,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "237" => [
                        "id" => 237,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "238" => [
                        "id" => 238,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "239" => [
                        "id" => 239,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "240" => [
                        "id" => 240,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ],
                    "241" => [
                        "id" => 241,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "242" => [
                        "id" => 242,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "243" => [
                        "id" => 243,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "244" => [
                        "id" => 244,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "245" => [
                        "id" => 245,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "246" => [
                        "id" => 246,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 6
                    ],
                    "247" => [
                        "id" => 247,
                        "type" => "Добавление нового портала/раздела фат-меню/категории товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 7
                    ],
                    "248" => [
                        "id" => 248,
                        "type" => "Добавление/изменение информации в существующих порталах/фат-меню/категориях товаров",
                        "subject" => "anytech. Источник №9423",
                        "status" => 8
                    ],
                    "249" => [
                        "id" => 249,
                        "type" => "Добавление параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 9
                    ],
                    "250" => [
                        "id" => 250,
                        "type" => "Изменение существующих параметров/значений",
                        "subject" => "anytech. Источник №9423",
                        "status" => 11
                    ]
                ],
                "count" => 250,
                "next_page" => null,
                "previous_page" => 2
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Вторая страница из двух, с указанием статусов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            "requestParameters" => [
                "marketId" => '5,83,9423',
                "page" => '2',
                "status" => '1,2,3,4,5'
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "requests" => [
                    "201" => [
                        "id" => 201,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "202" => [
                        "id" => 202,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "203" => [
                        "id" => 203,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "204" => [
                        "id" => 204,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "205" => [
                        "id" => 205,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "211" => [
                        "id" => 211,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "212" => [
                        "id" => 212,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "213" => [
                        "id" => 213,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "214" => [
                        "id" => 214,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "215" => [
                        "id" => 215,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "221" => [
                        "id" => 221,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "222" => [
                        "id" => 222,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "223" => [
                        "id" => 223,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "224" => [
                        "id" => 224,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "225" => [
                        "id" => 225,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "231" => [
                        "id" => 231,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "232" => [
                        "id" => 232,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "233" => [
                        "id" => 233,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "234" => [
                        "id" => 234,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "235" => [
                        "id" => 235,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ],
                    "241" => [
                        "id" => 241,
                        "type" => "Добавление новых товаров",
                        "subject" => "Rozetka",
                        "status" => 1
                    ],
                    "242" => [
                        "id" => 242,
                        "type" => "Добавление/изменение информации в существующих товарах",
                        "subject" => "Rozetka",
                        "status" => 2
                    ],
                    "243" => [
                        "id" => 243,
                        "type" => "Перенос товаров",
                        "subject" => "Rozetka",
                        "status" => 3
                    ],
                    "244" => [
                        "id" => 244,
                        "type" => "Проверка скрытых товаров",
                        "subject" => "Euromart. Источник №1",
                        "status" => 4
                    ],
                    "245" => [
                        "id" => 245,
                        "type" => "Заливка фото с фотостудии",
                        "subject" => "Euromart. Источник №1",
                        "status" => 5
                    ]
                ],
                "count" => 125,
                "next_page" => null,
                "previous_page" => 1
            ]
        ]
    ],

];