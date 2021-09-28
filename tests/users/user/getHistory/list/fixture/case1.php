<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.user_changing_history' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_changing_history.php',
    ],
];