<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Отсутствие заблоченной команды на странице создания пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/user/create',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//select[@id='userbpm-team']//option[text()='Маркетплейс 1']"],
                        ["//select[@id='userbpm-team']//option[text()='Fashion']"],
                        ["//select[@id='userbpm-team']//option[text()='Группировка товаров']"],
                        ["//select[@id='userbpm-team']//option[text()='Проектирование структур категорий + фильтры']"],
                        ["//select[@id='userbpm-team']//option[text()='Изменения в категориях']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["//select[@id='userbpm-team']//option[text()='Административная команда']"],
                    ]

                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Отсутствие заблоченной команды на странице редактирования пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/user/update?id=4',
            "pageObjects" => [
                "canSee" => [
                    [
                        ["//select[@id='userbpm-team']//option[text()='Маркетплейс 1']"],
                        ["//select[@id='userbpm-team']//option[text()='Fashion']"],
                        ["//select[@id='userbpm-team']//option[text()='Группировка товаров']"],
                        ["//select[@id='userbpm-team']//option[text()='Проектирование структур категорий + фильтры']"],
                        ["//select[@id='userbpm-team']//option[text()='Изменения в категориях']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["//select[@id='userbpm-team']//option[text()='Административная команда']"],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность заблочить команду в которой есть пользователь',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "url" => '/bpm/team/update?id=17',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//div[@class='team-form']//*[text()='
        В команде есть люди, будь человеком, не блочь.
        ']"
                        ],
                        ["//select[@id='team-status' and @disabled]"],
                    ],
                ],
            ]
        ]
    ],

];
