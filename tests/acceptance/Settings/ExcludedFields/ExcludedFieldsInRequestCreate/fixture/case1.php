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
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ]
];