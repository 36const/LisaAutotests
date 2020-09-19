<?php

return [
    "lisa_fixtures" => [
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
    ],
];