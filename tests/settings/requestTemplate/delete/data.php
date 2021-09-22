<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Удаление дочернего шаблона',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 2,
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][0],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][2],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][3],

                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Удаление родительского шаблона (и автоматически дочернего)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 1,
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][2],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][3],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Удаление несвязанного с другими шаблона',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 3,
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_templates' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][0],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][1],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['request_templates'][3],
                    ]
                ]
            ]
        ]
    ],

];
