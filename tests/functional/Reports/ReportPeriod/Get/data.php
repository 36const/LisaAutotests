<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Страница отчётных периодов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Отчетные периоды"
                        ],
                    ],
                    "Кнопка добавления периода" => [
                        [
                            "selector" => "//a[@class='btn btn-success' and @href='/bpm/report-period/create']",
                            "value" => "Добавить отчетный период"
                        ],
                    ],

                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Начало отчетного периода"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конец отчетного периода"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "2020-01-31"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => null
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/report-period/update?id=1']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "2020-02-01"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2020-02-28"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => null
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/report-period/update?id=2']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "2020-03-01"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "2020-03-31"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-02-01"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => "2020-07-01 17:01:01"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/report-period/update?id=3']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "2020-04-01"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "2020-04-30"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-03-01"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => "2020-09-01 19:01:01"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/report-period/update?id=4']",
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
            'description' => 'Страница отчётных периодов с обратной сортировкой по id',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '?sort=-id',
            "pageObjects" => [
                "canSee" => [
                    "Заголовок" => [
                        [
                            "selector" => "//h1[@class='global-caption']",
                            "value" => "Отчетные периоды"
                        ],
                    ],
                    "Кнопка добавления периода" => [
                        [
                            "selector" => "//a[@class='btn btn-success' and @href='/bpm/report-period/create']",
                            "value" => "Добавить отчетный период"
                        ],
                    ],

                    "Заголовки" => [
                        [
                            "selector" => "//thead/tr/th[1]",
                            "value" => "ID"
                        ],
                        [
                            "selector" => "//thead/tr/th[2]",
                            "value" => "Начало отчетного периода"
                        ],
                        [
                            "selector" => "//thead/tr/th[3]",
                            "value" => "Конец отчетного периода"
                        ],
                        [
                            "selector" => "//thead/tr/th[4]",
                            "value" => "Дата создания"
                        ],
                        [
                            "selector" => "//thead/tr/th[5]",
                            "value" => "Дата обновления"
                        ],
                        [
                            "selector" => "//thead/tr/th[@class='action-column']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[4]/td[1]",
                            "value" => "1"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[2]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[3]",
                            "value" => "2020-01-31"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[4]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[5]",
                            "value" => null
                        ],
                        [
                            "selector" => "//tbody/tr[4]/td[6]/a[@href='/bpm/report-period/update?id=1']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[3]/td[1]",
                            "value" => "2"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[2]",
                            "value" => "2020-02-01"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[3]",
                            "value" => "2020-02-28"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[4]",
                            "value" => "2020-01-01"
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[5]",
                            "value" => null
                        ],
                        [
                            "selector" => "//tbody/tr[3]/td[6]/a[@href='/bpm/report-period/update?id=2']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[2]/td[1]",
                            "value" => "3"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[2]",
                            "value" => "2020-03-01"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[3]",
                            "value" => "2020-03-31"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[4]",
                            "value" => "2020-02-01"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[5]",
                            "value" => "2020-07-01 17:01:01"
                        ],
                        [
                            "selector" => "//tbody/tr[2]/td[6]/a[@href='/bpm/report-period/update?id=3']",
                        ],
                    ],
                    [
                        [
                            "selector" => "//tbody/tr[1]/td[1]",
                            "value" => "4"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[2]",
                            "value" => "2020-04-01"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[3]",
                            "value" => "2020-04-30"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[4]",
                            "value" => "2020-03-01"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[5]",
                            "value" => "2020-09-01 19:01:01"
                        ],
                        [
                            "selector" => "//tbody/tr[1]/td[6]/a[@href='/bpm/report-period/update?id=4']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],
];
