<?php
return [
    "lisa_fixtures" => [
        "requests" => [],
        'requests_fields' => [],
        "excluded_fields" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/excluded_fields.php',
    ],
];