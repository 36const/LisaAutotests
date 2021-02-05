<?php

use lisa\Page\Reports\Dashboard;

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
                            "value" => null
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => 2
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(4, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => 1
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
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => 2
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
                            "value" => 1
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
                            "value" => 1
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
                        [
                            "selector" => Dashboard::activeManagersColumn(8),
                            "value" => 4
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 0),
                            "value" => 2
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 0
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(13, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(13, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(13, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(13, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(13),
                            "value" => 4
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => 90
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
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => 20
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => 30
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
                            "value" => 10
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
                            "value" => 4
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 0
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => 80
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => 10
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
                            "value" => 80
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(6, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(6, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(6),
                            "value" => 4
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(2, 2, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => 110
                        ],
                        [
                            "selector" => Dashboard::common(2, 5, 1),
                            "value" => 10
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => 80
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => 10
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
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => 30
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => 10
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
                            "value" => 110
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
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => 3
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(1, 1, 1),
                            "value" => 10
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(1, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 6, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 7, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 1),
                            "value" => 30
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => 2
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
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => 20
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
                            "value" => 30
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
                            "value" => 30
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => 80
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
                            "value" => 80
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => 1
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 1),
                            "value" => 10
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
                            "value" => 2
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => 1
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
                            "value" => 20
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => 10
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
                            "value" => 110
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
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => 3
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 2
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 0),
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 1, 1),
                            "value" => 10
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
                            "value" => 60
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
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => 60
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => 2
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => 20
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => 80
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => 10
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
                            "value" => 80
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => 1
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => 10
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
                            "value" => 2
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
                            "value" => 20
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => 3
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(9, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(9, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 0),
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => 1
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
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(14, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(14, 6, 0),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(14, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 0),
                            "value" => 3
                        ],
                    ],
                ],
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
                            "value" => 2
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 0),
                            "value" => null
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 0),
                            "value" => null
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
                    [
                        [
                            "selector" => Dashboard::common(15, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 4, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(15, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(15, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(16, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(16, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(17, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(17, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(18, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 7, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(18, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(19, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 2, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(19, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(20, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 3, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(20, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(21, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(21, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(21, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(21, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(21, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(21, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(21, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(21, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(21, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(21, 9, 0),
                            "value" => 3
                        ],
                    ],
                ],
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => 2
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => 2
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 0),
                            "value" => null
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 0),
                            "value" => null
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
                    [
                        [
                            "selector" => Dashboard::common(15, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(15, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 4, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 6, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(16, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(16, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(16, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(16, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(16, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(16, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(16, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(16, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(16, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(16, 9, 0),
                            "value" => 3
                        ],
                    ],
                ],
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
                            "value" => 20
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 1),
                            "value" => 20
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 0
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 1),
                            "value" => 80
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 1),
                            "value" => 10
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
                            "value" => 80
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => 90
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
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(6, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(6, 9, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(6),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => 4
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
            "url" => '?type=3&display=6&show_all=1',
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
                            "value" => 1
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(1, 0, 1),
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 1),
                            "value" => 10
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
                            "value" => 2
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
                            "value" => 20
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
                            "value" => 1
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
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(7, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(8),
                            "value" => 0
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => 80
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
                            "value" => 80
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 3, 1),
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(11, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 1),
                            "value" => 10
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
                            "value" => 110
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(12, 9, 1),
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 0),
                            "value" => 1
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
                            "selector" => Dashboard::common(13, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => 10
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
                            "selector" => Dashboard::common(14, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 0),
                            "value" => 2
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 0),
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(14, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 1),
                            "value" => 60
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 1),
                            "value" => 60
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(15),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(16),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(17),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(18),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(19),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(20),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(21),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(22),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(23),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(24),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(25),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(26),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(27),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::activeManagersColumn(28),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(29, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(29, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(29, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(29, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(29, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(29, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(29, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(29, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(29, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(29, 9, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(29),
                            "value" => 4
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(29, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(29, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(29, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(29, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(29, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(29, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(29, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(29, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(29, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(29, 9, 1),
                            "value" => 140
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 9, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(1),
                            "value" => 2
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 2, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 3, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 4, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 1, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(4, 2, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(4, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(4, 4, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(4, 5, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(4, 9, 0),
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => 4
                        ],
                    ],
                ],
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 0),
                            "value" => 1
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
                            "value" => 0
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(2, 3, 0),
                            "value" => 1
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 6, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 7, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(3, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(3, 9, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(3),
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => 2
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
                            "value" => 1
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
                            "value" => 1
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(5, 0, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 1, 0),
                            "value" => 2
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 6, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 7, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 9, 0),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(6, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 2, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::common(7, 1, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(7, 2, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::common(7, 3, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(7, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(7, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => 0
                        ],
                    ],
                ],
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
                            "value" => 2
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
                            "value" => 0
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(2, 0, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(3, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(3, 1, 0),
                            "value" => 2
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
                            "value" => 2
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(4, 0, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 0
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(5, 3, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 4, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(5, 5, 0),
                            "value" => 1
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(5),
                            "value" => 0
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(6, 3, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(7, 8, 0),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(7, 9, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(7),
                            "value" => 0
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
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 0),
                            "value" => 1
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
                            "value" => 1
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
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 0),
                            "value" => 4
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 6, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 7, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::common(9, 8, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::common(9, 9, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::activeManagersColumn(9),
                            "value" => 4
                        ],
                    ],
                ],
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(2, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(2, 9, 1),
                            "value" => 30
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
                            "value" => 110
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(5, 2, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(10, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 1, 1),
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(11, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 4, 1),
                            "value" => 80
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
                            "value" => 80
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 5, 1),
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(14, 0, 1),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(14, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(14, 6, 1),
                            "value" => 0
                        ],
                        [
                            "selector" => Dashboard::common(14, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(14, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(1, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(1, 4, 1),
                            "value" => 80
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
                            "value" => 80
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 20
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 5, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(8, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 9, 1),
                            "value" => 30
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(9, 0, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => null
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
                            "value" => 30
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
                            "value" => 30
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(12, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 1),
                            "value" => null
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
                            "value" => null
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
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 1),
                            "value" => null
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
                    [
                        [
                            "selector" => Dashboard::common(15, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 4, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(15, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(15, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(16, 0, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(16, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(16, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(17, 0, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(17, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(17, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(18, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 7, 1),
                            "value" => 110
                        ],
                        [
                            "selector" => Dashboard::common(18, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(18, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(19, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 2, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(19, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(19, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(20, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(20, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(20, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(21, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(21, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(21, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(21, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(21, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(21, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(21, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(21, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(21, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(21, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 20
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
                            "selector" => Dashboard::common(6, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(6, 1, 1),
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 10
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
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(8, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(8, 4, 1),
                            "value" => 80
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
                            "value" => 80
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(9, 5, 1),
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(10, 3, 1),
                            "value" => 10
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(11, 2, 1),
                            "value" => 10
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
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(12, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(12, 3, 1),
                            "value" => null
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
                            "value" => 110
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
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 4, 1),
                            "value" => 60
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(13, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(13, 9, 1),
                            "value" => 60
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(14, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 3, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(14, 4, 1),
                            "value" => 30
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
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(14, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(15, 0, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 1, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 2, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 3, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(15, 4, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 5, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 6, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 7, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 8, 1),
                            "value" => null
                        ],
                        [
                            "selector" => Dashboard::common(15, 9, 1),
                            "value" => null
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::common(16, 0, 1),
                            "value" => 60
                        ],
                        [
                            "selector" => Dashboard::common(16, 1, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(16, 2, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(16, 3, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(16, 4, 1),
                            "value" => 170
                        ],
                        [
                            "selector" => Dashboard::common(16, 5, 1),
                            "value" => 10
                        ],
                        [
                            "selector" => Dashboard::common(16, 6, 1),
                            "value" => 20
                        ],
                        [
                            "selector" => Dashboard::common(16, 7, 1),
                            "value" => 140
                        ],
                        [
                            "selector" => Dashboard::common(16, 8, 1),
                            "value" => 30
                        ],
                        [
                            "selector" => Dashboard::common(16, 9, 1),
                            "value" => 140
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case17' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=1',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(1),
                            "value" => "По направлению"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 1),
                            "value" => '2020-01-11 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-01-11')
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 0, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 1, 12),
                            "value" => '2020-03-12 12'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 0, 1, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(2),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 0, 0, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 0, 1, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(3),
                            "value" => Dashboard::commonDateLegValue('2020-01-14')
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 0, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 1, 15),
                            "value" => '2020-03-15 15'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 2, 0, 4),
                            "value" => '2020-06-04 4'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 2, 1, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(5, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 1, 1, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case18' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По направлению и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(0),
                            "value" => "По направлению и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-01-11')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 6, 0, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 1, 12),
                            "value" => '2020-03-12 12'
                        ],

                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 0, 0, 1),
                            "value" => '2020-02-01 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 0, 1, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(3),
                            "value" => Dashboard::commonDateLegValue('2020-02-01')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 1, 1, 8),
                            "value" => '2020-05-08 8'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(5, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 0, 1, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(5),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(6, 0, 0, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 0, 1, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(6),
                            "value" => Dashboard::commonDateLegValue('2020-02-10')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(7, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(8, 1, 0, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(8, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(9, 0, 0, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDate(9, 0, 1, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(9),
                            "value" => Dashboard::commonDateLegValue('2020-01-14')
                        ],
                        [
                            "selector" => Dashboard::commonDate(9, 6, 0, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDate(9, 6, 1, 15),
                            "value" => '2020-03-15 15'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(10, 2, 0, 4),
                            "value" => '2020-06-04 4'
                        ],
                        [
                            "selector" => Dashboard::commonDate(10, 2, 1, 17),
                            "value" => '2020-06-17 17'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(11, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(11, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(12, 2, 0, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(12, 2, 1, 19),
                            "value" => '2020-06-19 19'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(13, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(13, 1, 1, 3),
                            "value" => '2020-05-03 3'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(14, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(14, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case19' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По пользователям / По менеджеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=3',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member(),
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 1, 1, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 1, 1, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 2, 0, 4),
                            "value" => '2020-06-04 4'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 2, 1, 4),
                            "value" => '2020-06-04 4'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 1, 0, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 2, 0, 17),
                            "value" => '2020-06-17 17'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 2, 1, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case20' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По пользователям / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=3&member=author_id&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member("author_id"),
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 1),
                            "value" => '2020-02-01 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 1, 0, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 0, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 1, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-02-01')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 0, 0, 10),
                            "value" => '2020-01-14 10'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 0, 1, 14),
                            "value" => '2020-02-10 14'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(2),
                            "value" => Dashboard::commonDateLegValue('2020-01-14')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 2, 0, 4),
                            "value" => '2020-06-04 4'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 2, 1, 4),
                            "value" => '2020-06-04 4'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(5, 2, 0, 17),
                            "value" => '2020-06-17 17'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 2, 1, 17),
                            "value" => '2020-06-17 17'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(6, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 1, 1, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 6, 0, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 6, 1, 12),
                            "value" => '2020-03-12 12'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(7, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 0, 1, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 2, 0, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 2, 1, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(7),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case21' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По пользователям / По супервайзеру с фильтром',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=3&member=supervisor_id&username=Начальник',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member("supervisor_id"),
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 1),
                            "value" => '2020-02-01 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-02-01')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 0, 1, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 0, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 1, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(2),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case22' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По команде',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=2',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(2),
                            "value" => "По командам"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-01-11')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 0, 1, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(2),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 0, 12),
                            "value" => '2020-03-12 12'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 6, 1, 12),
                            "value" => '2020-03-12 12'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 0, 0, 1),
                            "value" => '2020-02-01 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 0, 1, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(3),
                            "value" => Dashboard::commonDateLegValue('2020-02-01')
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 0, 0, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 0, 1, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 6, 0, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 6, 1, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(4),
                            "value" => Dashboard::commonDateLegValue('2020-01-14')
                        ],
                    ],
                    [
                        //рандомно иногда не находит эти два значения, почему - неизвестно
//                        [
//                            "selector" => Dashboard::commonDate(5, 2, 0, 19),
//                            "value" => '2020-06-19 19'
//                        ],
//                        [
//                            "selector" => Dashboard::commonDate(5, 2, 1, 19),
//                            "value" => '2020-06-19 19'
//                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(6, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 1, 1, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case23' => [
        'setting' => [
            'description' => 'Общий дашборд По датам / По команде и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=2&display=6',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::type(2),
                            "value" => "По датам"
                        ],
                        [
                            "selector" => Dashboard::display(6),
                            "value" => "По команде и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(1, 0, 0, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDate(1, 0, 1, 11),
                            "value" => '2020-01-11 11'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(1),
                            "value" => Dashboard::commonDateLegValue('2020-01-11')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(2, 0, 0, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDate(2, 0, 1, 13),
                            "value" => '2020-02-13 13'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(2),
                            "value" => Dashboard::commonDateLegValue('2020-02-13')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(3, 0, 0, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 0, 1, 9),
                            "value" => '2020-01-09 9'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(3),
                            "value" => Dashboard::commonDateLegValue('2020-01-09')
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 0, 12),
                            "value" => '2020-03-12 12	'
                        ],
                        [
                            "selector" => Dashboard::commonDate(3, 6, 1, 12),
                            "value" => '2020-03-12 12	'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(4, 1, 0, 8),
                            "value" => '2020-05-08 8'
                        ],
                        [
                            "selector" => Dashboard::commonDate(4, 1, 1, 8),
                            "value" => '2020-05-08 8'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(5, 0, 0, 1),
                            "value" => '2020-02-01 1'
                        ],
                        [
                            "selector" => Dashboard::commonDate(5, 0, 1, 10),
                            "value" => '2020-02-10 10'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(5),
                            "value" => Dashboard::commonDateLegValue('2020-02-01')
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(6, 6, 0, 2),
                            "value" => '2020-03-02 2'
                        ],
                        [
                            "selector" => Dashboard::commonDate(6, 6, 1, 2),
                            "value" => '2020-03-02 2'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(7, 1, 0, 16),
                            "value" => '2020-05-16 16'
                        ],
                        [
                            "selector" => Dashboard::commonDate(7, 1, 1, 16),
                            "value" => '2020-05-16 16'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(8, 0, 0, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDate(8, 0, 1, 14),
                            "value" => '2020-01-14 14'
                        ],
                        [
                            "selector" => Dashboard::commonDateLeg(8),
                            "value" => Dashboard::commonDateLegValue('2020-01-14')
                        ],
                        [
                            "selector" => Dashboard::commonDate(8, 6, 0, 15),
                            "value" => '2020-03-15 15'
                        ],
                        [
                            "selector" => Dashboard::commonDate(8, 6, 1, 15),
                            "value" => '2020-03-15 15'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(9, 2, 0, 4),
                            "value" => '2020-06-04 4'
                        ],
                        [
                            "selector" => Dashboard::commonDate(9, 2, 1, 17),
                            "value" => '2020-06-17 17'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(10, 3, 0, 5),
                            "value" => '2020-07-05 5'
                        ],
                        [
                            "selector" => Dashboard::commonDate(10, 3, 1, 5),
                            "value" => '2020-07-05 5'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(11, 2, 0, 19),
                            "value" => '2020-06-19 19'
                        ],
                        [
                            "selector" => Dashboard::commonDate(11, 2, 1, 19),
                            "value" => '2020-06-19 19'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(12, 1, 0, 3),
                            "value" => '2020-05-03 3'
                        ],
                        [
                            "selector" => Dashboard::commonDate(12, 1, 1, 3),
                            "value" => '2020-05-03 3'
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::commonDate(13, 3, 0, 21),
                            "value" => '2020-07-21 21'
                        ],
                        [
                            "selector" => Dashboard::commonDate(13, 3, 1, 21),
                            "value" => '2020-07-21 21'
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => Dashboard::member(),
                        ]
                    ]
                ]
            ]
        ]
    ],

];
