<?php

return [
    "lisa_fixtures" => [
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => [
            [
                "owox_id" => 0,
                "supervisor_id" => 5
            ],
            [
                "owox_id" => 5,
                "supervisor_id" => 6
            ],
            [
                "owox_id" => 83,
                "supervisor_id" => 6
            ],
            [
                "owox_id" => 9423,
                "supervisor_id" => 10
            ],
            [
                "owox_id" => 67757,
                "supervisor_id" => 10
            ],
        ],
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];