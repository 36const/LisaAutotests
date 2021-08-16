<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        'notification_settings' => [],
    ],
];