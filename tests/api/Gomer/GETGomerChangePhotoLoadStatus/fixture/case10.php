<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 9,
                "direction" => 2,
                "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                "category_id" => null,
                "seller_id" => 83,
                "team_direction" => 2,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];