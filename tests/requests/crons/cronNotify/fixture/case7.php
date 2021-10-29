<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => (include __DIR__ . '/case3.php')['lisa_fixtures']['requests'],
        'requests_fields' => (include __DIR__ . '/case5.php')['lisa_fixtures']['requests_fields'],
        'request_attachments' => (include __DIR__ . '/case5.php')['lisa_fixtures']['request_attachments'],
    ],
];