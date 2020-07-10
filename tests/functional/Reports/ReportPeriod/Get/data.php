<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Cтраница отчётных периодов',
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
                            "selector" => "//a[@class='btn btn-success']",
                            "value" => "Добавить отчетный период"
                        ],
                    ],
                    "Список периодов" => [
                        [
                            "selector" => "//div[@class='list-view']",
                            "value" => "1. 2020-01-01 - 2020-12-31"
                        ],
                    ],
                    "Кнопка редактирования периода" => [
                        [
                            "selector" => "//div[@class='list-view']//a[@href='/bpm/report-period/update?id=1']",
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],
];
