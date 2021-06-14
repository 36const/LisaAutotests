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
                'FieldValue[field_id]' => '21',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 21,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '22',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 22,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание значения Наличие описаний к товарам, Активное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '23',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 23,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание значения Обработка фото, Заблокированное',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '24',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 24,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '25',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 25,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '26',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 26,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '27',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 27,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '28',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 28,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '29',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 29,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '30',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 30,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '31',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 31,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
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
                'FieldValue[field_id]' => '32',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 32,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

];
