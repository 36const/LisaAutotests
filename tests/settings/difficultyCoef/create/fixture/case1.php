<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'difficulty_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
    ],
];