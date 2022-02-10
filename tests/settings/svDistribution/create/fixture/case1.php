<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'sv_distribution' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/sv_distribution.php',
    ],
];