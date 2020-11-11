<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
//                "id" => 1,
                "author_id" => 4,
                "type_id" => 9,
                "supervisor_id" => 34,
                "manager_id" => 11,
                "status" => 6,
                "direction" => 0,
                "priority" => 8,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление параметров/значений (Определяется типом задачи)",
                "description" => "Описание",
                "attachments" => "[]",
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                "reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => null,
                "supervisor_process_date" => '2020-01-01 00:00:02',
                "supervisor_check_date" => null,
                "difficulty" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 5,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}',
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
            ],
        ],
        "requests_fields" => [
            [
                "request_id" => 1,
                "field_id" => 1,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 53,
                "value" => "0.5"
            ],
            [
                "request_id" => 1,
                "field_id" => 54,
                "value" => "1"
            ],
            [
                "request_id" => 1,
                "field_id" => 59,
                "value" => "0"
            ],
            [
                "request_id" => 1,
                "field_id" => 101,
                "value" => null
            ],
            [
                "request_id" => 1,
                "field_id" => 122,
                "value" => null
            ],
            [
                "request_id" => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                "request_id" => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        "priorities" => [
            [
                //"id" => 1,
                "name" => "Информация необходима для склада",
                "status" => 1
            ],
            [
                //"id" => 2,
                "name" => "Товар-новинка/эксклюзив (трафикообразующий)",
                "status" => 1
            ],
            [
                //"id" => 3,
                "name" => "Значение (не использовать) в фильтре на сайте (и в карточках товаров)",
                "status" => 1
            ],
            [
                //"id" => 4,
                "name" => "Группировка топовых позиций",
                "status" => 1
            ],
            [
                //"id" => 5,
                "name" => "Жалоба клиента (в соц сети, в КЦ, в магазине, руководству)",
                "status" => 1
            ],
            [
                //"id" => 6,
                "name" => "Сезонные товары",
                "status" => 1
            ],
            [
                //"id" => 7,
                "name" => "Приоритетный продавец (ТОП)",
                "status" => 1
            ],
            [
                //"id" => 8,
                "name" => "Неправильные/Битые ссылки (порталы и фат-меню)",
                "status" => 0
            ],
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-01-01 00:00:01',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:04',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-07-01 00:00:00',
                "end" => '2020-09-30 00:00:00',
                "created_at" => '2020-01-01 00:00:02',
                "updated_at" => null,
            ],
            [
                //'id' => 4,
                "begin" => '2020-10-01 00:00:00',
                "end" => '2020-12-31 00:00:00',
                "created_at" => '2020-01-01 00:00:03',
                "updated_at" => null,
            ],
        ],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "markets_supervisors" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/markets_supervisors.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
    ],
];