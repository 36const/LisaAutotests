<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание активного приоритета',
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
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заблокированного приоритета',
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
                    ],
                ],
            ]
        ]
    ],
];
