<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание причины для перевода из статуса 1 в статус 3, Активная',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 1,
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
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 1,
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
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '2',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 2,
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
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[parent_status]' => '2',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 2,
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
            'requestBody' => [
                'Reason[child_status]' => '7',
                'Reason[parent_status]' => '6',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 6,
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
            'requestBody' => [
                'Reason[child_status]' => '8',
                'Reason[parent_status]' => '6',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 6,
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
            'requestBody' => [
                'Reason[child_status]' => '4',
                'Reason[parent_status]' => '6',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 6,
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
