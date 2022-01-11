<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Создание взаимоисключающих чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'all_excluded_fields280d3acd22e0ce237b19d4aea2c1d44b',
            ],
            'requestBody' => [
                'field_id' => 10,
                'excluded_field_id' => 9,
            ],
            'responseBody' => [
                'model' => [
                    'field_id' => 10,
                    'excluded_field_id' => 9,
                    'field_name' => 'Уценка',
                    'excluded_field_name' => 'С тегами к товарам',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields'],
                        [
                            [
                                'field_id' => 10,
                                'excluded_field_id' => 9
                            ]
                        ]
                    ),
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'excluded_fields',
                            'entity_id' => 0,
                            'old_value' => '[]',
                            'new_value' => '{"field_id": "10", "excluded_field_id": "9"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания взаимоискл. чекбоксов без значения "Поле"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'field_id' => NULL,
                'excluded_field_id' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Необходимо заполнить «Поле».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields']
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания взаимоискл. чекбоксов без значения "Исключающее поле"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'field_id' => 1,
                'excluded_field_id' => NULL,
            ],
            'responseBody' => [
                'errors' => [
                    'excluded_field_id' => [
                        0 => 'Необходимо заполнить «Исключающее поле».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields']
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания взаимоискл. чекбоксов с одинаковыми "Поле" и "Исключающее поле"',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'field_id' => 1,
                'excluded_field_id' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Значение «Поле» не должно быть равно «Исключающее поле».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields']
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания взаимоискл. чекбоксов с пустыми полями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'field_id' => NULL,
                'excluded_field_id' => NULL,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Необходимо заполнить «Поле».',
                    ],
                    'excluded_field_id' => [
                        0 => 'Необходимо заполнить «Исключающее поле».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields']
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность создания дубля взаимоискл. чекбоксов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'field_id' => 1,
                'excluded_field_id' => 2,
            ],
            'responseBody' => [
                'errors' => [
                    'field_id' => [
                        0 => 'Комбинация "1"-"2" параметров Поле и Исключающее поле уже существует.',
                    ],
                    'excluded_field_id' => [
                        0 => 'Комбинация "1"-"2" параметров Поле и Исключающее поле уже существует.',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'excluded_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['excluded_fields']
                ],
            ]
        ]
    ],

];
