<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        'notification_settings' => [],
    ],
];