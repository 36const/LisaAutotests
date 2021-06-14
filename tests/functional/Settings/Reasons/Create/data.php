<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 1 в статус 3, Активная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 1 в статус 4, Заблокированная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 2 в статус 3, Активная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 2 в статус 4, Заблокированная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 6 в статус 7, Активная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '7',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 7,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 6 в статус 8, Заблокированная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '8',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 8,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 6 в статус 4, Активная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],
];
