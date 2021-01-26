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
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
    ],
];