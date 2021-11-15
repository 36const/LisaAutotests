<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Установка набора колонок в таблице, снятие открытия в новой вкладке, сброс набора колонок, проставление открытия в новой вкладке',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db_1' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '["author_id", "supervisor_id", "manager_id", "cross_check_manager_id", "reasons", "reason", "status", "previous_status", "cross_check_status", "direction", "priority", "created_at", "awaiting_correction", "correction_comment", "description", "category_id", "rz_category_id", "seller_id", "planned_start_date", "planned_finish_date"]'
                        ]
                    ]
                ]
            ],
            'db_2' => [
                'lisa_fixtures' => [
                    'grid_settings' => [
                        [
                            'id' => 1,
                            'user_id' => 4,
                            'columns_list' => '[]'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
