<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 4,
                "status" => 4,
                "direction" => 0,
                "category_id" => 1,
                "seller_id" => 83,
                "photo_load_status" => 0
            ],
        ],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];