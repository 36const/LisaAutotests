<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                //'id' => 1,
                "type_id" => 1,
                "status" => 3,
                "direction" => 2,
                "seller_id" => 83,
                "reason" => "Euromart",
            ],
        ],
        'reasons' => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        'requests_reasons' => [
            [
                'request_id' => 1,
                'reason_id' => 13,
            ]
        ],
    ],
];