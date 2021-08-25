<?php

use lisa\SettingsTester;

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить модель команды в которой есть участники',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 4,
            'responseBody' => [
                'initialValues' => [
                    'projects' => SettingsTester::PROJECTS,
                    'hasMembers' => true,
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
                'model' => [
                    'id' => 4,
                    'name' => 'Маркетплейс 4',
                    'direction' => 2,
                    'project_id' => 1,
                    'status' => 1,
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить модель команды в которой нет участников',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'id' => 5,
            'responseBody' => [
                'initialValues' => [
                    'hasMembers' => false,
                    'projects' => SettingsTester::PROJECTS,
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
                'model' => [
                    'id' => 5,
                    'name' => 'Маркетплейс 5',
                    'direction' => 2,
                    'project_id' => 1,
                    'status' => 1,
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить пустую модель команды для создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'initialValues' => [
                    'hasMembers' => false,
                    'projects' => SettingsTester::PROJECTS,
                    'directions' => [
                        1 => 'Управление отделом',
                        2 => 'Работа с товарами Маркетплейса',
                        3 => 'Работа с товарами Rozetka',
                        4 => 'Работа с группами',
                        5 => 'Работа с проектированием структур + фильтрами',
                        6 => 'Работа с порталами, фат-меню, категориями',
                    ],
                ],
                'model' => [
                    'id' => NULL,
                    'name' => NULL,
                    'direction' => NULL,
                    'project_id' => NULL,
                    'status' => 1,
                ],
            ],
        ]
    ]
];
