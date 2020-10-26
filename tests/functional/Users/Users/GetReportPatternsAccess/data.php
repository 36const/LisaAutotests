<?php

use lisa\Page\Functional\Report;

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для менеджера Маркетплейса',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(3, 'Детальный отчет по ошибкам контент-менеджеров команды Маркетплейс')],
                        ["selector" => Report::patternsList(3, 'Детальный отчет по работе контент-менеджеров  с товарами маркетплейс ')],
                        ["selector" => Report::patternsList(3, 'Детальный отчет по супервайзерам по работе с товарами маркетплейс')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],

                        //Пункты 'Отчёт по супервизорам / Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']"],

                    ]
            ]
        ]
    ]
],

    'case2' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для супервайзера Розетки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Отчёт по супервизорам'
                        ["selector" => "//div[@id='report-user_field']//input[@value='supervisor_id' and not(@checked='checked')]"],

                        //Пункт 'Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']//input[@value='manager_id' and @checked='checked']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(2, 'Детальный отчет по работе контент-менеджеров  с товарами Rozetka')],
                        ["selector" => Report::patternsList(2, 'Детальный отчет по супервайзерам по работе с товарами Rozetka ')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],

                    ]
                ]
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для менеджера группировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(2, 'Детальный отчет по работе контент-менеджеров команды Группировка товаров')],
                        ["selector" => Report::patternsList(2, 'Детальный отчет по супервайзерам команды Группировка товаров')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],

                        //Пункты 'Отчёт по супервизорам / Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']"],

                    ]
                ]
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для супервайзера проектировки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Отчёт по супервизорам'
                        ["selector" => "//div[@id='report-user_field']//input[@value='supervisor_id' and not(@checked='checked')]"],

                        //Пункт 'Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']//input[@value='manager_id' and @checked='checked']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(2, 'Детальный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры')],
                        ["selector" => Report::patternsList(2, 'Детальный отчет по работе  супервайзеров команды Проектирование структур + фильтры')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],

                    ]
                ]
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для менеджера фат-меню/категорий',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(3, 'Детальный отчет по контент-менеджерам по работе с порталами, фат-меню, категориями')],
                        ["selector" => Report::patternsList(3, 'Детальный отчет по работе контент-менеджера по добавлению видео')],
                        ["selector" => Report::patternsList(3, 'Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],

                        //Пункты 'Отчёт по супервизорам / Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']"],

                    ]
                ]
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Страница выгрузки отчёта для руководителя СВ',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],

                        //Список периодов
                        ["selector" => "//select[@name='Report[report_period_id]']"],

                        //Пункт 'Отчёт по супервизорам'
                        ["selector" => "//div[@id='report-user_field']//input[@value='supervisor_id' and not(@checked='checked')]"],

                        //Пункт 'Отчёт по исполнителям'
                        ["selector" => "//div[@id='report-user_field']//input[@value='manager_id' and @checked='checked']"],

                        //Пункт 'Тип отчёта детальный'
                        ["selector" => "//div[@id='report-type']//input[@value='0' and @checked='checked']"],

                        //Пункт 'Тип отчёта сводный'
                        ["selector" => "//div[@id='report-type']//input[@value='1' and not(@checked='checked')]"],

                        //Список шаблонов
                        ["selector" => Report::patternsList(12, 'Детальный отчет по контент-менеджерам по работе с порталами, фат-меню, категориями')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по ошибкам контент-менеджеров команды Маркетплейс')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе контент-менеджера по добавлению видео')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе контент-менеджеров команды Группировка товаров')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе контент-менеджеров  с товарами Rozetka')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе контент-менеджеров  с товарами маркетплейс ')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по работе  супервайзеров команды Проектирование структур + фильтры')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по супервайзерам команды Группировка товаров')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по супервайзерам по работе с товарами Rozetka ')],
                        ["selector" => Report::patternsList(12, 'Детальный отчет по супервайзерам по работе с товарами маркетплейс')],

                        //Кнопка генерации отчёта
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],

                    ]
                ],
                "cantSee" => [
                    [
                        //Кнопка перехода в раздел зафиксированных данных по СВ
                        ["selector" => "//a[@href='/bpm/report/fixate']"],
                    ]
                ]
            ]
        ]
    ],

];
