<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания команды без названия, проекта и направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => NULL,
                'direction' => NULL,
                'status' => 1,
                'project_id' => NULL
            ],
            'responseBody' => [
                'errors' => [
                    'project_id' => [
                        0 => 'Необходимо заполнить «ID проекта».',
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
                'project_id' => 2
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
            'description' => 'Невозможность создания команды проекта Контент без направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => 'Тим-тим',
                'direction' => NULL,
                'status' => 1,
                'project_id' => 1
            ],
            'responseBody' => [
                'errors' => [
                    'direction' => [
                        0 => 'Для проекта "Контент" обязательное поле "Направление"',
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
            'description' => 'Создание активной команды проекта Контент направления "Управление отделом"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 1,
                'name' => 'Управление отделом',
                'status' => 1,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Управление отделом',
                    'direction' => 'Управление отделом',
                    'status' => 'Активный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Управление отделом","direction":"1","status":"1","project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание заблокированной команды проекта Контент направления Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 2,
                'name' => 'Заявки Маркетплейс',
                'status' => 0,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Заявки Маркетплейс',
                    'direction' => 'Работа с товарами Маркетплейса',
                    'status' => 'Заблокированный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Заявки Маркетплейс","direction":"2","status":0,"project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание активной команды проекта Контент направления Rozetka',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 3,
                'name' => 'Заявки Rozetka',
                'status' => 1,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Заявки Rozetka',
                    'direction' => 'Работа с товарами Rozetka',
                    'status' => 'Активный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Заявки Rozetka","direction":"3","status":"1","project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание заблокированной команды проекта Контент направления "Работа с группами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 4,
                'name' => 'Работа с группами',
                'status' => 0,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с группами',
                    'direction' => 'Работа с группами',
                    'status' => 'Заблокированный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Работа с группами","direction":"4","status":0,"project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание активной команды проекта Контент направления "Работа с проектированием структур + фильтрами"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 5,
                'name' => 'Работа с проектированием структур + фильтрами',
                'status' => 1,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с проектированием структур + фильтрами',
                    'direction' => 'Работа с проектированием структур + фильтрами',
                    'status' => 'Активный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Работа с проектированием структур + фильтрами","direction":"5","status":"1","project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание заблокированной команды проекта Контент направления "Работа с порталами, фат-меню, категориями"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'direction' => 6,
                'name' => 'Работа с порталами, фат-меню, категориями',
                'status' => 0,
                'project_id' => 1
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Работа с порталами, фат-меню, категориями',
                    'direction' => 'Работа с порталами, фат-меню, категориями',
                    'status' => 'Заблокированный',
                    'id' => 22,
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
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
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Работа с порталами, фат-меню, категориями","direction":"6","status":0,"project_id":"1"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание активной команды проекта Маркетинг без направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => 'Маркетинг2',
                'direction' => NULL,
                'status' => 1,
                'project_id' => 2,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Маркетинг2',
                    'direction' => NULL,
                    'status' => 'Активный',
                    'id' => 22,
                    'project_id' => 'Маркетинг',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
                                'name' => 'Маркетинг2',
                                'direction' => null,
                                'status' => 1,
                                'project_id' => 2,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Маркетинг2","direction":null,"status":"1","project_id":"2"},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание заблокированной команды Все без направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => 'Все',
                'direction' => NULL,
                'status' => 0,
                'project_id' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Все',
                    'direction' => NULL,
                    'status' => 'Заблокированный',
                    'id' => 22,
                    'project_id' => 'Все',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            [
                                'id' => 22,
                                'name' => 'Все',
                                'direction' => null,
                                'status' => 0,
                                'project_id' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.teams.all' => '{"action":"create","entity":"teams","fields_data":{"id":22,"name":"Все","direction":null,"status":0,"project_id":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

];
