<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заявка на Добавление/изменение информации в существующих товарах',
        ],

        'provider_data' => [

            "responseCode" => 200,

            "responseBody" => [
                    "status" => 200,
                    "result" => [
                        "id" => 603
                    ]
                ],

            'db' => [
                "requests" =>
                    [
                        "id" => 603,
                        "author_id" => 1,
                        "type_id" => 2,
                        "supervisor_id" => 6,
                        "manager_id" => null,
                        "status" => 1,
                        "direction" => 2,
                        "priority" => null,
                        "awaiting_correction" => 0,
                        //"created_at" =>
                        "correction_comment" => null,
                        "amount_to_work" => 10,
                        "subject" => "Euromart. Источник №1",
                        "description" => 'http://splitter.staging.com.ua/gomer/items/changes/source/1?ItemSearch%5Bupload_status%5D=2',
                        "attachments" => '[]',
                        "category_id" => null,
                        "seller_id" => 83,
                        "recommendations" => null,
                        "reason_id" => null,
                        "reason" => null,
                        "parent_id" => null,
                        "planned_start_date" => null,
                        "planned_finish_date" => null,
                        "actual_start_date" => null,
                        "actual_finish_date" => null,
                        "supervisor_process_date" => null,
                        "supervisor_check_date" => null,
                        "difficulty" => null,
                        "result_comment" => null,
                        "supervisor_comment" => null,
                        //"last_change_status_date" =>
                        "team_direction" => 2,
                        "report_period_id" => null,
                        "sync_source_id" => 1,
                        "sv_report_periods" => null,
                    ],

                "requests_fields" => []
            ]
        ]
    ]
];