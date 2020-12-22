<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            //11
            [
                "id" => 22,
                "author_id" => 17,
                "type_id" => 15,
                "supervisor_id" => 35,
                "manager_id" => 13,
                "status" => 11,
                "direction" => 0,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => "2020-11-22 00:00:00",
                "correction_comment" => "",
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение тегов (Определяется типом задачи)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => "",
                "reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => '2020-01-01 00:00:04',
                "supervisor_process_date" => '2020-01-01 00:00:02',
                "supervisor_check_date" => '2020-01-01 00:00:05',
                "result_comment" => "Выполнена",
                "supervisor_comment" => "",
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 6,
                "report_period_id" => 1,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": "1", "2": "2", "3": "3", "4": "4"}'
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 22,
                "field_id" => 2,
                "value" => "1"
            ],
            [
                "request_id" => 22,
                "field_id" => 101,
                "value" => 0
            ],
            [
                "request_id" => 22,
                "field_id" => 146,
                "value" => 0
            ],
            [
                "request_id" => 22,
                "field_id" => 122,
                "value" => 0
            ],
            [
                "request_id" => 22,
                "field_id" => 158,
                "value" => 0
            ],
            [
                "request_id" => 22,
                "field_id" => 53,
                "value" => "2"
            ],
            [
                "request_id" => 22,
                "field_id" => 83,
                "value" => "10"
            ],
            [
                "request_id" => 22,
                "field_id" => 92,
                "value" => "10"
            ],
            [
                "request_id" => 22,
                "field_id" => 110,
                "value" => "10"
            ],
            [
                "request_id" => 22,
                "field_id" => 20,
                "value" => "66"
            ],
            [
                "request_id" => 22,
                "field_id" => 54,
                "value" => "2"
            ],
            [
                "request_id" => 22,
                "field_id" => 58,
                "value" => "120"
            ],
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-01-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-02-01 00:00:00',
                "end" => '2020-02-28 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-03-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-04-30 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "reasons" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ]
];