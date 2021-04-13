<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        "requests_fields" => [],
        "request_errors" => [],
        'notification_settings' => [],
        "user_notifications" => [],
        "request_status_history" => [],
        "observers" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];