<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница выгрузки отчётов из профиля администратора',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'responseBody' => [
                'periods' => [
                    0 => [
                        'id' => 1,
                        'value' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                    ],
                    1 => [
                        'id' => 2,
                        'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    ],
                    2 => [
                        'id' => 3,
                        'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    ],
                    3 => [
                        'id' => 4,
                        'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    ],
                ],
                'currentPeriod' => 3,
                'currentPeriodWithDelay' => 3,
                'permissions' => [
                    'isNotManager' => true,
                    'isAdmin' => true,
                ],
                'detailReports' => [
                    1 => 'Всё во всём',
                    2 => 'Всё во всём 1',
                    3 => 'Всё во всём 2',
                    4 => 'Всё во всём 3',
                ],
                'totalReports' => [
                    5 => 'Всё во всём (сводный)',
                    6 => 'Всё во всём (сводный) 1',
                    7 => 'Всё во всём (сводный) 2',
                    8 => 'Всё во всём (сводный) 3',
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница выгрузки отчётов из профиля СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                'periods' => [
                    0 => [
                        'id' => 1,
                        'value' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                    ],
                    1 => [
                        'id' => 2,
                        'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    ],
                    2 => [
                        'id' => 3,
                        'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    ],
                    3 => [
                        'id' => 4,
                        'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    ],
                ],
                'currentPeriod' => 3,
                'currentPeriodWithDelay' => 3,
                'permissions' => [
                    'isNotManager' => true,
                    'isAdmin' => false,
                ],
                'detailReports' => [
                    1 => 'Всё во всём',
                    3 => 'Всё во всём 2',
                    4 => 'Всё во всём 3',
                ],
                'totalReports' => [
                    5 => 'Всё во всём (сводный)',
                    7 => 'Всё во всём (сводный) 2',
                    8 => 'Всё во всём (сводный) 3',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница выгрузки отчётов из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'responseBody' => [
                'periods' => [
                    0 => [
                        'id' => 1,
                        'value' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                    ],
                    1 => [
                        'id' => 2,
                        'value' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    ],
                    2 => [
                        'id' => 3,
                        'value' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    ],
                    3 => [
                        'id' => 4,
                        'value' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    ],
                ],
                'currentPeriod' => 3,
                'currentPeriodWithDelay' => 3,
                'permissions' => [
                    'isNotManager' => false,
                    'isAdmin' => false,
                ],
                'detailReports' => [
                    1 => 'Всё во всём',
                    3 => 'Всё во всём 2',
                    4 => 'Всё во всём 3',
                ],
                'totalReports' => [
                    5 => 'Всё во всём (сводный)',
                    7 => 'Всё во всём (сводный) 2',
                    8 => 'Всё во всём (сводный) 3',
                ],
            ]
        ]
    ],


];
