<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание активного коэф. сложности тип 1 со всеми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
                'diff_coef_2_[2]e4f11b540a5968017834ae5f0e499978',
                'diff_coef_3_[8,15,19]09a6c57a3c5f1025a5f3dcd444b906a9',
                'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e',
                'diff_coef_5_[1]3bd4af5326d1e27a9ad741e340646f57',
                'diff_coef_6_[8,15,19]b1b33073c1eb1d5daabed600c76a8dc1',
                'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38',
                'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd',
                'diff_coef_8_[1,6,7]0b2026cb63268e05ca709ea7090c12cc',
                'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6',
            ],
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '1.5',
                'DifficultyCoef[type_id]' => '1',
                'DifficultyCoef[status]' => '1',
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
                            "difficulty_coef" => 1.5,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание заблокированного коэф. сложности тип 4 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
                'diff_coef_2_[2]e4f11b540a5968017834ae5f0e499978',
                'diff_coef_3_[8,15,19]09a6c57a3c5f1025a5f3dcd444b906a9',
                'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e',
                'diff_coef_5_[1]3bd4af5326d1e27a9ad741e340646f57',
                'diff_coef_6_[8,15,19]b1b33073c1eb1d5daabed600c76a8dc1',
                'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38',
                'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd',
                'diff_coef_8_[1,6,7]0b2026cb63268e05ca709ea7090c12cc',
                'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6',
            ],
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '0.75',
                'DifficultyCoef[type_id]' => '4',
                'DifficultyCoef[status]' => '0',
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
                            "difficulty_coef" => 0.75,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание активного коэф. сложности тип 7 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
                'diff_coef_2_[2]e4f11b540a5968017834ae5f0e499978',
                'diff_coef_3_[8,15,19]09a6c57a3c5f1025a5f3dcd444b906a9',
                'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e',
                'diff_coef_5_[1]3bd4af5326d1e27a9ad741e340646f57',
                'diff_coef_6_[8,15,19]b1b33073c1eb1d5daabed600c76a8dc1',
                'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38',
                'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd',
                'diff_coef_8_[1,6,7]0b2026cb63268e05ca709ea7090c12cc',
                'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6',
            ],
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '2.5',
                'DifficultyCoef[type_id]' => '7',
                'DifficultyCoef[status]' => '1',
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
                            "difficulty_coef" => 2.5,
                            "status" => 1
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Создание заблокированного коэф. сложности тип 11 с некоторыми чекбоксами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
                'diff_coef_2_[2]e4f11b540a5968017834ae5f0e499978',
                'diff_coef_3_[8,15,19]09a6c57a3c5f1025a5f3dcd444b906a9',
                'diff_coef_4_[169]af057faf680f6e20087cf785ccfdc40e',
                'diff_coef_5_[1]3bd4af5326d1e27a9ad741e340646f57',
                'diff_coef_6_[8,15,19]b1b33073c1eb1d5daabed600c76a8dc1',
                'diff_coef_7_[1]c386bb062826fca6605ade8ad14d7b38',
                'diff_coef_7_[2]e401b38c96a14dff7cb79a71638e1fcd',
                'diff_coef_8_[1,6,7]0b2026cb63268e05ca709ea7090c12cc',
                'diff_coef_11_[2]107301ff442b30cffbcd119ee16b0ac6',
            ],
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '3.0',
                'DifficultyCoef[type_id]' => '11',
                'DifficultyCoef[status]' => '0',
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
                            "difficulty_coef" => 3,
                            "status" => 0
                        ],
                    ],
                ],
            ]
        ]
    ],
];
