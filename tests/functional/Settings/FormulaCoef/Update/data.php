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
                'coef' => '0.9',
                'modelId' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "formula_coefs" => [
                        [
                            "id" => 1,
                            "name" => "Коэффициент не сгруппированных товаров",
                            "coef" => 0.9
                        ],
                        [
                            "id" => 2,
                            "name" => "Коэффициент писем/подзадач",
                            "coef" => 0.15
                        ],
                        [
                            "id" => 3,
                            "name" => "Коэффициент количества слов в словарях",
                            "coef" => 0.1
                        ],
                    ],
                    "goods_in_groups_coefs" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
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
                'coef' => '0.33',
                'modelId' => '2',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "formula_coefs" => [
                        [
                            "id" => 1,
                            "name" => "Коэффициент не сгруппированных товаров",
                            "coef" => 0.07
                        ],
                        [
                            "id" => 2,
                            "name" => "Коэффициент писем/подзадач",
                            "coef" => 0.33
                        ],
                        [
                            "id" => 3,
                            "name" => "Коэффициент количества слов в словарях",
                            "coef" => 0.1
                        ],
                    ],
                    "goods_in_groups_coefs" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
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
                'coef' => '1.99',
                'modelId' => '3',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "formula_coefs" => [
                        [
                            "id" => 1,
                            "name" => "Коэффициент не сгруппированных товаров",
                            "coef" => 0.07
                        ],
                        [
                            "id" => 2,
                            "name" => "Коэффициент писем/подзадач",
                            "coef" => 0.15
                        ],
                        [
                            "id" => 3,
                            "name" => "Коэффициент количества слов в словарях",
                            "coef" => 1.99
                        ],
                    ],
                    "goods_in_groups_coefs" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['goods_in_groups_coefs'],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение коэффициента не сгруппированных товаров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/goods-in-groups-coef/update',
            'requestBody' => [
                'coef' => '0.75',
                'modelId' => '3',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "formula_coefs" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['formula_coefs'],
                    "goods_in_groups_coefs" => [
                        [
                            "id" => 1,
                            "min_value" => 1,
                            "max_value" => 15,
                            "coef" => 1
                        ],
                        [
                            "id" => 2,
                            "min_value" => 16,
                            "max_value" => 25,
                            "coef" => 0.9
                        ],
                        [
                            "id" => 3,
                            "min_value" => 26,
                            "max_value" => 35,
                            "coef" => 0.75
                        ],
                        [
                            "id" => 4,
                            "min_value" => 36,
                            "max_value" => 50,
                            "coef" => 0.5
                        ],
                        [
                            "id" => 5,
                            "min_value" => 51,
                            "max_value" => 100,
                            "coef" => 0.4
                        ],
                        [
                            "id" => 6,
                            "min_value" => 101,
                            "max_value" => 999999,
                            "coef" => 0.3
                        ]
                    ],
                ],
            ]
        ]
    ],

];
