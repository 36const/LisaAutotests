<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 1,
                'type_id' => 2,
                'supervisor_id' => 2,
                'manager_id' => 4,
                'status' => 9,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:01',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 1,
                'cross_check_manager_id' => 3,
                'employee_code_1c' => null,
                'child_count' => 0
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 52,
                'value' => 2,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        'request_attachments' => [
            [
                'id' => 1,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => date('Y-m-d'),
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'size' => 60424,
            ],
            [
                'id' => 2,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'doc .doc',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => date('Y-m-d'),
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_doc.doc',
                'size' => 34304,
            ],
            [
                'id' => 3,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => date('Y-m-d'),
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                'size' => 97152,
            ],
            [
                'id' => 4,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => date('Y-m-d'),
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                'size' => 34304,
            ],
        ],
        'request_status_history' => [],
        'observers' => [],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'excluded_fields' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/excluded_fields.php',
        'field_values' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'priorities' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        'reasons' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/reasons.php',
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            [
//        "id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 1,
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000004",
                'positions' => '["contentManager"]',
            ],
        ],
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewOwnRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportView'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewOwnDashboards'
            ],
        ]
    ],
//    'gomer_fixtures' => [
//        'users' => [
//            [
//                'id' => 1,
//                'username' => 'kutsan.k',
//                'auth_key' => 'WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo',
//                'password_hash' => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
//                'password_reset_token' => null,
//                'email' => 'kutsan.k@rozetka.com.ua',
//                'created_at' => 1584396309,
//                'updated_at' => 1584475046,
//                'status' => 1,
//                'color' => null,
//                'first_name' => '',
//                'second_name' => '',
//                'avatar_image' => null,
//                'reason_for_edit' => 'kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k',
//                'ldap_sync_code' => null,
//                'site_theme' => null
//            ],
//        ],
//    ]
];