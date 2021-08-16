<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'grid_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/grid_settings.php',
    ],
];