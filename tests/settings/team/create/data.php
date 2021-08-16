<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания команды без названия и направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => NULL,
                'direction' => NULL,
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'direction' => [
                        0 => 'Необходимо заполнить «Направление».',
                    ],
                    'name' => [
                        0 => 'Необходимо заполнить «Название».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания команды без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => NULL,
                'direction' => 2,
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Необходимо заполнить «Название».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания команды без направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => 'Тим-тим',
                'direction' => NULL,
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'direction' => [
                        0 => 'Необходимо заполнить «Направление».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание активной команды направления "Управление отделом"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 1,
                'name' => 'Управление отделом',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Управление отделом',
                    'direction' => 'Управление отделом',
                    'status' => 'Активный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Управление отделом',
                                'direction' => 1,
                                'status' => 1
                            ]
                        ]
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Управление отделом","direction":"1","status":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание заблокированной команды направления Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 2,
                'name' => 'Заявки Маркетплейс',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Заявки Маркетплейс',
                    'direction' => 'Работа с товарами Маркетплейса',
                    'status' => 'Заблокированный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Заявки Маркетплейс',
                                'direction' => 2,
                                'status' => 0
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Заявки Маркетплейс","direction":"2","status":"0"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание активной команды направления Rozetka',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 3,
                'name' => 'Заявки Rozetka',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Заявки Rozetka',
                    'direction' => 'Работа с товарами Rozetka',
                    'status' => 'Активный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Заявки Rozetka',
                                'direction' => 3,
                                'status' => 1
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Заявки Rozetka","direction":"3","status":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание заблокированной команды направления "Работа с группами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 4,
                'name' => 'Работа с группами',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с группами',
                    'direction' => 'Работа с группами',
                    'status' => 'Заблокированный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Работа с группами',
                                'direction' => 4,
                                'status' => 0
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Работа с группами","direction":"4","status":"0"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание активной команды направления "Работа с проектированием структур + фильтрами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 5,
                'name' => 'Работа с проектированием структур + фильтрами',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с проектированием структур + фильтрами',
                    'direction' => 'Работа с проектированием структур + фильтрами',
                    'status' => 'Активный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Работа с проектированием структур + фильтрами',
                                'direction' => 5,
                                'status' => 1
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Работа с проектированием структур + фильтрами","direction":"5","status":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание заблокированной команды направления "Работа с порталами, фат-меню, категориями"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 6,
                'name' => 'Работа с порталами, фат-меню, категориями',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с порталами, фат-меню, категориями',
                    'direction' => 'Работа с порталами, фат-меню, категориями',
                    'status' => 'Заблокированный',
                    'id' => 21,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 21,
                                'name' => 'Работа с порталами, фат-меню, категориями',
                                'direction' => 6,
                                'status' => 0
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":21,"name":"Работа с порталами, фат-меню, категориями","direction":"6","status":"0"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

];
