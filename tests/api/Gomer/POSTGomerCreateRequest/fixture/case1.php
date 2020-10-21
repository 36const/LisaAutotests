<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];