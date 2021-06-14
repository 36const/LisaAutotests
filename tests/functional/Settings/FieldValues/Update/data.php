<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность изменения поля при наличии аналогичного значения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'FieldValue[field_id]' => '22',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
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
                        [
                            "id" => 2,
                            "field_id" => 22,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение значения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '21',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 21,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
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
            'description' => 'Изменение статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '21',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 21,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "field_id" => 22,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение поля, значения и статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '22',
                'FieldValue[status]' => '0',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "field_values" => [
                        [
                            "id" => 1,
                            "field_id" => 22,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "field_id" => 22,
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
            'description' => 'Изменение поля при отсутствии аналогичного значения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_valuesc72cdd5825f4c8d1ec44822407865c5f',
            ],
            'requestBody' => [
                'FieldValue[field_id]' => '23',
                'FieldValue[status]' => '1',
                'FieldValue[value]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
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
                        [
                            "id" => 2,
                            "field_id" => 22,
                            "value" => "!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ]
];
