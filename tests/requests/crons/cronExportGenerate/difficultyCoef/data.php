<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка всех коэффициентов сложности',
            'rows' => 43
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
                            'conditions' => '{"type": "diff_coefs", "params": "[]"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "diff_coefs", "params": "[]"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Тип задачи',
                    'B' => 'Поля задачи',
                    'C' => 'Коэффициент сложности',
                    'D' => 'Статус',
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка коэффициентов сложности с фильтром по типу',
            'rows' => 5
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?filter[type_id]=2&per-page=100',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "diff_coefs", "params": "{\"filter\":{\"type_id\":\"2\"}}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "diff_coefs", "params": "{\"filter\":{\"type_id\":\"2\"}}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Тип задачи',
                    'B' => 'Поля задачи',
                    'C' => 'Коэффициент сложности',
                    'D' => 'Статус',
                ],
                2 => [
                    'A' => 'Добавление/изменение информации в существующих товарах',
                    'B' => 'Ручная загрузка',
                    'C' => '0.5',
                    'D' => 'Активный',
                ],
                3 => [
                    'A' => 'Добавление/изменение информации в существующих товарах',
                    'B' => 'Пакетная загрузка',
                    'C' => '2',
                    'D' => 'Активный',
                ],
                4 => [
                    'A' => 'Добавление/изменение информации в существующих товарах',
                    'B' => 'С размерной сеткой, С видео, С палитрой',
                    'C' => '3',
                    'D' => 'Активный',
                ],
                5 => [
                    'A' => 'Добавление/изменение информации в существующих товарах',
                    'B' => 'Пакетная загрузка, С фотосъемкой',
                    'C' => '4',
                    'D' => 'Активный',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка коэффициентов сложности с фильтром по статусу',
            'rows' => 42
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '?filter[type_id]&sort=-id&filter[status]=1&per-page=10',
            'db_1' => [
                'lisa_fixtures' => [
                    'exports_logs' => [
                        [
                            'export_id' => 1,
                            'user_id' => 4,
                            'conditions' => '{"type": "diff_coefs", "params": "{\"filter\":{\"type_id\":\"\",\"status\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at' => null,
                            'generation_time' => null,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
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
                            'conditions' => '{"type": "diff_coefs", "params": "{\"filter\":{\"type_id\":\"\",\"status\":\"1\"},\"sort\":\"-id\"}"}',
                            'created_at >=' => date('Y-m-d'),
                            'generated_at >=' => date('Y-m-d'),
                            'generation_time >' => 0,
                        ]
                    ],
                    'user_exports' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'title >' => 'export_difficulty_coefs_4_' . date('Y-m-d'),
                            'status' => 2,
                        ]
                    ]
                ]
            ],
            'fileContent' => [
                1 => [
                    'A' => 'Тип задачи',
                    'B' => 'Поля задачи',
                    'C' => 'Коэффициент сложности',
                    'D' => 'Статус',
                ]
            ]
        ]
    ],

];
