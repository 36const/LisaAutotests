<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля кч-менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'jsonPath' => '$.fieldsData.permissions',
            'responseBody' => [
                '$.fieldsData.managerMotivation' => [
                ],
                '$.fieldsData.svMotivation' => [
                ],
                '$.fieldsData.ccMotivation' => [
                    0 => [
                        'id' => 157,
                        'name' => 'Проверенные ссылки (Кросс-чек)',
                        'type' => 'textarea',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    1 => [
                        'id' => 144,
                        'name' => 'Количество проверенных товаров (Кросс-чек)',
                        'type' => 'integer',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    2 => [
                        'id' => 142,
                        'name' => 'Рассчитанное количество проверенных товаров (Кросс-чек)',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                    3 => [
                        'id' => 143,
                        'name' => 'Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                ],
                '$.fieldsData.report_period_id' => [
                    'disabled' => true,
                    'items' => [
                        0 => [
                            'id' => 1,
                            'value' => '2020-01-01 - 2021-12-31',
                        ],
                    ],
                ],
                '$.fieldsData.sv_report_periods' => [
                    'disabled' => true,
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля менеджера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData.managerMotivation' => [
                    0 => [
                        'id' => 52,
                        'name' => 'Коэффициент сложности категории',
                        'value' => '2',
                        'readonly' => true,
                    ],
                    1 => [
                        'id' => 53,
                        'name' => 'Коэффициент типа задачи',
                        'value' => '0.5',
                        'readonly' => true,
                    ],
                    2 => [
                        'id' => 54,
                        'name' => 'Коэффициент уровня сложности задачи',
                        'value' => '1',
                        'readonly' => true,
                    ],
                    3 => [
                        'id' => 49,
                        'name' => 'Рассчитанное количество добавленных товаров',
                        'value' => '0',
                        'readonly' => true,
                    ],
                ],
                '$.fieldsData.svMotivation' => [
                ],
                '$.fieldsData.ccMotivation' => [
                ],
                '$.fieldsData.report_period_id' => [
                    'disabled' => true,
                    'items' => [
                        0 => [
                            'id' => 1,
                            'value' => '2020-01-01 - 2021-12-31',
                        ],
                    ],
                ],
                '$.fieldsData.sv_report_periods' => [
                    'disabled' => true,
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля продакта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData.managerMotivation' => [
                ],
                '$.fieldsData.svMotivation' => [
                ],
                '$.fieldsData.ccMotivation' => [
                ],
                '$.fieldsData.sv_report_periods' => [
                    'disabled' => true,
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заявка на Добавление новых товаров (Работа с товарами Розетки) из профиля супервайзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'responseBody' => [
                '$.fieldsData.managerMotivation' => [
                    0 => [
                        'id' => 52,
                        'name' => 'Коэффициент сложности категории',
                        'value' => '2',
                        'readonly' => true,
                    ],
                    1 => [
                        'id' => 53,
                        'name' => 'Коэффициент типа задачи',
                        'value' => '0.5',
                        'readonly' => true,
                    ],
                    2 => [
                        'id' => 54,
                        'name' => 'Коэффициент уровня сложности задачи',
                        'value' => '1',
                        'readonly' => true,
                    ],
                    3 => [
                        'id' => 49,
                        'name' => 'Рассчитанное количество добавленных товаров',
                        'value' => '0',
                        'readonly' => true,
                    ],
                ],
                '$.fieldsData.svMotivation' => [
                    0 => [
                        'id' => 121,
                        'name' => 'Проверенные ссылки',
                        'type' => 'textarea',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    1 => [
                        'id' => 65,
                        'name' => 'Количество проверенных товаров',
                        'type' => 'integer',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    2 => [
                        'id' => 51,
                        'name' => 'Рассчитанное количество проверенных товаров',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                    3 => [
                        'id' => 60,
                        'name' => 'Рассчитанное количество проверенных товаров с ошибками',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                ],
                '$.fieldsData.ccMotivation' => [
                    0 => [
                        'id' => 157,
                        'name' => 'Проверенные ссылки (Кросс-чек)',
                        'type' => 'textarea',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    1 => [
                        'id' => 144,
                        'name' => 'Количество проверенных товаров (Кросс-чек)',
                        'type' => 'integer',
                        'value' => NULL,
                        'readonly' => false,
                    ],
                    2 => [
                        'id' => 142,
                        'name' => 'Рассчитанное количество проверенных товаров (Кросс-чек)',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                    3 => [
                        'id' => 143,
                        'name' => 'Рассчитанное количество проверенных товаров с ошибками (Кросс-чек)',
                        'type' => 'decimal',
                        'value' => '0',
                        'readonly' => true,
                    ],
                ],
                '$.fieldsData.report_period_id' => [
                    'disabled' => false,
                    'items' => [
                        0 => [
                            'id' => 1,
                            'value' => '2020-01-01 - 2021-12-31',
                        ],
                    ],
                ],
                '$.fieldsData.sv_report_periods' => [
                    'disabled' => false,
                ]
            ],
        ]
    ],

];
