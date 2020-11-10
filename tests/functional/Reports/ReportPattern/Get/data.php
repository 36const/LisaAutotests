<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница шаблонов отчётов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Название отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Тип отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Всё во всём"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/view?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/update?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/delete?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Детальный отчет по работе контент-менеджеров команды Проектирование структур + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/view?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/update?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/delete?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/view?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/update?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/delete?id=3']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Сводный отчет по работе контент-менеджеров команды Проектирование структур + фильтры (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/delete?id=4']",
                        ],
                    ],
                    "5" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Сводный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/delete?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Страница шаблонов отчётов с обратной сортировкой по названию',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-title',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Название отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Тип отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Всё во всём"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/view?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/update?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/delete?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Детальный отчет по работе контент-менеджеров команды Проектирование структур + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/view?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/update?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/delete?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/view?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/update?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/delete?id=3']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Сводный отчет по работе контент-менеджеров команды Проектирование структур + фильтры (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/delete?id=4']",
                        ],
                    ],
                    "5" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Сводный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/delete?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница шаблонов отчётов с обратной сортировкой по типу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-type',
            "pageObjects" => [
                "canSee" => [
                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "Название отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Тип отчета"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Действия"
                        ],
                    ],
                    "1" => [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "Всё во всём"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/view?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/update?id=1']",
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]/a[@href='/bpm/report/delete?id=1']",
                        ],
                    ],
                    "2" => [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "Детальный отчет по работе контент-менеджеров команды Проектирование структур + фильтры"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/view?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/update?id=2']",
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]/a[@href='/bpm/report/delete?id=2']",
                        ],
                    ],
                    "3" => [
                        [
                            "selector" => "//tbody/tr[5]/td[1]",
                            "value" => "Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео"
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[2]",
                            "value" => 'Детальный'
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/view?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/update?id=3']",
                        ],
                        [
                            "selector" => "//tbody/tr[5]/td[3]/a[@href='/bpm/report/delete?id=3']",
                        ],
                    ],
                    "4" => [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "Сводный отчет по работе контент-менеджеров команды Проектирование структур + фильтры (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/view?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/update?id=4']",
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]/a[@href='/bpm/report/delete?id=4']",
                        ],
                    ],
                    "5" => [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "Сводный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео (сводный)"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => 'Сводный'
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/view?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/update?id=5']",
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]/a[@href='/bpm/report/delete?id=5']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
