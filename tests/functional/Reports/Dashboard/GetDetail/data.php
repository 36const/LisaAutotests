<?php

use lisa\Page\Reports\Dashboard;

return [
    'case1' => [
        'setting' => [
            'description' => 'Детальный дашборд по-умолчанию',
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
                            "selector" => Dashboard::status('Новые'),
                            "value" => "Новые"
                        ],
                        [
                            "selector" => Dashboard::display(0),
                            "value" => "По направлению и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(5, 0, 0),
                            "value" => 6
                        ],
                        [
                            "selector" => Dashboard::detail(5, 0, 1),
                            "value" => 60
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Детальный дашборд Ожидают взятия в работу / По направлению',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Ожидают взятия в работу&display=1&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Ожидают взятия в работу'),
                            "value" => "Ожидают взятия в работу"
                        ],
                        [
                            "selector" => Dashboard::display(1),
                            "value" => "По направлению"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 30
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
            'description' => 'Детальный дашборд В работе / По пользователям / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=В работе&display=3&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('В работе'),
                            "value" => "В работе"
                        ],
                        [
                            "selector" => Dashboard::display(3),
                            "value" => "По пользователям"
                        ],
                        [
                            "selector" => Dashboard::member(),
                            "value" => "менеджеру"
                        ]
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Детальный дашборд В работе / По пользователям / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=В работе&display=3&member=author_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('В работе'),
                            "value" => "В работе"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Детальный дашборд В работе / По пользователям / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=В работе&display=3&member=supervisor_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('В работе'),
                            "value" => "В работе"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Детальный дашборд На доработке / По пользователям и типу / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=На доработке&display=4&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('На доработке'),
                            "value" => "На доработке"
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
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Детальный дашборд На доработке / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=На доработке&display=4&member=author_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('На доработке'),
                            "value" => "На доработке"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Детальный дашборд На доработке / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=На доработке&display=4&member=supervisor_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('На доработке'),
                            "value" => "На доработке"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Детальный дашборд Ожидают / По командам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Ожидают&display=2&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Ожидают'),
                            "value" => "Ожидают"
                        ],
                        [
                            "selector" => Dashboard::display(2),
                            "value" => "По командам"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 20
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
            'description' => 'Детальный дашборд Ожидают / По команде и типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Ожидают&display=6&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Ожидают'),
                            "value" => "Ожидают"
                        ],
                        [
                            "selector" => Dashboard::display(6),
                            "value" => "По команде и типу"
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 20
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
            'description' => 'Детальный дашборд Выполнены / По команде и пользователям / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Выполнены&display=5&date=' . date('Y-m-d'),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Выполнены'),
                            "value" => "Выполнены"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Детальный дашборд Выполнены / По команде и пользователям / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Выполнены&display=5&member=author_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Выполнены'),
                            "value" => "Выполнены"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(5, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(5, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Детальный дашборд Выполнены / По команде и пользователям / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Выполнены&display=5&member=supervisor_id&date=' . date('Y-m-d') . '&username=',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Выполнены'),
                            "value" => "Выполнены"
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
                            "selector" => Dashboard::detail(1, 0, 0),
                        ],
                        [
                            "selector" => Dashboard::detail(1, 0, 1),
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(2, 0, 0),
                            "value" => 2
                        ],
                        [
                            "selector" => Dashboard::detail(2, 0, 1),
                            "value" => 20
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(3, 0, 0),
                            "value" => 1
                        ],
                        [
                            "selector" => Dashboard::detail(3, 0, 1),
                            "value" => 10
                        ],
                    ],
                    [
                        [
                            "selector" => Dashboard::detail(4, 0, 0),
                            "value" => 3
                        ],
                        [
                            "selector" => Dashboard::detail(4, 0, 1),
                            "value" => 30
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Детальный дашборд Закрыты (проверены) / По команде, пользователям и типу / По менеджеру (по-умолчанию)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Закрыты (проверены)&display=7',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Закрыты (проверены)'),
                            "value" => "Закрыты (проверены)"
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
                ],
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Детальный дашборд Закрыты (проверены) / По команде, пользователям и типу / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Закрыты (проверены)&display=7&member=author_id',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Закрыты (проверены)'),
                            "value" => "Закрыты (проверены)"
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
                ],
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Детальный дашборд Закрыты (проверены) / По команде, пользователям и типу / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?status=Закрыты (проверены)&display=7&member=supervisor_id',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Дашборды"
                        ],
                        [
                            "selector" => Dashboard::status('Закрыты (проверены)'),
                            "value" => "Закрыты (проверены)"
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
                ],
            ]
        ]
    ],

];
