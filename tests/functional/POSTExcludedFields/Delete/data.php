<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'ExcludedField[excluded_field_id]' => '2',
                'ExcludedField[field_id]' => '1',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "excluded_fields" => [
                        [
                            "field_id" => 10,
                            "excluded_field_id" => 11
                        ],
                    ],
                ],
            ]
        ]
    ],
];
