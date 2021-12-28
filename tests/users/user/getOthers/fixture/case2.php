<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
    ],
];