<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение коэффициента',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'DifficultyCoef[difficulty_coef]' => '2.5',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 1,
                            "field_ids" => "[1, 2, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 123, 124, 125, 126, 127]",
                            "difficulty_coef" => 2.5
                        ],
                        [
                            "id" => 2,
                            "type_id" => 4,
                            "field_ids" => "[1, 4, 7, 10, 13, 16, 19, 125]",
                            "difficulty_coef" => 0.75
                        ],
                    ],
                ],
            ]
        ]
    ]
];
