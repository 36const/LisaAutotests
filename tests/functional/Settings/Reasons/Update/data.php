<?php

return [
    'case2' => [
        'setting' => [
            'description' => 'Изменение дочернего статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '2',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 2,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
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
            'description' => 'Изменение названия причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Активация причины',
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
                        [
                            "id" => 2,
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
            'description' => 'Блокировка причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменение всех атрибутов причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_reasons2fb6cc3f5862c154757f7dbd5ca312e9',
            ],
            'requestBody' => [
                'Reason[child_status]' => '2',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "child_status" => 2,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "child_status" => 4,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

];
