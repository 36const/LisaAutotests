<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
    ],
    'splitter_fixtures' => array_replace(
        (include TestHelper::getGlobalFixtureDefaultPath() . 'allSplitterUsers.php')['splitter_fixtures'],
        [
            'auth_assignment' => [
                [
                    'item_name' => 'adminBPM',
                    'user_id' => '1',
                    'created_at' => 1634895953,
                ],
            ],
        ]
    )
];