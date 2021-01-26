<?php

return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "id" => 11,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 5,
                "manager_id" => null,
                "status" => 9,
                "direction" => 2,
                "priority" => 1,
                "awaiting_correction" => 0,
                "created_at" => "2020-01-01 00:00:00",
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => "Описание",
                "category_id" => null,
                "seller_id" => 0,
                "recommendations" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-08-20 14:21:10",
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "photo_load_status" => 1
            ],
        ],
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "grid_settings" => [],
        "request_attachments" => []
    ],
];