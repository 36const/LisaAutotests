<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание значения Наличие характеристик к товарам, Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 21,
                'status' => 1,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие характеристик к товарам',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 21,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"21","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание значения Наличие фото к товарам, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 22,
                'status' => 0,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие фото к товарам',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 22,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"22","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание значения Наличие описаний к товарам, Активное (с дублированием значения из другого поля)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 23,
                'status' => 1,
                'value' => 'Без уточнений',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Наличие описаний к товарам',
                    'value' => 'Без уточнений',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 23,
                                'value' => 'Без уточнений',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"23","value":"Без уточнений","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание значения Обработка фото, Заблокированное (с дублированием значения из другого поля)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 24,
                'status' => 0,
                'value' => 'Более 5 уточнений',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Обработка фото',
                    'value' => 'Более 5 уточнений',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 24,
                                'value' => 'Более 5 уточнений',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"24","value":"Более 5 уточнений","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание значения Уточнения. Количество уточнений у автора., Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 25,
                'status' => 1,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Уточнения. Количество уточнений у автора.',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 25,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"25","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание значения Язык информации, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 26,
                'status' => 0,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Язык информации',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 26,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"26","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание значения Видео к товарам, Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 27,
                'status' => 1,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Видео к товарам',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 27,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"27","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание значения Перенос информации при изменении структуры категории, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 28,
                'status' => 0,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Перенос информации при изменении структуры категории',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 28,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"28","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание значения Вид структуры, Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 29,
                'status' => 1,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Вид структуры',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 29,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"29","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание значения Сложность структуры, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 30,
                'status' => 0,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Сложность структуры',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 30,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"30","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание значения Группировка товаров (наличие варьируемых параметров), Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 31,
                'status' => 1,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Группировка товаров (наличие варьируемых параметров)',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Активный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 31,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 1,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"31","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"1","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Создание значения Сложность группировки в заявках, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'id' => null,
                'field_id' => 32,
                'status' => 0,
                'value' => '=}~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'order' => null,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 'Сложность группировки в заявках',
                    'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                    'status' => 'Заблокированный',
                    'order' => 0,
                    'id' => 31,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values'],
                        [
                            [
                                'id' => 31,
                                'field_id' => 32,
                                'value' => '!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                                'status' => 0,
                                'order' => 0,
                            ],
                        ],
                    )
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'create.field_values.all' => '{"action":"create","entity":"field_values","fields_data":{"id":31,"field_id":"32","value":"!@#$%^&*()_+`=-]\'/[;.,}\"?{:><\\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ","status":"0","order":0},"changed_fields_names":[]}'
                ],
            ],
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Невозможность создания значения с пустым полем "значение"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => null,
                'field_id' => 32,
                'status' => 1,
                'value' => null,
                'order' => null,
            ],
            'responseBody' => [
                'errors' => [
                    'value' => [
                        0 => 'Необходимо заполнить «Значение поля».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values']
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Невозможность создания значения с пустым полем "поле"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => null,
                'field_id' => null,
                'status' => 0,
                'value' => 'null',
                'order' => null,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Необходимо заполнить «Поле».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values']
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Невозможность создания активного значения-дубля одного и того же поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => null,
                'field_id' => 26,
                'status' => 1,
                'value' => 'Украинский',
                'order' => null,
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
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values']
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Невозможность создания заблокированного значения-дубля одного и того же поля',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => null,
                'field_id' => 26,
                'status' => 0,
                'value' => 'Английский',
                'order' => null,
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
                    'field_values' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['field_values']
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ]
    ],

];
