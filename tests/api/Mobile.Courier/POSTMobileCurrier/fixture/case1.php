<?php
return [
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ],
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "categories" => [
            [
                //"id" => 1,
                "title" => "Авиабилеты",
                "difficulty" => 2,
                "supervisor_id" => 6,
                "status" => 1
            ],
            [
                //"id" => 2,
                "title" => "Видео к товару",
                "difficulty" => 3,
                "supervisor_id" => 10,
                "status" => 1
            ],
            [
                //"id" => 3,
                "title" => "Внесение изменений на основе запроса из MobileCourier",
                "difficulty" => 4,
                "supervisor_id" => 6,
                "status" => 0
            ],
        ],
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
    ],
];