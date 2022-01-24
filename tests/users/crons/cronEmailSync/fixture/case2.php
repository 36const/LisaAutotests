<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' =>  include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.user_changing_history' => [],
    ],
    'splitter_fixtures' => [
        'users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'splitter_fixtures/users.php',
            [
                4 => [
                    'username' => 'bpm_contentManager_1a',
                    'email' => 'bpm_contentManager_1a@rozetka.ua',
                ],
                5 => [
                    'username' => 'bpm_contentManager_1b',
                    'email' => 'bpm_contentManager_1b@rozetka.ua',
                ],
                10 => [
                    'username' => 'bpm_productManager_1',
                    'email' => 'bpm_productManager_1@rozetka.ua',
                ],
            ]
        ),
    ],
];