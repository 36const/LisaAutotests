<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 2,
                "status" => 2,
                "direction" => 1,
                "category_id" => 1,
                "seller_id" => null,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];