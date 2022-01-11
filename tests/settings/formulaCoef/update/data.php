<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение коэффициента не сгруппированных товаров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'formula_coefs96c97f00c7a4f639793578f36f8d740e',
            ],
            'requestBody' => [
                'id' => 1,
                'value' => 0.9,
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'formula_coefs' => [
                        [
                            'id' => 1,
                            'name' => 'Коэффициент не сгруппированных товаров',
                            'coef' => 0.9
                        ],
                        [
                            'id' => 2,
                            'name' => 'Коэффициент писем/подзадач',
                            'coef' => 0.15
                        ],
                        [
                            'id' => 3,
                            'name' => 'Коэффициент количества слов в словарях',
                            'coef' => 0.1
                        ],
                    ],
                    'goods_in_groups_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'formula_coefs',
                            'entity_id' => 1,
                            'old_value' => '{"coef": 0.07}',
                            'new_value' => '{"coef": 0.9}',
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
            'description' => 'Изменение коэффициента писем/подзадач',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'formula_coefs96c97f00c7a4f639793578f36f8d740e',
            ],
            'requestBody' => [
                'id' => 2,
                'value' => 0.33,
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'formula_coefs' => [
                        [
                            'id' => 1,
                            'name' => 'Коэффициент не сгруппированных товаров',
                            'coef' => 0.07
                        ],
                        [
                            'id' => 2,
                            'name' => 'Коэффициент писем/подзадач',
                            'coef' => 0.33
                        ],
                        [
                            'id' => 3,
                            'name' => 'Коэффициент количества слов в словарях',
                            'coef' => 0.1
                        ],
                    ],
                    'goods_in_groups_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'formula_coefs',
                            'entity_id' => 2,
                            'old_value' => '{"coef": 0.15}',
                            'new_value' => '{"coef": 0.33}',
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
            'description' => 'Изменение коэффициента количества слов в словарях',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'formula_coefs96c97f00c7a4f639793578f36f8d740e',
            ],
            'requestBody' => [
                'value' => 1.99,
                'id' => 3,
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'formula_coefs' => [
                        [
                            'id' => 1,
                            'name' => 'Коэффициент не сгруппированных товаров',
                            'coef' => 0.07
                        ],
                        [
                            'id' => 2,
                            'name' => 'Коэффициент писем/подзадач',
                            'coef' => 0.15
                        ],
                        [
                            'id' => 3,
                            'name' => 'Коэффициент количества слов в словарях',
                            'coef' => 1.99
                        ],
                    ],
                    'goods_in_groups_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'formula_coefs',
                            'entity_id' => 3,
                            'old_value' => '{"coef": 0.1}',
                            'new_value' => '{"coef": 1.99}',
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
            'description' => 'Изменение коэффициента среднего кол-ва товаров в группе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/goods-in-groups-coef/update-coef',
            'requestBody' => [
                'value' => 0.75,
                'id' => 3,
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'formula_coefs' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['formula_coefs'],
                    'goods_in_groups_coefs' => [
                        [
                            'id' => 1,
                            'min_value' => 1,
                            'max_value' => 15,
                            'coef' => 1
                        ],
                        [
                            'id' => 2,
                            'min_value' => 16,
                            'max_value' => 25,
                            'coef' => 0.9
                        ],
                        [
                            'id' => 3,
                            'min_value' => 26,
                            'max_value' => 35,
                            'coef' => 0.75
                        ],
                        [
                            'id' => 4,
                            'min_value' => 36,
                            'max_value' => 50,
                            'coef' => 0.5
                        ],
                        [
                            'id' => 5,
                            'min_value' => 51,
                            'max_value' => 100,
                            'coef' => 0.4
                        ],
                        [
                            'id' => 6,
                            'min_value' => 101,
                            'max_value' => 999999,
                            'coef' => 0.3
                        ]
                    ],
                    'common_log' => [
                        [
                            'id' => 1,
                            'entity' => 'goods_in_groups_coefs',
                            'entity_id' => 3,
                            'old_value' => '{"coef": 0.7}',
                            'new_value' => '{"coef": 0.75}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 2,
                        ]
                    ],
                ],
            ]
        ]
    ],

];
