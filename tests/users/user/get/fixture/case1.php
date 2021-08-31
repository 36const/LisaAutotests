<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
    ],
];