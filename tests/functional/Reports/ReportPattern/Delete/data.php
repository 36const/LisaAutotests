<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление шаблона отчёта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
            ],
            'db' => [
                "lisa_fixtures" => [
                    "reports" => [
                        [
                            "id" => 1
                        ]
                    ],
                ],
            ]
        ]
    ],
];
