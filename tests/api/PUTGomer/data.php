<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение количества товаров в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 596
                ]
            ],
            'db' => [
                "requests" => [
                        "amount_to_work" => 20,
                    ],
            ]
        ]
    ]
];