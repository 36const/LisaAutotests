<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 7,
                "direction" => 2,
                "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                "category_id" => null,
                "seller_id" => 83,
                "team_direction" => 2,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => [],
        "reasons" => [
            [
                //"id" => 1,
                "child_status" => 7,
                "reason" => "Ожидается загрузка фото в товары",
                "status" => 1
            ],
            [
                //"id" => 2,
                "child_status" => 7,
                "reason" => "Требуется уточнение информации по задаче",
                "status" => 1
            ],
        ],
        'requests_reasons' => [
            [
                "request_id" => 1,
                "reason_id" => 1
            ]
        ],
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];