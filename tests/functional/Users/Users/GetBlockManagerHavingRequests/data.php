<?php

use lisa\Page\Users\User;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность блокировки менеджера при наличии заявок в статусе 5',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [User::$userStatus . '[@disabled]'],
                        [User::requestsBlockingManagerButton(11)],
                        [User::$warningAlert],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность блокировки менеджера при наличии заявок в статусе 6',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [User::$userStatus . '[@disabled]'],
                        [User::requestsBlockingManagerButton(11)],
                        [User::$warningAlert],
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность блокировки менеджера при наличии заявок в статусе 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [User::$userStatus . '[@disabled]'],
                        [User::requestsBlockingManagerButton(11)],
                        [User::$warningAlert],
                    ]
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Возможность блокировки менеджера при наличии заявок в статусах 8, 9, 11',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [User::$userStatus . '[not(@disabled)]'],
                    ]
                ],
                "cantSee" => [
                    [
                        [User::requestsBlockingManagerButton(11)],
                        [User::$warningAlert],
                    ]
                ]
            ]
        ]
    ],

];
