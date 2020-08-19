<?php

use \lisa\Page\Functional\Dashboard;

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница общего дашборда по-умолчанию',
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
            'description' => 'Страница общего дашборда По кол-ву товаров / По направлению',
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
            'description' => 'Страница общего дашборда Общий / По пользователям / По менеджеру (по-умолчанию)',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница общего дашборда Общий / По пользователям / По автору',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница общего дашборда Общий / По пользователям / По супервайзеру',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву задач / По пользователям и типу / По менеджеру (по-умолчанию)',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву задач / По пользователям и типу / По автору',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву задач / По пользователям и типу / По супервайзеру',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву товаров / По командам',
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
            'description' => 'Страница общего дашборда Общий / По команде и типу',
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
            'description' => 'Страница общего дашборда По кол-ву задач / По команде и пользователям / По менеджеру (по-умолчанию)',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case12' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву задач / По команде и пользователям / По автору',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case13' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву задач / По команде и пользователям / По супервайзеру',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case14' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву товаров / По команде, пользователям и типу / По менеджеру (по-умолчанию)',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case15' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву товаров / По команде, пользователям и типу / По автору',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=7&member=author_id',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case16' => [
        'setting' => [
            'description' => 'Страница общего дашборда По кол-ву товаров / По команде, пользователям и типу / По супервайзеру',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?type=1&display=7&member=supervisor_id',
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
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
