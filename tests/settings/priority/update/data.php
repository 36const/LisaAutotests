<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность изменения при дублирования названия приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'name' => 'Товар-новинка/эксклюзив (трафикообразующий)',
                'status' => 0,
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Значение «Товар-новинка/эксклюзив (трафикообразующий)» для «Название приоритета» уже занято.',
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
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение названия приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'id' => 1,
                'name' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'id' => 1,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                        [
                            [
                                'id' => 1,
                                'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.priorities.all' => '{"action":"update","entity":"priorities","fields_data":{"id":1,"name":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1"},"changed_fields_names":["name"]}'
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение статуса приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'id' => 1,
                'name' => 'Информация необходима для склада',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'Информация необходима для склада',
                    'status' => 'Заблокированный',
                    'id' => 1,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                        [
                            [
                                'id' => 1,
                                'name' => 'Информация необходима для склада',
                                'status' => 0
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.priorities.all' => '{"action":"update","entity":"priorities","fields_data":{"id":1,"name":"Информация необходима для склада","status":0},"changed_fields_names":["status"]}'
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение названия и статуса приоритета',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'id' => 1,
                'name' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'id' => 1,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'priorities' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['priorities'],
                        [
                            [
                                'id' => 1,
                                'name' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.priorities.all' => '{"action":"update","entity":"priorities","fields_data":{"id":1,"name":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":0},"changed_fields_names":["name","status"]}'
                ],
            ],
        ]
    ],

];
