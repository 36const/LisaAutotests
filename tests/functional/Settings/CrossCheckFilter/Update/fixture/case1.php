<?php

return [
    "lisa_fixtures" => [
        "cross_check_filters" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/cross_check_filters.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
    ],
];