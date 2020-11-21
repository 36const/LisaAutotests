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
        "excluded_fields" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/excluded_fields.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];