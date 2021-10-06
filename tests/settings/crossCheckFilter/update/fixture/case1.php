<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'cross_check_filters' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/cross_check_filters.php',
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
    ],
];