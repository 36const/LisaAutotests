<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда без параметров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[1][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[1][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Новые / По направлению и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Новые&display=0&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[1][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[1][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Ожидают взятия в работу / По направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Ожидают%20взятия%20в%20работу&display=1&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[2][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[2][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда В работе / По командам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=В%20работе&display=2&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[3][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[3][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Ожидают / По себе как менеджеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Ожидают&display=3&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[4][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[4][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Ожидают взятия в работу / По направлению и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Выполнены&display=0&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[5][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[1][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Отменены / По направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Отменены&display=1&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[6][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[2][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда На доработке / По командам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=На%20доработке&display=2&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[7][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[3][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Cтраница детального дашборда Закрыты (проверены) / По себе как менеджеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=undefined&status=Закрыты%20(проверены)&display=3&date=2020-07-01',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Статус" => [
                        [
                            "selector" => "//select[@name='Dashboard[status]']/option[8][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[4][@selected]",
                        ],
                    ],
                    "Дата последнего изменения статуса" => [
                        [
                            "selector" => "//input[@name='Dashboard[date]' and @value='2020-07-01']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
