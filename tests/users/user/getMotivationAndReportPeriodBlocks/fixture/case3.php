<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 2,
                'manager_id' => null,
                'status' => 1,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:01',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                'category_id' => 1,
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
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
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
                'field_id' => 40,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 44,
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
        'observers' => [],
        'report_periods' => [[]],
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'field_values' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.users' => [
            [
//        "id" => 1,
                'name' => 'Система',
                'login' => 'systemBPM',
                'email' => 'system@rozetka.com.ua',
                'team' => null,
                'parent_id' => 0,
                'position' => 'system',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 0,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '0'
            ],
            [
//        "id" => 2,
                'name' => 'Администратор',
                'login' => 'adminBPM',
                'email' => 'admin@admin.com',
                'team' => null,
                'parent_id' => 0,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 0,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '0'
            ],
            [
//        "id" => 3,
                'name' => 'Гость',
                'login' => 'guestBPM',
                'email' => 'guest@guest.com',
                'team' => null,
                'parent_id' => 0,
                'position' => 'guest',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 0,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '0'
            ],
            [
//        "id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'productManager',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000004"
            ],
        ],
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddNewItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestTransferItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestGroupItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUploadPhoto'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCheckHidden'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestStructureDesign'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSC'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateVideo'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSizeGrid'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateTags'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreate'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreateRelated'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewOwnRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewTeamRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitCheck'
            ],
        ]
    ],
    'gomer_fixtures' => [
        'users' => [
            [
                'id' => 1,
                'username' => 'kutsan.k',
                'auth_key' => 'WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo',
                'password_hash' => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
                'password_reset_token' => null,
                'email' => 'kutsan.k@rozetka.com.ua',
                'created_at' => 1584396309,
                'updated_at' => 1584475046,
                'status' => 1,
                'color' => null,
                'first_name' => '',
                'second_name' => '',
                'avatar_image' => null,
                'reason_for_edit' => 'kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k',
                'ldap_sync_code' => null,
                'site_theme' => null
            ],
        ],
    ]
];