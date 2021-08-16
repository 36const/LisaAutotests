<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление шаблона отчёта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 4
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'reports' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reports'][0],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reports'][1],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['reports'][2],
                    ],
                ],
            ]
        ]
    ],
];
