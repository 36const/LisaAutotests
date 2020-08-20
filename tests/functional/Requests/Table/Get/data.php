<?php

use \lisa\Page\Functional\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Количество заявок на вкладке "Все" без фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => Request::onTab(Request::$tabs[0]),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Request::globalPath(),
                            "value" => "Все"
                        ],
                        [
                            "selector" => Request::globalCaption(),
                            "value" => "Все"
                        ],
                        [
                            "selector" => Request::tabCounter(Request::$tabs[0]),
                            "value" => 3
                        ]
                    ]
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Количество заявок на вкладке "Все" с фильтром',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => Request::onTab(Request::$tabs[0]),
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Request::globalPath(),
                            "value" => "Все"
                        ],
                        [
                            "selector" => Request::globalCaption(),
                            "value" => "Все"
                        ],
                        [
                            "selector" => Request::tabCounter(Request::$tabs[0]),
                            "value" => 3
                        ]
                    ]
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
