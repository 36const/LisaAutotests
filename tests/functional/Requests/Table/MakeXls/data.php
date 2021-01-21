<?php

use lisa\Page\Other\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка заявки с заблокированными значениями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"{\"1\":\"id\",\"2\":\"subject\",\"3\":\"type_id\",\"4\":\"author_id\",\"5\":\"supervisor_id\",\"6\":\"manager_id\",\"7\":\"cross_check_manager_id\",\"8\":\"status\",\"9\":\"cross_check_status\",\"10\":\"with_grid\",\"11\":\"used_ref\",\"12\":\"updating_photos\",\"13\":\"automoderation\",\"14\":\"mobile_courier\",\"15\":\"hand_load\",\"16\":\"enter_points\",\"17\":\"with_tags\",\"18\":\"by_client_review\",\"19\":\"updating_characteristics\",\"20\":\"stop_brands\",\"21\":\"adding_instructions\",\"22\":\"updating_description\",\"23\":\"markdown_2\",\"24\":\"with_video\",\"25\":\"with_pallets\",\"26\":\"adding_goods_to_new_category\",\"27\":\"lots\",\"28\":\"promo_desc\",\"29\":\"complaint_for_good\",\"30\":\"visa\",\"31\":\"markdown\",\"32\":\"difficulty_level\",\"33\":\"photos_available\",\"34\":\"with_photo\",\"35\":\"adding_graphics\",\"36\":\"calc_quantity_of_checked_goods\",\"37\":\"changed_goods\",\"38\":\"added_goods\",\"39\":\"pack_load\",\"40\":\"goods_in_db\",\"41\":\"language\",\"42\":\"description_available\",\"43\":\"characteristics_available\",\"44\":\"calc_quantity_of_checked_goods_with_errors_cc\",\"45\":\"author_clarifications\",\"46\":\"calc_quantity_of_checked_goods_cc\",\"47\":\"awaiting_correction\",\"48\":\"calc_quantity_of_checked_goods_with_errors\",\"49\":\"result_comment\",\"50\":\"team_direction\",\"51\":\"last_change_status_date\",\"52\":\"amount_to_work\",\"53\":\"sv_report_periods\",\"54\":\"supervisor_check_date\",\"55\":\"category_id\",\"56\":\"priority\",\"57\":\"actual_start_date\",\"58\":\"report_period_id\",\"59\":\"supervisor_process_date\",\"60\":\"actual_finish_date\",\"61\":\"planned_finish_date\",\"62\":\"recommendations\",\"63\":\"planned_start_date\",\"64\":\"created_at\",\"65\":\"parent_id\",\"66\":\"seller_id\",\"67\":\"description\",\"68\":\"reasons\",\"69\":\"correction_comment\",\"70\":\"reason\",\"71\":\"direction\",\"72\":\"ua_fields\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Выгрузка заявки со специальными символами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Выгрузка заявки с несколькими отчётными периодами',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Выгрузка заявки с причиной отмены/доработки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Выгрузка заявок со всеми случаями',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at" => null,
                            "generation_time" => null,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 1,
                        ]
                    ],
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    "exports_logs" => [
                        [
                            "export_id" => 1,
                            "user_id" => 4,
//                            "conditions" => '{"status": null, "addParams": "[[\"OR\",{\"value\":\"1\",\"field_id\":160}]]", "queryParams": "{\"isExport\":\"1\",\"columns\":\"        {\\\"1\\\":\\\"id\\\",\\\"2\\\":\\\"subject\\\",\\\"3\\\":\\\"type_id\\\",\\\"4\\\":\\\"author_id\\\",\\\"5\\\":\\\"supervisor_id\\\",\\\"6\\\":\\\"manager_id\\\",\\\"7\\\":\\\"reasons\\\",\\\"8\\\":\\\"status\\\",\\\"9\\\":\\\"sv_report_periods\\\",\\\"10\\\":\\\"report_period_id\\\",\\\"11\\\":\\\"category_id\\\",\\\"12\\\":\\\"seller_id\\\",\\\"13\\\":\\\"cross_check_status\\\",\\\"14\\\":\\\"direction\\\",\\\"15\\\":\\\"priority\\\",\\\"16\\\":\\\"created_at\\\",\\\"17\\\":\\\"awaiting_correction\\\",\\\"18\\\":\\\"hand_load\\\",\\\"19\\\":\\\"pack_load\\\"}\"}"}',
                            "created_at >=" => date("Y-m-d"),
                            "generated_at >=" => date("Y-m-d"),
                            "generation_time >" => 0,
                        ]
                    ],
                    "user_exports" => [
                        [
                            "id" => 1,
                            "user_id" => 4,
                            "title >" => 'export_4_' . date('Y-m-d'),
                            "status" => 2,
                        ]
                    ]
                ]
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => Export::exportsAmount(1)
                        ],
                        [
                            "selector" => Export::exportsItem(1),
                            "value" => 'export_4_' . date("Y-m-d")
                        ],
                        [
                            "selector" => Export::exportsReady(1),
                            "value" => 'Готов'
                        ]
                    ]
                ],
            ]
        ]
    ],

];
