<?php
return [
    "lisa_fixtures" => [
        'requests' => [],
        'requests_fields' => [],
        "request_attachments" => [],
        'notification_settings' => [
            [
                //'id' => 1,
                "user_id" => 4,
                "types_for_notification" => '{"create": 2, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
            [
                //'id' => 1,
                "user_id" => 6,
                "types_for_notification" => '{"create": 1, "comment": 2, "mention": "2", "manager_id": 2, "attachments": 2, "supervisor_id": 2}',
                "fields_for_complete" => '["1", "2", "20", "29", "30", "53", "54", "67", "101", "122"]',
                "statuses_for_notification" => '{"1": 2, "2": 2, "3": 2, "4": 2, "5": 2, "6": 2, "7": 2, "8": 2, "9": 2, "11": 2}'
            ],
        ],
        "user_notifications" => [],
        "observers" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "public.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];