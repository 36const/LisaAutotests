<?php

return [
    "lisa_fixtures" => [
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "default_role_permissions" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/default_role_permissions.php',
        "user_bpm" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/user_bpm.php',
        "user_permissions" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/user_permissions.php',
    ],
    "gomer_fixtures" => [
        "users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php',
    ],
];