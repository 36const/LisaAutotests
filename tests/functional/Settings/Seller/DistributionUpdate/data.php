<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение правил распределения без пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'teamDirections' => ['2', '3']
            ],
            "pageObjects" => 'Настройки распределения успешно сохранены!'
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
                'teamDirections' => ['2', '3'],
                'includedUsers' => ['4']
            ],
            "pageObjects" => 'Настройки распределения успешно сохранены!'
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
                'teamDirections' => ['2', '3'],
                'excludedUsers' => ['4']
            ],
            "pageObjects" => 'Настройки распределения успешно сохранены!'
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
                'teamDirections' => ['2', '3'],
                'includedUsers' => ['4', '6'],
                'excludedUsers' => ['21', '24']
            ],
            "pageObjects" => 'Настройки распределения успешно сохранены!'
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
                'teamDirections' => ['2', '3'],
                'includedUsers' => ['4', '6'],
                'excludedUsers' => ['21', '24']
            ],
            "pageObjects" => 'Настройки распределения успешно сохранены!'
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение правил распределения без указания должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'teamDirections' => ['2', '3'],
                'includedUsers' => ['4', '6'],
                'excludedUsers' => ['21', '24']
            ],
            "pageObjects" => 'Поле "Должности" не может быть пустым.',
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменение правил распределения без указания направления',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['headSupervisor', 'supervisor'],
                'includedUsers' => ['4', '6'],
                'excludedUsers' => ['21', '24']
            ],
            "pageObjects" => 'Поле "Направления команд" не может быть пустым.',
        ]
    ],
];
