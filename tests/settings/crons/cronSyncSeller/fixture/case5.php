<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'markets_supervisors' => array_merge_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
            [
                [
                    'owox_id' => 134802,
                    'supervisor_id' => 24,
                    'title' => 'Soska',
                    'status' => 1
                ]
            ]
        ),
    ],
];