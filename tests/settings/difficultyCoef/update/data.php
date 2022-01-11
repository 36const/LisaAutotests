<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение коэффициента и не-изменение в заявке без пересохранения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
            ],
            'requestBody' => [
                'id' => 5,
                'type_id' => 1,
                'field_ids' => [
                    0 => '1',
                    1 => '4',
                ],
                'difficulty_coef' => 2.5,
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 5,
                    'type_id' => 'Добавление новых товаров',
                    'field_ids' => 'Ручная загрузка | С фотосъемкой',
                    'difficulty_coef' => 2.5,
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            4 => [
                                'id' => 5,
                                'type_id' => 1,
                                'field_ids' => '[1, 4]',
                                'difficulty_coef' => 2.5,
                                'status' => 1
                            ],
                        ]
                    ),
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 5,
                            'old_value' => '{"difficulty_coef": 4}',
                            'new_value' => '{"difficulty_coef": 2.5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение статуса и не-изменение в заявке без пересохранения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
            ],
            'requestBody' => [
                'id' => 5,
                'type_id' => 1,
                'field_ids' => [
                    0 => '1',
                    1 => '4',
                ],
                'difficulty_coef' => '4',
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 5,
                    'type_id' => 'Добавление новых товаров',
                    'field_ids' => 'Ручная загрузка | С фотосъемкой',
                    'difficulty_coef' => '4',
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            4 => [
                                'id' => 5,
                                'type_id' => 1,
                                'field_ids' => '[1, 4]',
                                'difficulty_coef' => 4,
                                'status' => 0
                            ],
                        ]
                    ),
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 5,
                            'old_value' => '{"status": 1}',
                            'new_value' => '{"status": 0}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение коэффициента и статуса и не-изменение в заявке без пересохранения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
            ],
            'requestBody' => [
                'id' => 5,
                'type_id' => 1,
                'field_ids' => [
                    0 => '1',
                    1 => '4',
                ],
                'difficulty_coef' => 2.5,
                'status' => 0,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 5,
                    'type_id' => 'Добавление новых товаров',
                    'field_ids' => 'Ручная загрузка | С фотосъемкой',
                    'difficulty_coef' => 2.5,
                    'status' => 'Заблокированный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            4 => [
                                'id' => 5,
                                'type_id' => 1,
                                'field_ids' => '[1, 4]',
                                'difficulty_coef' => 2.5,
                                'status' => 0
                            ],
                        ]
                    ),
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 5,
                            'old_value' => '{"status": 1, "difficulty_coef": 4}',
                            'new_value' => '{"status": 0, "difficulty_coef": 2.5}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение чек-боксов и не-изменение в заявке без пересохранения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'diff_coef_1_[1]ee1510e00f15f464f1482c229e1c4b28',
                'diff_coef_1_[2]6b59feb34a7dd85a6b2b365f725a7b20',
            ],
            'requestBody' => [
                'id' => 5,
                'type_id' => 1,
                'field_ids' => [
                    0 => '1',
                    1 => '8',
                ],
                'difficulty_coef' => 4,
                'status' => 1,
            ],
            'responseBody' => [
                'model' => [
                    'id' => 5,
                    'type_id' => 'Добавление новых товаров',
                    'field_ids' => 'Ручная загрузка | С размерной сеткой',
                    'difficulty_coef' => 4,
                    'status' => 'Активный',
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => array_replace_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                        [
                            4 => [
                                'id' => 5,
                                'type_id' => 1,
                                'field_ids' => '[1, 8]',
                                'difficulty_coef' => 4,
                                'status' => 1
                            ],
                        ]
                    ),
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'difficulty_coefs',
                            'entity_id' => 5,
                            'old_value' => '{"field_ids": "[1, 4]"}',
                            'new_value' => '{"field_ids": "[1,8]"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность изменения без значения коэффициента',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 4,
                'type_id' => 1,
                'field_ids' => [
                    0 => 1,
                    1 => 4,
                ],
                'difficulty_coef' => '',
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'difficulty_coef' => [
                        0 => 'Необходимо заполнить «Коэффициент сложности».',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность изменения с дублированием коэффициента',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 4,
                'type_id' => 1,
                'field_ids' => [
                    0 => 1,
                ],
                'difficulty_coef' => '0.5',
                'status' => 1,
            ],
            'responseBody' => [
                'errors' => [
                    'type_id' => [
                        0 => 'Такая комбинация Типа заявки и выбраных полей уже существует',
                    ],
                    'field_ids' => [
                        0 => 'Такая комбинация Типа заявки и выбраных полей уже существует',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'difficulty_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['difficulty_coefs'],
                    'requests' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    'requests_fields' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                ],
            ]
        ]
    ],

];
