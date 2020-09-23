<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Пустой список фильтров на странице заявок',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '/bpm/request',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[1]/a[@href='/bpm/filter/set-filters']",
                            "value" => "Очистить фильтр"
                        ],
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[2][@class='divider']",
                        ]
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[3]",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Список фильтров без применённого фильтра',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => '/bpm/request',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[1]/a[@href='/bpm/filter/set-filters']",
                            "value" => "Очистить фильтр"
                        ],
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[2][@class='divider']",
                        ],
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[3]/a[@href='/bpm/filter/set-filters?filterId=1']",
                            "value" => "Фильтр1"
                        ],
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[4]/a[@href='/bpm/filter/set-filters?filterId=2']",
                            "value" => "Фильтр2"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//div[@class='dropdown']//ul[@id='w1']/li[5]",
                        ]
                    ]
                ]
            ]
        ]
    ],


];
