<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 6,
                "direction" => 2,
                "subject" => "Добавление новых товаров (Работа с товарами Маркета)",
                "category_id" => null,
                "seller_id" => 83,
                "team_direction" => 2,
                "photo_load_status" => 1,
                "last_change_status_date" => "2020-01-01 00:00:01",
            ],
        ],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];