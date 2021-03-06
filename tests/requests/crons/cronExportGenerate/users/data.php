<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех пользователей',
            'rows' => 34
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "users", "params": "[]"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "users", "params": "[]"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'ID пользователя',
                    'B' => 'Имя пользователя',
                    'C' => 'Логин пользователя',
                    'D' => 'Команда пользователя',
                    'E' => 'Роли пользователя',
                    'F' => 'Дата создания',
                    'G' => 'Руководитель',
                    'H' => 'Дата последнего обновления',
                    'I' => 'Cтатус пользователя',
                    'J' => 'ДРФО',
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка пользователей с фильтром по команде',
            'rows' => 4
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?filter[team]=1&sort=-id&per-page=100',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'ID пользователя',
                    'B' => 'Имя пользователя',
                    'C' => 'Логин пользователя',
                    'D' => 'Команда пользователя',
                    'E' => 'Роли пользователя',
                    'F' => 'Дата создания',
                    'G' => 'Руководитель',
                    'H' => 'Дата последнего обновления',
                    'I' => 'Cтатус пользователя',
                    'J' => 'ДРФО',
                ],
                2 => [
                    'A' => 6,
                    'B' => 'Супервайзер Начальникович 1',
                    'C' => 'bpm_supervisor_1',
                    'D' => 'Маркетплейс 1',
                    'E' => 'Супервайзер (Контент)',
                    'F' => '2020-05-19 13:36:22',
                    'G' => 'Супервайзер Руководько 1',
                    'H' => '2020-05-19 16:36:22',
                    'I' => 'Активный',
                    'J' => '\'000000006',
                ],
                3 => [
                    'A' => 11,
                    'B' => 'Менеджер Контентович 1А',
                    'C' => 'bpm_contentManager_1a',
                    'D' => 'Маркетплейс 1',
                    'E' => 'Контент-менеджер (Контент)',
                    'F' => '2020-05-19 13:36:23',
                    'G' => 'Супервайзер Начальникович 1',
                    'H' => '2020-05-19 16:36:23',
                    'I' => 'Активный',
                    'J' => '\'000000011',
                ],
                4 => [
                    'A' => 12,
                    'B' => 'Менеджер Контентович 1Б',
                    'C' => 'bpm_contentManager_1b',
                    'D' => 'Маркетплейс 1',
                    'E' => 'Контент-менеджер (Контент)',
                    'F' => '2020-05-19 13:36:23',
                    'G' => 'Супервайзер Начальникович 1',
                    'H' => '2020-05-19 16:36:23',
                    'I' => 'Активный',
                    'J' => '\'000000012',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка пользователей с фильтром по роли',
            'rows' => 3
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?filter[team]&sort=-id&filter[position]=teamLead&per-page=100',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"\",\"position\":\"teamLead\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"\",\"position\":\"teamLead\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'ID пользователя',
                    'B' => 'Имя пользователя',
                    'C' => 'Логин пользователя',
                    'D' => 'Команда пользователя',
                    'E' => 'Роли пользователя',
                    'F' => 'Дата создания',
                    'G' => 'Руководитель',
                    'H' => 'Дата последнего обновления',
                    'I' => 'Cтатус пользователя',
                    'J' => 'ДРФО',
                ],
                2 => [
                    'A' => 15,
                    'B' => 'Тим Лидович 1',
                    'C' => 'bpm_teamLead_1',
                    'D' => 'Маркетплейс (инициаторы)',
                    'E' => 'Руководитель направления (тимлид) (Все)',
                    'F' => '2020-04-13 13:15:35',
                    'G' => 'Константин Куцан',
                    'H' => '2020-06-28 13:19:51',
                    'I' => 'Заблокированный',
                    'J' => '\'000000015',
                ],
                3 => [
                    'A' => 16,
                    'B' => 'Тим Лидович 2',
                    'C' => 'bpm_teamLead_2',
                    'D' => 'Маркетплейс (инициаторы)',
                    'E' => 'Руководитель направления (тимлид) (Все)',
                    'F' => '2020-04-13 13:15:36',
                    'G' => 'Константин Куцан',
                    'H' => '2020-06-25 10:49:20',
                    'I' => 'Активный',
                    'J' => '\'000000016',
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Выгрузка пользователей с фильтром по руководителю, статусу и команде',
            'rows' => 4
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?filter[team]=18&sort=-id&filter[position]&filter[parent_id]=4&filter[status]=1',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"18\",\"position\":\"\",\"parent_id\":\"4\",\"status\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "users", "params": "{\"filter\":{\"team\":\"18\",\"position\":\"\",\"parent_id\":\"4\",\"status\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_users_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'ID пользователя',
                    'B' => 'Имя пользователя',
                    'C' => 'Логин пользователя',
                    'D' => 'Команда пользователя',
                    'E' => 'Роли пользователя',
                    'F' => 'Дата создания',
                    'G' => 'Руководитель',
                    'H' => 'Дата последнего обновления',
                    'I' => 'Cтатус пользователя',
                    'J' => 'ДРФО',
                ],
                2 => [
                    'A' => 16,
                    'B' => 'Тим Лидович 2',
                    'C' => 'bpm_teamLead_2',
                    'D' => 'Маркетплейс (инициаторы)',
                    'E' => 'Руководитель направления (тимлид) (Все)',
                    'F' => '2020-04-13 13:15:36',
                    'G' => 'Константин Куцан',
                    'H' => '2020-06-25 10:49:20',
                    'I' => 'Активный',
                    'J' => '\'000000016',
                ],
                3 => [
                    'A' => 17,
                    'B' => 'Менеджер Продактович 1',
                    'C' => 'bpm_productManager_1',
                    'D' => 'Маркетплейс (инициаторы)',
                    'E' => 'Продакт-менеджер (Контент)',
                    'F' => '2020-04-13 13:15:36',
                    'G' => 'Константин Куцан',
                    'H' => '2020-06-24 08:41:00',
                    'I' => 'Активный',
                    'J' => '\'000000017',
                ],
                4 => [
                    'A' => 18,
                    'B' => 'Менеджер Продактович 2',
                    'C' => 'bpm_productManager_2',
                    'D' => 'Маркетплейс (инициаторы)',
                    'E' => 'Продакт-менеджер (Контент)',
                    'F' => '2020-04-13 13:15:36',
                    'G' => 'Константин Куцан',
                    'H' => '2020-06-24 08:41:05',
                    'I' => 'Активный',
                    'J' => '\'000000018',
                ],
            ]
        ]
    ],

];
