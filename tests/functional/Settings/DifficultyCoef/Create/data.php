<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание коэф. сложности тип 1 со всеми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '1.5',
                'DifficultyCoef[type_id]' => '1',
                'fields[10]' => '1',
                'fields[11]' => '1',
                'fields[123]' => '1',
                'fields[124]' => '1',
                'fields[125]' => '1',
                'fields[126]' => '1',
                'fields[127]' => '1',
                'fields[12]' => '1',
                'fields[13]' => '1',
                'fields[14]' => '1',
                'fields[15]' => '1',
                'fields[16]' => '1',
                'fields[17]' => '1',
                'fields[18]' => '1',
                'fields[19]' => '1',
                'fields[1]' => '1',
                'fields[2]' => '1',
                'fields[4]' => '1',
                'fields[5]' => '1',
                'fields[6]' => '1',
                'fields[7]' => '1',
                'fields[8]' => '1',
                'fields[9]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 1,
                            "field_ids" => "[1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 123, 124, 125, 126, 127]",
                            "difficulty_coef" => 1.5
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание коэф. сложности тип 4 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '0.75',
                'DifficultyCoef[type_id]' => '4',
                'fields[10]' => '1',
                'fields[125]' => '1',
                'fields[13]' => '1',
                'fields[16]' => '1',
                'fields[19]' => '1',
                'fields[1]' => '1',
                'fields[4]' => '1',
                'fields[7]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 4,
                            "field_ids" => "[1, 4, 7, 10, 13, 16, 19, 125]",
                            "difficulty_coef" => 0.75
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание коэф. сложности тип 7 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '2.5',
                'DifficultyCoef[type_id]' => '7',
                'fields[11]' => '1',
                'fields[123]' => '1',
                'fields[126]' => '1',
                'fields[14]' => '1',
                'fields[17]' => '1',
                'fields[2]' => '1',
                'fields[5]' => '1',
                'fields[8]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 7,
                            "field_ids" => "[2, 5, 8, 11, 14, 17, 123, 126]",
                            "difficulty_coef" => 2.5
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание коэф. сложности тип 11 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '3.0',
                'DifficultyCoef[type_id]' => '11',
                'fields[3]' => '1',
                'fields[6]' => '1',
                'fields[9]' => '1',
                'fields[12]' => '1',
                'fields[15]' => '1',
                'fields[18]' => '1',
                'fields[124]' => '1',
                'fields[127]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 11,
                            "field_ids" => "[3, 6, 9, 12, 15, 18, 124, 127]",
                            "difficulty_coef" => 3
                        ],
                    ],
                ],
            ]
        ]
    ],
];
