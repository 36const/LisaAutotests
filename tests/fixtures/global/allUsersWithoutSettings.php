<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_assignment' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
        'request_attachments' => [],
        'request_errors' => [],
        'observers' => []
    ],
//    'gomer_fixtures' => [
//        'users' => (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
//    ]
];