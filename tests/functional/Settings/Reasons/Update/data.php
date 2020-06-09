<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение родительского статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '2',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
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
                        [
                            "id" => 2,
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

    'case2' => [
        'setting' => [
            'description' => 'Изменение дочернего статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '2',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 1,
                            "child_status" => 2,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
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
            'description' => 'Изменение названия причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'Reason[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
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

    'case4' => [
        'setting' => [
            'description' => 'Активация причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '1',
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
                        [
                            "id" => 2,
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

    'case5' => [
        'setting' => [
            'description' => 'Блокировка причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '3',
                'Reason[parent_status]' => '1',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 1,
                            "child_status" => 3,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
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

    'case6' => [
        'setting' => [
            'description' => 'Изменение всех атрибутов причины',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'Reason[child_status]' => '2',
                'Reason[parent_status]' => '5',
                'Reason[reason]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\\| ',
                'Reason[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reasons" => [
                        [
                            "id" => 1,
                            "parent_status" => 5,
                            "child_status" => 2,
                            "reason" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\\| ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
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

];
