<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'request_errors' => [],
        'notification_settings' => [],
        'user_notifications' => [],
        'request_status_history' => [],
        'observers' => [],
        'request_templates' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/request_templates.php',
    ],
];