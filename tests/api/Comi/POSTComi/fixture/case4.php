<?php
return [
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
                "id" => 437,
                "title" => "Внесение данных в товар по замерам со склада",
                "difficulty" => 1,
                "supervisor_id" => 23,
                "status" => 1
            ],
        ],
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ],
];