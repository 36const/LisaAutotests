<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Кнопка создания заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '/bpm/request/index',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//header[@class='main-header']//a[@href='/bpm/request/index']"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Кнопка создания связанной заявки (конт. меню)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//ul[@class='dropdown-menu']//*",
                            "value" => "  Создать подзадачу"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Кнопка создания связанной заявки (заявка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='col-md-12']//*",
                            "value" => "  Создать подзадачу"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Кнопка пакетного редактирования',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*",
                            "value" => " Пакетное редактирование"
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Кнопка пакетного редактирования',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "url" => '/bpm/request/new',
            "pageObjects" => [
                "canSee" => [
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='buttons-background']//*",
                            "value" => " Пакетное редактирование"
                        ]
                    ]
                ]
            ]
        ]
    ],

];
