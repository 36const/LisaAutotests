<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Открытие пустой заметки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'note' => '',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_notes' => [],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Открытие не пустой записи',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&gt;&lt;`\]\'/[;.,-=&not</div>',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'request_notes' => [
                        [
                            'user_id' => 4,
                            'request_id' => 1,
                            'note' => '<div>~!@#$%^&amp;*()_+~|}"?{:&gt;&lt;`\]\'/[;.,-=&not</div>',
                        ]
                    ],
                ],
            ]
        ]
    ],
];
