<?php

return [
    'caseAll' => [
        'setting' => [
            'description' => 'Вкладка "Все"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/caseAll.php',
        'provider_data' => [
            'url' => 'all',
            'requestParameters' => [
                'per-page' => 50
            ],
            'responseBody' => include __DIR__ . '/response/caseAll.php',
        ]
    ],

    'case1' => [
        'setting' => [
            'description' => 'Вкладка "Новые"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'new',
            'requestParameters' => [
                'per-page' => 20
            ],
            'responseBody' => include __DIR__ . '/response/case1.php',
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Вкладка "Готовы для распределения"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'in-check',
            'requestParameters' => [
                'per-page' => 50
            ],
            'responseBody' => include __DIR__ . '/response/case2.php',
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Вкладка "На доработке"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'url' => 'require-changes',
            'requestParameters' => [
                'per-page' => 100
            ],
            'responseBody' => include __DIR__ . '/response/case3.php',
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Вкладка "Отменены"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'url' => 'declined',
            'requestParameters' => [
                'per-page' => 500
            ],
            'responseBody' => include __DIR__ . '/response/case4.php',
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Вкладка "Ожидают взятия в работу"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'url' => 'wait-work',
            'requestParameters' => [
                'per-page' => 20
            ],
            'responseBody' => include __DIR__ . '/response/case5.php',
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Вкладка "В работе"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'url' => 'in-work',
            'requestParameters' => [
                'per-page' => 50
            ],
            'responseBody' => include __DIR__ . '/response/case6.php',
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Вкладка "Ожидают"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'url' => 'on-hold',
            'requestParameters' => [
                'per-page' => 100
            ],
            'responseBody' => include __DIR__ . '/response/case7.php',
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Вкладка "Выполнены"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case8.php',
        'provider_data' => [
            'url' => 'completed',
            'requestParameters' => [
                'per-page' => 500
            ],
            'responseBody' => include __DIR__ . '/response/case8.php',
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Вкладка "Закрыты"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case11.php',
        'provider_data' => [
            'url' => 'closed',
            'requestParameters' => [
                'per-page' => 20
            ],
            'responseBody' => include __DIR__ . '/response/case11.php',
        ]
    ],

];
