<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'field_values' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
    ]
];