<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auto_diff_fields' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auto_diff_fields.php',
    ]
];