<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница выгрузки отчёта',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Выгрузка отчeтов"
                        ],
                    ],
                    "Кнопка перехода в раздел зафиксированных данных по СВ" => [
                        [
                            "selector" => "//div[@class='report-for-statistic col-md-5']//a[@href='/bpm/report/fixate']",
                        ],
                    ],
                    "Список периодов" => [
                        [
                            "selector" => "//select[@name='Report[report_period_id]']",
                        ],
                    ],
                    "Пункт 'Отчёт по супервизорам'" => [
                        [
                            "selector" => "//div[@id='report-user_field']//input[@value='supervisor_id']",
                        ],
                    ],
                    "Пункт 'Отчёт по исполнителям'" => [
                        [
                            "selector" => "//div[@id='report-user_field']//input[@checked='checked']",
                        ],
                    ],
                    "Пункт 'Тип отчёта детальный'" => [
                        [
                            "selector" => "//div[@id='report-type']//input[@checked='checked']",
                        ],
                    ],
                    "Пункт 'Тип отчёта сводный'" => [
                        [
                            "selector" => "//div[@id='report-type']//input[@value='1']",
                        ],
                    ],
                    "Список шаблонов" => [
                        [
                            "selector" => "//select[@id='report-detail_ids' and @size='1']//option[@value='1' and text()='Всё во всём']",
                        ],
                    ],
                    "Кнопка генерации отчёта" => [
                        [
                            "selector" => "//button[@class='btn btn-primary']",
                            "value" => "Сгенерировать отчет"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],
];
