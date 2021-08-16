<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
    ]
];