<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Не показываются заблоченные причины статуса 3',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='reasons[]']/option[1][@value]",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='reasons[]']/option[2][@value]",
                            "value" => "Нада"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='reasons[]']/option[3]",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Не показываются заблоченные причины статуса 7',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[1][@value=11]",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[2][@value=3]",
                            "value" => "Изменен приоритет задачи"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[3][@value=14]",
                            "value" => "Ожидает группировки"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[4][@value=4]",
                            "value" => "Ожидается загрузка товаров в систему"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[5][@value=1]",
                            "value" => "Ожидается загрузка фото в товары"
                        ],
                        [
                            "selector" => "//form[@id='reason-form-status-7']//select[@name='reasons[]']/option[6][@value=2]",
                            "value" => "Требуется уточнение информации по задаче"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='reasons[]']/option[7]",
                        ]
                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Не показываются заблоченные причины статуса 8',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='reasons[]']/option[1][@value='11']",
                            "value" => "Другое (описан в коментариях)"
                        ],
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='reasons[]']/option[2][@value='6']",
                            "value" => "Не получена запрошенная недостающая информация"
                        ],
                        [
                            "selector" => "//form[@id='complete-modal-form-8']//select[@name='reasons[]']/option[3][@value='7']",
                            "value" => "Товары ушли в ошибки"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//form[@id='reason-form-status-3']//select[@name='reasons[]']/option[4]",
                        ]
                    ]
                ]
            ]
        ]
    ],

];