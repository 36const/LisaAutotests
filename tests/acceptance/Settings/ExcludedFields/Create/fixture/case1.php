<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        'requests_fields' => [],
        "observers" => [],
        "request_errors" => [],
        "user_notifications" => [],
        'notification_settings' => [],
        "request_status_history" => [],
        "excluded_fields" => [
            [
                "field_id" => 1,
                "excluded_field_id" => 2
            ],
            [
                "field_id" => 10,
                "excluded_field_id" => 5
            ],
            [
                "field_id" => 10,
                "excluded_field_id" => 11
            ],
            [
                "field_id" => 11,
                "excluded_field_id" => 5
            ],
            [
                "field_id" => 11,
                "excluded_field_id" => 6
            ],
        ],
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];