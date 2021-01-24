<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => []
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];