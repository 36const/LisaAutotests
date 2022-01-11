<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение статуса с Активный на Заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'requestBody' => [
                'id' => 4,
                'name' => 'Маркетплейс 4',
                'direction' => 2,
                'status' => 0,
                'project_id' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Маркетплейс 4',
                    'direction' => 'Работа с товарами Маркетплейса',
                    'status' => 'Заблокированный',
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            3 => [
                                'id' => 4,
                                'name' => 'Маркетплейс 4',
                                'direction' => 2,
                                'status' => 0,
                                'project_id' => 1,
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auth.teams',
                            'entity_id' => 4,
                            'old_value' => '{"status": 1}',
                            'new_value' => '{"status": 0}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.teams.all' => '{"action":"update","entity":"teams","fields_data":{"id":4,"name":"Маркетплейс 4","direction":"2","status":0,"project_id":"1"},"changed_fields_names":["status"]}'
                ],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение статуса с Заблокированный на Активный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 6,
            'requestBody' => [
                'id' => 6,
                'name' => 'Маркетплейс 6',
                'direction' => 2,
                'status' => 1,
                'project_id' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 6,
                    'name' => 'Маркетплейс 6',
                    'direction' => 'Работа с товарами Маркетплейса',
                    'status' => 'Активный',
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            5 => [
                                'id' => 6,
                                'name' => 'Маркетплейс 6',
                                'direction' => 2,
                                'status' => 1,
                                'project_id' => 1,
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auth.teams',
                            'entity_id' => 6,
                            'old_value' => '{"status": 0}',
                            'new_value' => '{"status": "1"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.teams.all' => '{"action":"update","entity":"teams","fields_data":{"id":6,"name":"Маркетплейс 6","direction":"2","status":"1","project_id":"1"},"changed_fields_names":["status"]}'
                ],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение направления и названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'requestBody' => [
                'id' => 4,
                'direction' => 3,
                'name' => 'Управление отделом',
                'status' => 1,
                'project_id' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Управление отделом',
                    'direction' => 'Работа с товарами Rozetka',
                    'status' => 'Активный',
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            3 => [
                                'id' => 4,
                                'name' => 'Управление отделом',
                                'direction' => 3,
                                'status' => 1,
                                'project_id' => 1,
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auth.teams',
                            'entity_id' => 4,
                            'old_value' => '{"name": "Маркетплейс 4", "direction": 2}',
                            'new_value' => '{"name": "Управление отделом", "direction": "3"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.teams.all' => '{"action":"update","entity":"teams","fields_data":{"id":4,"name":"Управление отделом","direction":"3","status":"1","project_id":"1"},"changed_fields_names":["name","direction"]}'
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'requestBody' => [
                'id' => 4,
                'direction' => 2,
                'name' => 'Управление отделом new',
                'status' => 1,
                'project_id' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Управление отделом new',
                    'direction' => 'Работа с товарами Маркетплейса',
                    'status' => 'Активный',
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            3 => [
                                'id' => 4,
                                'name' => 'Управление отделом new',
                                'direction' => 2,
                                'status' => 1,
                                'project_id' => 1,
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auth.teams',
                            'entity_id' => 4,
                            'old_value' => '{"name": "Маркетплейс 4"}',
                            'new_value' => '{"name": "Управление отделом new"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.teams.all' => '{"action":"update","entity":"teams","fields_data":{"id":4,"name":"Управление отделом new","direction":"2","status":"1","project_id":"1"},"changed_fields_names":["name"]}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение направления, названия и статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'requestBody' => [
                'id' => 4,
                'direction' => 4,
                'name' => 'Управление отделом new',
                'status' => 0,
                'project_id' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Управление отделом new',
                    'direction' => 'Работа с группами',
                    'status' => 'Заблокированный',
                    'project_id' => 'Контент',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.teams' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.teams'],
                        [
                            3 => [
                                'id' => 4,
                                'name' => 'Управление отделом new',
                                'direction' => 4,
                                'status' => 0,
                                'project_id' => 1,
                            ],
                        ],
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'auth.teams',
                            'entity_id' => 4,
                            'old_value' => '{"name": "Маркетплейс 4", "status": 1, "direction": 2}',
                            'new_value' => '{"name": "Управление отделом new", "status": 0, "direction": "4"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.teams.all' => '{"action":"update","entity":"teams","fields_data":{"id":4,"name":"Управление отделом new","direction":"4","status":0,"project_id":"1"},"changed_fields_names":["name","direction","status"]}'
                ],
            ],
        ]
    ],

];
