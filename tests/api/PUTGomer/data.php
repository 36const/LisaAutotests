<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение количества товаров в заявке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [
                "amount" => 10
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 200,
                "result" => [
                    "id" => 1
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 20,
                    ]],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Пустой body',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "не передан amount"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Пустой amount',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=1',
            'requestBody' => [
                "amount" => ''
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 400,
                "errors" => [
                    "не передан amount"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Несуществующий ID заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestURL' => '/bpm/api/update-amount-to-work?id=999999',
            'requestBody' => [
                "amount" => 10
            ],
            "responseCode" => 200,
            "responseBody" => [
                "status" => 404,
                "errors" => [
                    "заявка не найдена"
                ]
            ],
            'db' => [
                'lisa_fixtures' => [
                    "requests" => [[
                        "amount_to_work" => 10,
                    ]],
                ]
            ]
        ]
    ]
];