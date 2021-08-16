<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение правил распределения без доп. пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'teamDirections' => [2, '3'],
                'includedUsers' => [],
                'excludedUsers' => [],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'positions' => [
                        0 => 'headSupervisor',
                        1 => 'supervisor',
                    ],
                    'teamDirections' => [
                        0 => 2,
                        1 => '3',
                    ],
                    'includedUsers' => [
                    ],
                    'excludedUsers' => [
                    ],
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["headSupervisor","supervisor"]',
                    'teamDirections' => '[2,"3"]',
                    'includedUsers' => '[]',
                    'excludedUsers' => '[]',
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение правил распределения c дополнительным пользователем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'teamDirections' => [2, '3'],
                'includedUsers' => [4],
                'excludedUsers' => [],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'positions' => [
                        0 => 'headSupervisor',
                        1 => 'supervisor',
                    ],
                    'teamDirections' => [
                        0 => 2,
                        1 => '3',
                    ],
                    'includedUsers' => [
                        0 => 4,
                    ],
                    'excludedUsers' => [
                    ],
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["headSupervisor","supervisor"]',
                    'teamDirections' => '[2,"3"]',
                    'includedUsers' => '[4]',
                    'excludedUsers' => '[]',
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение правил распределения с исключённым пользователем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'teamDirections' => [2, '3'],
                'includedUsers' => [],
                'excludedUsers' => [4],
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'positions' => [
                        0 => 'headSupervisor',
                        1 => 'supervisor',
                    ],
                    'teamDirections' => [
                        0 => 2,
                        1 => '3',
                    ],
                    'includedUsers' => [
                    ],
                    'excludedUsers' => [
                        0 => 4,
                    ],
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["headSupervisor","supervisor"]',
                    'teamDirections' => '[2,"3"]',
                    'includedUsers' => '[]',
                    'excludedUsers' => '[4]',
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение правил распределения с дополнительными и исключёнными пользователями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'teamDirections' => [2, '3'],
                'includedUsers' => [4, 6],
                'excludedUsers' => [21, 24]
            ],
            'responseBody' => [
                'status' => 200,
                'model' => [
                    'positions' => [
                        0 => 'headSupervisor',
                        1 => 'supervisor',
                    ],
                    'teamDirections' => [
                        0 => 2,
                        1 => '3',
                    ],
                    'includedUsers' => [
                        0 => 4,
                        1 => 6,
                    ],
                    'excludedUsers' => [
                        0 => 21,
                        1 => 24,
                    ],
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["headSupervisor","supervisor"]',
                    'teamDirections' => '[2, "3"]',
                    'includedUsers' => '[4, 6]',
                    'excludedUsers' => '[21, 24]',
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение правил распределения без указания роли',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => [],
                'teamDirections' => ['2', '3'],
                'includedUsers' => ['4', '6'],
                'excludedUsers' => ['21', '24']
            ],
            'responseBody' => [
                'positions' => [
                ],
                'teamDirections' => [
                    '2',
                    '3'
                ],
                'includedUsers' => [
                    '4',
                    '6'
                ],
                'excludedUsers' => [
                    '21',
                    '24'
                ],
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'positions' => 'Поле "Должности" не может быть пустым.',
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["supervisor"]',
                    'teamDirections' => '[2]',
                    'includedUsers' => '[]',
                    'excludedUsers' => '[]',
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменение правил распределения без указания направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => [
                    0 => 'supervisor',
                ],
                'teamDirections' => [
                ],
                'includedUsers' => [
                    '4',
                    '6'
                ],
                'excludedUsers' => [
                    '21',
                    '24'
                ],
            ],
            'responseBody' => [
                'status' => 400,
                'errors' => [
                    'teamDirections' => 'Поле "Направления команд" не может быть пустым.',
                ],
            ],
            'redisValueAfter' => [
                'SellerDistribution' => [
                    'positions' => '["supervisor"]',
                    'teamDirections' => '[2]',
                    'includedUsers' => '[]',
                    'excludedUsers' => '[]',
                ]
            ]
        ]
    ],
];
