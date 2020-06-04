<?php

return [
    "lisa_fixtures" => [
        "reports" => [
            [
//                "id" => 1,
                "title" => "Всё во всём",
                "fields" => "[100, 102, 103, 104, 105, 106, 107, 112, 115, 116, 118, 126, 13, 18, 63, 66, 67, 70, 71, 76, 77, 79, 7, 80, 81, 82, 83, 84, 87, 90, 91, 93, 95, 96, 97, 98, 99, \"amount_to_work\", \"category_id\", \"subject\"]",
                "conditions" => "{\"type_id\": [\"1\", \"2\", \"3\", \"4\", \"5\", \"6\", \"7\", \"8\"], \"team_direction\": [\"1\", \"2\", \"3\"]}",
                "type" => 0
            ],
            [
//                "id" => 2,
                "title" => "Детальный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры",
                "fields" => "[\"id\", \"parent_id\", 127, 17, 29, 27, 3, 62, 31, \"supervisor_process_date\", \"last_change_status_date\", \"supervisor_check_date\", \"created_at\", 7, 18, 126, 76, 13, \"subject\", 77, \"category_id\", \"amount_to_work\", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]",
                "conditions" => "{\"type_id\": [\"9\", \"10\", \"11\"], \"team_direction\": [\"5\"]}",
                "type" => 0
            ],
            [
//                "id" => 3,
                "title" => "Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео",
                "fields" => "[\"id\", \"parent_id\", 127, 17, 29, 27, 3, 62, 31, \"supervisor_process_date\", \"last_change_status_date\", \"supervisor_check_date\", \"created_at\", 7, 18, 126, 76, 13, \"subject\", 77, \"category_id\", \"amount_to_work\", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99, \"direction\", \"team_direction\", 78, 124, 123, 125, 24, 69, 101, 122, 64, \"description\", 85, \"sv_report_periods\", \"report_period_id\", 46, 36, 45, 34, 38, 33, 42, 43, 37, 40, 39, 41, 44, 35, 2, 113, 28, \"planned_finish_date\", \"planned_start_date\", \"attachments\", \"priority\", \"reason_id\", \"reason\", 120, 121]",
                "conditions" => "{\"type_id\": [\"7\", \"8\", \"13\", \"14\", \"15\"], \"team_direction\": [\"6\"]}",
                "type" => 0
            ],
            [
//                "id" => 4,
                "title" => "Сводный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры (сводный)",
                "fields" => "[\"id\", \"parent_id\", 127, 17, 29, 27, 3, 62, 31, \"supervisor_process_date\", \"last_change_status_date\", \"supervisor_check_date\", \"created_at\", 7, 18, 126, 76, 13, \"subject\", 77, \"category_id\", \"amount_to_work\", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99]",
                "conditions" => "{\"type_id\": [\"9\", \"10\", \"11\"], \"team_direction\": [\"5\"]}",
                "type" => 1
            ],
            [
//                "id" => 5,
                "title" => "Сводный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео (сводный)",
                "fields" => "[\"id\", \"parent_id\", 127, 17, 29, 27, 3, 62, 31, \"supervisor_process_date\", \"last_change_status_date\", \"supervisor_check_date\", \"created_at\", 7, 18, 126, 76, 13, \"subject\", 77, \"category_id\", \"amount_to_work\", 63, 95, 70, 80, 93, 81, 71, 115, 82, 83, 66, 79, 112, 90, 96, 97, 98, 99, \"direction\", \"team_direction\", 78, 124, 123, 125, 24, 69, 101, 122, 64, \"description\", 85, \"sv_report_periods\", \"report_period_id\", 46, 36, 45, 34, 38, 33, 42, 43, 37, 40, 39, 41, 44, 35, 2, 113, 28, \"planned_finish_date\", \"planned_start_date\", \"attachments\", \"priority\", \"reason_id\", \"reason\", 120, 121]",
                "conditions" => "{\"type_id\": [\"7\", \"8\", \"13\", \"14\", \"15\"], \"team_direction\": [\"6\"]}",
                "type" => 1
            ]
        ],
    ]
];