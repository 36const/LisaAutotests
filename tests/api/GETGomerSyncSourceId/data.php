<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Проверка заявки в статусе Ожидает проверки условий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 614
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Проверка заявки в статусе На проверке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 614
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Проверка заявки в статусе Ожидает взятия в работу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 614
                ]
            ]
        ]
    ]

];