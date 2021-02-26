<?php

use lisa\Page\Requests\RequestView;

return [
    'case1' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам в шаблоне Розетка',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам в шаблоне Маркетплейс',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case2.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам в шаблоне Группировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case3.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам в шаблоне Работа с порталами, фат-меню, категориями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам в шаблоне Работа с проектированием структур + фильтрами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    "requests" => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests'],
                    "requests_fields" => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['requests_fields'],
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],

];
