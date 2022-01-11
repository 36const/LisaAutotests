<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания приоритета без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => NULL,
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Необходимо заполнить «Название приоритета».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания дубля приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => NULL,
                'name' => 'Информация необходима для склада',
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Значение «Информация необходима для склада» для «Название приоритета» уже занято.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],

        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание активного приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'id' => NULL,
                'name' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'id' => 4,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                        [
                            [
                                'id' => 4,
                                'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'priorities',
                            'entity_id' => 4,
                            'old_value' => '[]',
                            'new_value' => '{"name": "!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": "1"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.priorities.all' => '{"action":"create","entity":"priorities","fields_data":{"id":4,"name":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1"},"changed_fields_names":[]}'
                ],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание заблокированного приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'id' => NULL,
                'name' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'id' => 4,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                        [
                            [
                                'id' => 4,
                                'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'priorities',
                            'entity_id' => 4,
                            'old_value' => '[]',
                            'new_value' => '{"name": "!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ", "status": 0}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.priorities.all' => '{"action":"create","entity":"priorities","fields_data":{"id":4,"name":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":0},"changed_fields_names":[]}'
                ],
            ],
        ],
    ],

];
