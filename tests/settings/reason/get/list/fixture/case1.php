<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'reasons' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
    ],
];