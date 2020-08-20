<?php

use \lisa\Page\Functional\Dashboard;

return [
    'case1' => [
        'setting' => [
            'description' => 'Общий дашборд по-умолчанию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(0),
                            "value" => "По направлению и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "4"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => "0"
                        ],
                        ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(10),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(11),
                            "value" => "4"
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву товаров / По направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=1',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(1),
                            "value" => "По количеству товаров"
                        ],
                        [
                            "selector" => Dashboard::display(1),
                            "value" => "По направлению"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "4"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(2),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(4),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(6),
                            "value" => "4"
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Общий дашборд Общий / По пользователям / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=3&display=3&member=manager_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(3),
                            "value" => "Общий (по задачам и товарам)"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member('manager_id'),
                            "value" => "менеджеру"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
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
            'description' => 'Общий дашборд Общий / По пользователям / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=3&display=3&member=author_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(3),
                            "value" => "Общий (по задачам и товарам)"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member('author_id'),
                            "value" => "автору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
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
            'description' => 'Общий дашборд Общий / По пользователям / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=3&display=3&member=supervisor_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(3),
                            "value" => "Общий (по задачам и товарам)"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member('supervisor_id'),
                            "value" => "супервизору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => null
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
            'description' => 'Общий дашборд По кол-ву задач / По пользователям и типу / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=4',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(4),
                            "value" => "По пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member(),
                            "value" => "менеджеру"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
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
            'description' => 'Общий дашборд По кол-ву задач / По пользователям и типу / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=4&member=author_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(4),
                            "value" => "По пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member('author_id'),
                            "value" => "автору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(14, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 0),
                            "value" => null
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
            'description' => 'Общий дашборд По кол-ву задач / По пользователям и типу / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=4&member=supervisor_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(4),
                            "value" => "По пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member('supervisor_id'),
                            "value" => "супервизору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 0),
                            "value" => null
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
            'description' => 'Общий дашборд По кол-ву товаров / По командам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=2',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(1),
                            "value" => "По количеству товаров"
                        ],
                        [
                            "selector" => Dashboard::display(2),
                            "value" => "По командам"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(2),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(4),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(6),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => "4"
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Общий дашборд Общий / По команде и типу / Отобразить все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=3&display=6',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(3),
                            "value" => "Общий (по задачам и товарам)"
                        ],
                        [
                            "selector" => Dashboard::display(6),
                            "value" => "По команде и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(4),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(8),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(11),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(13),
                            "value" => "4"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 1),
                            "value" => null
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ],
                    ]
                ]
            ]
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву задач / По команде и пользователям / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=5',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(5),
                            "value" => "По команде и пользователям"
                        ],
                        [
                            "selector" => Dashboard::member(),
                            "value" => "менеджеру"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => "4"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву задач / По команде и пользователям / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=5&member=author_id',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(5),
                            "value" => "По команде и пользователям"
                        ],
                        [
                            "selector" => Dashboard::member('author_id'),
                            "value" => "автору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => "6"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => "3"
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => "0"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву задач / По команде и пользователям / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=0&display=5&member=supervisor_id',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(0),
                            "value" => "По количеству задач"
                        ],
                        [
                            "selector" => Dashboard::display(5),
                            "value" => "По команде и пользователям"
                        ],
                        [
                            "selector" => Dashboard::member('supervisor_id'),
                            "value" => "супервизору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(2),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => "2"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(4),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => "0"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => "1"
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => "2"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(9),
                            "value" => "4"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву товаров / По команде, пользователям и типу / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=7',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(1),
                            "value" => "По количеству товаров"
                        ],
                        [
                            "selector" => Dashboard::display(7),
                            "value" => "По команде, пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member(),
                            "value" => "менеджеру"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => null
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву товаров / По команде, пользователям и типу / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=7&member=author_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(1),
                            "value" => "По количеству товаров"
                        ],
                        [
                            "selector" => Dashboard::display(7),
                            "value" => "По команде, пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member('author_id'),
                            "value" => "автору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(14, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 1),
                            "value" => null
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Общий дашборд По кол-ву товаров / По команде, пользователям и типу / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=7&member=supervisor_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(1),
                            "value" => "По количеству товаров"
                        ],
                        [
                            "selector" => Dashboard::display(7),
                            "value" => "По команде, пользователям и типу"
                        ],
                        [
                            "selector" => Dashboard::member('supervisor_id'),
                            "value" => "супервизору"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(8, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 2, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 2, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 1),
                            "value" => "10"
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 1),
                            "value" => "60"
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 1),
                            "value" => "30"
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => "20"
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 1),
                            "value" => null
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
