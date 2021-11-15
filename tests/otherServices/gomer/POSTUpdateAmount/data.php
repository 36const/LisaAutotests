<?php

use lisa\OtherServicesTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение количества товаров в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'mock_data' => [
            'interior' => OtherServicesTester::interiorMockArray('request-update', 83),
        ],
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'amount' => 10
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 200,
                'result' => [
                    'id' => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => [
                        [
                            'id' => 1,
                            'author_id' => 4,
                            'type_id' => 1,
                            'supervisor_id' => 7,
                            'manager_id' => null,
                            'status' => 1,
                            'direction' => 2,
                            'priority' => null,
                            'awaiting_correction' => 0,
                            'created_at' => '2020-01-01 00:00:00',
                            'correction_comment' => null,
                            'amount_to_work' => 20,
                            'subject' => 'Euromart. Источник №1',
                            'description' => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                            'category_id' => null,
                            'seller_id' => 83,
                            'recommendations' => null,
                            'reason' => null,
                            'parent_id' => null,
                            'planned_start_date' => null,
                            'planned_finish_date' => null,
                            'actual_start_date' => null,
                            'actual_finish_date' => null,
                            'supervisor_process_date' => null,
                            'supervisor_check_date' => null,
                            'result_comment' => null,
                            'supervisor_comment' => null,
                            'last_change_status_date >=' => date('Y-m-d'),
                            'team_direction' => 2,
                            'report_period_id' => null,
                            'sync_source_id' => null,
                            'sv_report_periods' => null,
                            'cross_check_status' => 0,
                            'cross_check_manager_id' => null,
                            'employee_code_1c' => null,
                            'child_count' => 0,
                            'photo_load_status' => 0,
                            'previous_status' => null,
                            'supplier_cabinet_id' => null,
                            'payload' => '{"side_user_id": 999, "side_user_name": "!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}',
                        ],
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_sendOuterNotifications' => [
                    '{"email":"testing.rozetka+165@gmail.com","lang":"ru","event":"request-update","fields":{"id":1,"type":"Добавление товаров","amount_to_work":20,"user_name":"!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"budan#ov2_2_2@rozetka.com.ua","lang":"uk","event":"request-update","fields":{"id":1,"type":"Додавання товарів","amount_to_work":20,"user_name":"!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"test1115555@mail.coi","lang":"ru","event":"request-update","fields":{"id":1,"type":"Добавление товаров","amount_to_work":20,"user_name":"!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                    '{"email":"MF-3517-2@MF-3517-2.com","lang":"uk","event":"request-update","fields":{"id":1,"type":"Додавання товарів","amount_to_work":20,"user_name":"!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","link":"http://m2-front.dev.rozetka.com.ua/main/goods-manage/moderation?page=1&pageSize=20&id=1"},"requireAttachments":false}',
                ],
                'lisa_failedApiRequests' => [],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пустой body',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'не передан amount',
                    'не передан id'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":[],"exceptionMessage":"не передан amountне передан id","user":"kutsan.k"}'
                ],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Пустой amount',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'amount' => ''
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'не передан amount'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"1","amount":""},"exceptionMessage":"не передан amount","user":"kutsan.k"}'
                ],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Пустой ID заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => '',
                'amount' => 10
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'не передан id'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"","amount":"10"},"exceptionMessage":"не передан id","user":"kutsan.k"}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'amount не число',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'amount' => '~!@#$%^&*()_asdf'
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'amount должен быть числом'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"1","amount":"~!@#$%^&*()_asdf"},"exceptionMessage":"amount должен быть числом","user":"kutsan.k"}'
                ],
            ],
        ],
    ],

    'case6' => [
        'setting' => [
            'description' => 'ID заявки не число',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => '~!@#$%^&*()_asdf',
                'amount' => 10
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'id должен быть числом'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"~!@#$%^&*()_asdf","amount":"10"},"exceptionMessage":"id должен быть числом","user":"kutsan.k"}'
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'ID не передан',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'amount' => 10
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'не передан id'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"amount":"10"},"exceptionMessage":"не передан id","user":"kutsan.k"}'
                ],
            ],
        ],
    ],

    'case8' => [
        'setting' => [
            'description' => 'amount заявки не передан',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 10,
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'не передан amount'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"10"},"exceptionMessage":"не передан amount","user":"kutsan.k"}'
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Несуществующий ID заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 999999,
                'amount' => 10
            ],
            'responseCode' => 200,
            'responseBody' => [
                'status' => 404,
                'errors' => [
                    'заявка не найдена'
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_failedApiRequests' => [
                    '{"url":"http://lisa-api.docker/request/update-amount-to-work","bodyParams":{"id":"999999","amount":"10"},"exceptionMessage":"заявка не найдена","user":"kutsan.k"}'
                ],
            ],
        ]
    ]
];