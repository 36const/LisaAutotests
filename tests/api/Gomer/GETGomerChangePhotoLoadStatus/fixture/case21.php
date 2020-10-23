<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 6,
                "status" => 6,
                "direction" => 2,
                "category_id" => null,
                "seller_id" => 83,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];