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
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Маркетплейс 1']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Fashion']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Группировка товаров']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Проектирование структур категорий + фильтры']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Изменения в категориях']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Административная команда']"],
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
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Маркетплейс 1']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Fashion']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Группировка товаров']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Проектирование структур категорий + фильтры']"],
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Изменения в категориях']"],
                    ],
                ],
                "cantSee" => [
                    [
                        ["selector" => "//select[@id='userbpm-team']//option[text()='Административная команда']"],
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
                        ["selector" => "//select[@id='team-status' and @disabled]"],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
