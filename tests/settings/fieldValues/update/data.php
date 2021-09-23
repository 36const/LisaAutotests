<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность изменения поля при дублировании значения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'field_id' => 22,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
                'order' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Такая комбинация поля и значения уже существует.',
                    ],
                    'value' => [
                        0 => 'Такая комбинация поля и значения уже существует.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность блокировки последнего активного значения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 1,
                'field_id' => 21,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
                'order' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'status' => [
                        0 => 'Нельзя заблокировать последнее активное значение поля.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение значения поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => 1,
                'field_id' => 21,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                'status' => 1,
                'order' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие характеристик к товарам',
                    'id' => 1,
                    'order' => '1',
                    'status' => 'Активный',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => [
                        [
                            'id' => 1,
                            'field_id' => 21,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                            'status' => 1,
                            'order' => 1,
                        ],
                        [
                            'id' => 2,
                            'field_id' => 22,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0,
                            'order' => 0,
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.field_values.all' => '{"action":"update","entity":"field_values","fields_data":{"id":1,"field_id":"21","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|","status":"1","order":"1"},"changed_fields_names":["value"]}'
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение статуса значения поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => 1,
                'field_id' => 21,
                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 0,
                'order' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие характеристик к товарам',
                    'id' => 1,
                    'order' => '1',
                    'status' => 'Заблокированный',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => [
                        [
                            'id' => 1,
                            'field_id' => 21,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0,
                            'order' => 1,
                        ],
                        [
                            "id" => 2,
                            'field_id' => 21,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                            'status' => 1,
                            'order' => 1,
                        ],
                        [
                            'id' => 3,
                            'field_id' => 22,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0,
                            'order' => 0,
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.field_values.all' => '{"action":"update","entity":"field_values","fields_data":{"id":1,"field_id":"21","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":0,"order":"1"},"changed_fields_names":["status"]}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение поля, значения и статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'field_id' => 22,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                'status' => 0,
                'order' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие фото к товарам',
                    'id' => 1,
                    'order' => '1',
                    'status' => 'Заблокированный',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => [
                        [
                            'id' => 1,
                            'field_id' => 22,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
                            'status' => 0,
                            'order' => 1,
                        ],
                        [
                            'id' => 2,
                            'field_id' => 22,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0,
                            'order' => 0,
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.field_values.all' => '{"action":"update","entity":"field_values","fields_data":{"id":1,"field_id":"22","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|","status":0,"order":"1"},"changed_fields_names":["field_id","value","status"]}'
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Возможность изменения поля при наличии аналогичного значения, но у другого поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => 1,
                'field_id' => 23,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'status' => 1,
                'order' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие описаний к товарам',
                    'id' => 1,
                    'order' => '1',
                    'status' => 'Активный',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => [
                        [
                            'id' => 1,
                            'field_id' => 23,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 1,
                            'order' => 1,
                        ],
                        [
                            'id' => 2,
                            'field_id' => 22,
                            'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                            'status' => 0,
                            'order' => 0,
                        ],
                    ],
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.field_values.all' => '{"action":"update","entity":"field_values","fields_data":{"id":1,"field_id":"23","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":"1"},"changed_fields_names":["field_id"]}'
                ],
            ],
        ]
    ]
];
