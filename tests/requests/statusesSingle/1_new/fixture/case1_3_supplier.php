<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => array_replace_recursive(
            (include __DIR__ . '/case.php')['lisa_fixtures']['requests'],
            [
                [
                    'supplier_cabinet_id' => 111,
                ]
            ]
        ),
        'requests_fields' => (include __DIR__ . '/case.php')['lisa_fixtures']['requests_fields'],
        'request_attachments' => [],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'request_errors' => [],
        'notification_settings' => (include __DIR__ . '/case.php')['lisa_fixtures']['notification_settings'],
        'user_notifications' => [],
        'request_status_history' => [],
        'requests_reasons' => [],
        'observers' => [],
    ],
];