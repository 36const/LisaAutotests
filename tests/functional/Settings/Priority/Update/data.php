<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'Priority[name]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'Priority[status]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "priorities" => [
                        [
                            "id" => 1,
                            "name" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "name" => "Товар-новинка/эксклюзив (трафикообразующий)",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "name" => 'Исправление критичной ошибки',
                            "status" => 0,
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'Priority[name]' => 'Информация необходима для склада',
                'Priority[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "priorities" => [
                        [
                            "id" => 1,
                            "name" => "Информация необходима для склада",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "name" => "Товар-новинка/эксклюзив (трафикообразующий)",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "name" => 'Исправление критичной ошибки',
                            "status" => 0,
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение названия и статуса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_prioritiesc89065f72175b22f9ba823aa3d51fa27',
            ],
            'requestBody' => [
                'Priority[name]' => '~!@#$%^&*()_+`=-]\'/[;.,}"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ',
                'Priority[status]' => '0',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "priorities" => [
                        [
                            "id" => 1,
                            "name" => "~!@#$%^&*()_+`=-]'/[;.,}\"?{:><\|1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ",
                            "status" => 0
                        ],
                        [
                            "id" => 2,
                            "name" => "Товар-новинка/эксклюзив (трафикообразующий)",
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "name" => 'Исправление критичной ошибки',
                            "status" => 0,
                        ],
                    ],
                ],
            ]
        ]
    ],

];
