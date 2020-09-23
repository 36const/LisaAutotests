<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Список приоритетов в алфавитном порядке на странице создания заявки + не показываются заблоченные',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => 'bpm/request/create-by-type?typeId=1&direction=2',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[priority]']/option[1][@value]",
                            "value" => "Выберите приоритет"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[2][@value='4']",
                            "value" => "Группировка топовых позиций"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[3][@value='5']",
                            "value" => "Жалоба клиента (в соц сети, в КЦ, в магазине, руководству)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[4][@value='3']",
                            "value" => "Значение (не использовать) в фильтре на сайте (и в карточках товаров)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[5][@value='1']",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[6][@value='7']",
                            "value" => "Приоритетный продавец (ТОП)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[7][@value='6']",
                            "value" => "Сезонные товары"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[8][@value='2']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                ],
                "cantSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[priority]']//*",
                            "value" => "Неправильные/Битые ссылки (порталы и фат-меню)"
                        ]
                    ],
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Список приоритетов в алфавитном порядке на странице заявки + показываются заблоченные',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "url" => 'bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='Request[priority]']/option[1][@value]",
                            "value" => "не указан"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[2][@value='4']",
                            "value" => "Группировка топовых позиций"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[3][@value='5']",
                            "value" => "Жалоба клиента (в соц сети, в КЦ, в магазине, руководству)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[4][@value='3']",
                            "value" => "Значение (не использовать) в фильтре на сайте (и в карточках товаров)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[5][@value='1']",
                            "value" => "Информация необходима для склада"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[6][@value='8'][@disabled]",
                            "value" => "Неправильные/Битые ссылки (порталы и фат-меню)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[7][@value='7']",
                            "value" => "Приоритетный продавец (ТОП)"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[8][@value='6']",
                            "value" => "Сезонные товары"
                        ],
                        [
                            "selector" => "//select[@name='Request[priority]']/option[9][@value='2']",
                            "value" => "Товар-новинка/эксклюзив (трафикообразующий)"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
