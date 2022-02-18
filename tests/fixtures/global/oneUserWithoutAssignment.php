<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[3],
        ],
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.user_access' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php')[2],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php')[3],
        ],
        'request_attachments' => [],
        'request_errors' => [],
        'request_rz_categories' => [],
        'observers' => [],
        'user_notifications' => [],
    ],
];