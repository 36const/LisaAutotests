<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница общего дашборда без параметров',
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
                    "Тип дашборда" => [
                        [
                            "selector" => "//select[@name='Dashboard[type]']/option[1][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[1][@selected]",
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
            'description' => 'Cтраница общего дашборда по кол-ву задач/по направлению и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&status=undefined&display=0&date=undefined',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Тип дашборда" => [
                        [
                            "selector" => "//select[@name='Dashboard[type]']/option[1][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[1][@selected]",
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
            'description' => 'Cтраница общего дашборда по кол-ву товаров/по направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&status=undefined&display=1&date=undefined',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Тип дашборда" => [
                        [
                            "selector" => "//select[@name='Dashboard[type]']/option[2][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[2][@selected]",
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
            'description' => 'Cтраница общего дашборда по датам/по командам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&status=undefined&display=2&date=undefined',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Тип дашборда" => [
                        [
                            "selector" => "//select[@name='Dashboard[type]']/option[3][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[3][@selected]",
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
            'description' => 'Cтраница общего дашборда по задачам и товарам/по себе как менеджеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=3&status=undefined&display=3&date=undefined',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                    ],
                    "Тип дашборда" => [
                        [
                            "selector" => "//select[@name='Dashboard[type]']/option[4][@selected]",
                        ],
                    ],
                    "Вариант отображения" => [
                        [
                            "selector" => "//select[@name='Dashboard[display]']/option[4][@selected]",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
