<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
    ]
];