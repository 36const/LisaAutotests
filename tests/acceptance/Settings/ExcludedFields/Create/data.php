<?php

use lisa\Page\Functional\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание пары взаимоисключающих чек-боксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                "lisa_fixtures" => [
                    "excluded_fields" => [
                        [
                            "field_id" => 10,
                            "excluded_field_id" => 5
                        ],
                        [
                            "field_id" => 10,
                            "excluded_field_id" => 11
                        ],
                        [
                            "field_id" => 11,
                            "excluded_field_id" => 5
                        ],
                        [
                            "field_id" => 11,
                            "excluded_field_id" => 6
                        ],
                    ],
                ],
            ],
            'db_2' => [
                "lisa_fixtures" => [
                    "excluded_fields" => [
                        [
                            "field_id" => 1,
                            "excluded_field_id" => 2
                        ],
                        [
                            "field_id" => 10,
                            "excluded_field_id" => 5
                        ],
                        [
                            "field_id" => 10,
                            "excluded_field_id" => 11
                        ],
                        [
                            "field_id" => 11,
                            "excluded_field_id" => 5
                        ],
                        [
                            "field_id" => 11,
                            "excluded_field_id" => 6
                        ],
                    ],
                ],
            ],
        ]
    ],
];
