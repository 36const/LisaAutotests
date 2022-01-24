<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.users' =>  include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
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
            ]
        ),
    ],
];