<?php

return [
    "lisa_fixtures" => [
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "default_role_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/default_role_permissions.php',
        "user_bpm" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/user_bpm.php',
        "user_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/user_permissions.php',
    ],
];