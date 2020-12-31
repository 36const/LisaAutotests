<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание коэффициента сложности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 1,
                            "field_ids" => "[1]",
                            "difficulty_coef" => 0.5,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "type_id" => 1,
                            "field_ids" => "[2]",
                            "difficulty_coef" => 2,
                            "status" => 1
                        ]
                    ],
                ],
            ],
            'db_2' => [
                "lisa_fixtures" => [
                    "difficulty_coefs" => [
                        [
                            "id" => 1,
                            "type_id" => 1,
                            "field_ids" => "[1]",
                            "difficulty_coef" => 0.5,
                            "status" => 1
                        ],
                        [
                            "id" => 2,
                            "type_id" => 1,
                            "field_ids" => "[2]",
                            "difficulty_coef" => 2,
                            "status" => 1
                        ],
                        [
                            "id" => 3,
                            "type_id" => 1,
                            "field_ids" => "[1, 2]",
                            "difficulty_coef" => 0.5,
                            "status" => 1
                        ]
                    ],
                ],
            ],
        ]
    ],
];
