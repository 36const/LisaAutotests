<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка детального отчёта по супервайзерам из профиля СВ',
            'rows' => 3
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '1',
                ],
                'report_period_id' => 3,
                'user_field' => 'supervisor_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["1"], "userField": "supervisor_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": true, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                ],
                2 => [
                    'A' => 2,
                    'B' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                    'C' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')) . ', ' .date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'D' => 'Менеджер Контентович 1Б (bpm_contentManager_1b)',
                    'E' => '\'000000012',
                    'F' => 'Константин Куцан (kutsan.k)',
                    'G' => '\'000000004',
                    'H' => 'не задано',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Добавление/изменение информации в существующих товарах',
                    'L' => 'Ожидает',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Euromart',
                ],
                3 => [
                    'A' => 5,
                    'B' => date('Y-m-d', strtotime('first day of previous month -1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month -1 month -1 day')),
                    'C' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'D' => 'Менеджер Контентович 2Б (bpm_contentManager_2b)',
                    'E' => '\'000000014',
                    'F' => 'Константин Куцан (kutsan.k)',
                    'G' => '\'000000004',
                    'H' => 'Менеджер Контентович 2А (bpm_contentManager_2a)',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Розетки',
                    'K' => 'Заливка фото с фотостудии',
                    'L' => 'Ожидает',
                    'M' => 'Авиабилеты',
                    'N' => 'не задано',
                    'O' => 'Все продавцы',
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка детального отчёта по исполнителям из профиля СВ',
            'rows' => 4
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '1',
                ],
                'report_period_id' => 3,
                'user_field' => 'manager_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["1"], "userField": "manager_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": true, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                ],
                2 => [
                    'A' => 3,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    'D' => 'Менеджер Контентович 1А (bpm_contentManager_1a)',
                    'E' => '\'000000011',
                    'F' => 'Константин Куцан (kutsan.k)',
                    'G' => '\'000000004',
                    'H' => 'не задано',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Перенос товаров',
                    'L' => 'Частично выполнена',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Маркетплейс (общий)',
                ],
                3 => [
                    'A' => 9,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    'D' => 'Менеджер Контентович 1А (bpm_contentManager_1a)',
                    'E' => '\'000000011',
                    'F' => 'Супервайзер Начальникович 2 (bpm_supervisor_2)',
                    'G' => '\'000000010',
                    'H' => 'не задано',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Добавление/изменение информации в существующих товарах',
                    'L' => 'Выполнена',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Euromart',
                ],
                4 => [
                    'A' => 6,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    'D' => 'Менеджер Контентович 2А (bpm_contentManager_2a)',
                    'E' => '\'000000013',
                    'F' => 'Константин Куцан (kutsan.k)',
                    'G' => '\'000000004',
                    'H' => 'не задано',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Проверка скрытых товаров',
                    'L' => 'Отменена',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Все продавцы',
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка детального отчёта по исполнителям из профиля КМ',
            'rows' => 3
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '1',
                ],
                'report_period_id' => 3,
                'user_field' => 'manager_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["1"], "userField": "manager_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": false, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                ],
                2 => [
                    'A' => 3,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    'D' => 'Константин Куцан (kutsan.k)',
                    'E' => '\'000000004',
                    'F' => 'Супервайзер Начальникович 1 (bpm_supervisor_1)',
                    'G' => 'Скрыто',
                    'H' => 'Кросс-чек менеджер скрыт',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Перенос товаров',
                    'L' => 'Частично выполнена',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Маркетплейс (общий)',
                ],
                3 => [
                    'A' => 9,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    'D' => 'Константин Куцан (kutsan.k)',
                    'E' => '\'000000004',
                    'F' => 'Супервайзер Начальникович 2 (bpm_supervisor_2)',
                    'G' => 'Скрыто',
                    'H' => 'Кросс-чек менеджер скрыт',
                    'I' => 'Константин Куцан (kutsan.k)',
                    'J' => 'Работа с товарами Маркетплейса',
                    'K' => 'Добавление/изменение информации в существующих товарах',
                    'L' => 'Выполнена',
                    'M' => 'не задано',
                    'N' => 'не задано',
                    'O' => 'Euromart',
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Выгрузка сводного отчёта по супервайзерам из профиля СВ',
            'rows' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '5',
                ],
                'report_period_id' => 3,
                'user_field' => 'supervisor_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["5"], "userField": "supervisor_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": true, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                    'P' => 'Количество заявок',
                ],
                2 => [
                    'A' => 7,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'D' => 26,
                    'E' => 'не считаемо',
                    'F' => 'Константин Куцан (kutsan.k)',
                    'G' => '\'000000004',
                    'H' => 13,
                    'I' => 8,
                    'J' => 3,
                    'K' => 7,
                    'L' => 14,
                    'M' => 1,
                    'N' => 0,
                    'O' => 81,
                    'P' => 2,
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Выгрузка сводного отчёта по исполнителям из профиля СВ',
            'rows' => 3
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '5',
                ],
                'report_period_id' => 3,
                'user_field' => 'manager_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["5"], "userField": "manager_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": true, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                    'P' => 'Количество заявок',
                ],
                2 => [
                    'A' => 12,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    'D' => 'Менеджер Контентович 1А (bpm_contentManager_1a)',
                    'E' => '\'000000011',
                    'F' => 'Константин Куцан,Супервайзер Начальникович 2',
                    'G' => 'не считаемо',
                    'H' => 0,
                    'I' => 8,
                    'J' => 4,
                    'K' => 5,
                    'L' => 17,
                    'M' => 0,
                    'N' => 0,
                    'O' => 83,
                    'P' => 2,
                ],
                3 => [
                    'A' => 6,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-d', strtotime('+1 day')) . ' - ' . date('Y-m-d', strtotime('last day of this month')),
                    'D' => 'Менеджер Контентович 2А (bpm_contentManager_2a)',
                    'E' => '\'000000013',
                    'F' => 'Константин Куцан',
                    'G' => 'не считаемо',
                    'H' => 0,
                    'I' => 4,
                    'J' => 2,
                    'K' => 6,
                    'L' => 4,
                    'M' => 0,
                    'N' => 0,
                    'O' => -2,
                    'P' => 1,
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Выгрузка сводного отчёта по исполнителям из профиля КМ',
            'rows' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'requestBody' => [
                'reports' => [
                    0 => '5',
                ],
                'report_period_id' => 3,
                'user_field' => 'manager_id',
            ],
            'db_1' => [
                'lisa_fixtures' => [
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 1,
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"teamId": 1, "reportIds": ["5"], "userField": "manager_id", "reportPeriodId": 3, "reportLoadAllUsers": false, "reportLoadYourTeam": false, "reportLoadMarketUsers": false}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'Всё_во_всём_(сводный)_' . date('Y-m-01') . '-' . date('Y-m-d') . '__' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Номер задачи',
                    'B' => 'Отчетный период КМ',
                    'C' => 'Отчетные периоды СВ',
                    'D' => 'Контент-менеджер',
                    'E' => 'ДРФО исполнителя',
                    'F' => 'Супервайзер',
                    'G' => 'ДРФО супервайзера',
                    'H' => 'Кросс-чек менеджер',
                    'I' => 'Автор',
                    'J' => 'Направление задачи',
                    'K' => 'Тип',
                    'L' => 'Статус',
                    'M' => 'Категория товаров',
                    'N' => 'Категория Rozetka',
                    'O' => 'Продавец',
                    'P' => 'Количество заявок',
                ],
                2 => [
                    'A' => 12,
                    'B' => date('Y-m-01') . ' - ' . date('Y-m-d'),
                    'C' => date('Y-m-01', strtotime('-1 month')) . ' - ' . date('Y-m-d', strtotime('last day of previous month')),
                    'D' => 'Константин Куцан (kutsan.k)',
                    'E' => '\'000000004',
                    'F' => 'Супервайзер Начальникович 1,Супервайзер Начальникович 2',
                    'G' => 'не считаемо',
                    'H' => 0,
                    'I' => 8,
                    'J' => 4,
                    'K' => 5,
                    'L' => 17,
                    'M' => 0,
                    'N' => 0,
                    'O' => 83,
                    'P' => 2,
                ],
            ],
        ]
    ],

];
