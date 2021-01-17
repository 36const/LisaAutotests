<?php

use lisa\Page\Requests\Request;

return [
    'case1' => [
        'setting' => [
            'description' => 'Количество заявок в строке над таблицей, пагинация при прокрутке, переход на страницу',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects_1" => [
                "canSee" => [
                    Request::tableSummary('......'),
                    Request::tableFromTo('1-20')
                ],
                "cantSee" => [
                    Request::tableSummary(72),
                ],
            ],
            "pageObjects_2" => [
                "canSee" => [
                    Request::tablePage(1),
                    Request::tablePage(2),
                    Request::tablePage(3),
                    Request::tablePage(4),
                ],
                "cantSee" => [
                    Request::tablePage(5),
                ],
            ],
            "pageObjects_3" => [
                "canSee" => [
                    Request::tableSummary(72),
                    Request::tableFromTo('1-20')
                ],
                "cantSee" => [
                    Request::tableSummary('......')
                ],
            ],
            "pageObjects_4" => [
                "canSee" => [
                    Request::tableSummary('......'),
                    Request::tableFromTo('21-40')
                ],
                "cantSee" => [
                    Request::tableSummary(72),
                ],
            ],
            "pageObjects_5" => [
                "canSee" => [
                    Request::tableSummary(72),
                    Request::tableFromTo('21-40')
                ],
                "cantSee" => [
                    Request::tableSummary('......')
                ],
            ],
            "pageObjects_6" => [
                "canSee" => [
                    Request::tableSummary('......'),
                    Request::tableFromTo('61-72')
                ],
                "cantSee" => [
                    Request::tableSummary(72),
                ],
            ],
            "pageObjects_7" => [
                "canSee" => [
                    Request::tableSummary(72),
                    Request::tableFromTo('61-72')
                ],
                "cantSee" => [
                    Request::tableSummary('......')
                ],
            ],
        ]
    ],
];
