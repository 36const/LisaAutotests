<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'rozetka_categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
        'rz_category_imports' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rz_category_imports.php',
    ],
];