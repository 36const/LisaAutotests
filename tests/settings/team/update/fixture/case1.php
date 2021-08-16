<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
    ]
];