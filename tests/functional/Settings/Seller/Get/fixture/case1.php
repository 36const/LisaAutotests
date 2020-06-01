<?php

return [
    "lisa_fixtures" => [
        "filters" => [],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-07-01 00:00:00',
                "end" => '2020-12-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];