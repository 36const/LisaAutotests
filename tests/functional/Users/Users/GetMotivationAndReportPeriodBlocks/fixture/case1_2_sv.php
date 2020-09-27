<?php
return [
    "lisa_fixtures" => [
        'requests' => [
            [
                "id" => 1,
                "author_id" => 1,
                "type_id" => 1,
                "supervisor_id" => 4,
                "manager_id" => null,
                "status" => 1,
                "direction" => 2,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:01',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Маркетплейса)",
                "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                "attachments" => '[]',
                "category_id" => null,
                "seller_id" => '0',
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
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 2,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
                "employee_code_1c" => null,
                "child_count" => 0
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 8,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 15,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 19,
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
                'field_id' => 53,
                'value' => 3,
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
                'value' => null,
            ],
            [
                'request_id' => 1,
                'field_id' => 114,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => null,
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
                'value' => null,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => null,
            ],
        ],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "default_role_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/default_role_permissions.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "user_bpm" => [
            [
//        "id" => 1,
                "name" => "Система",
                "login" => "systemBPM",
                "email" => "system@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 2,
                "name" => "Администратор",
                "login" => "adminBPM",
                "email" => "admin@admin.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "admin",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 3,
                "name" => "Гость",
                "login" => "guestBPM",
                "email" => "guest@guest.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "guest",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 4,
                "name" => "Константин Куцан",
                "login" => "kutsan.k",
                "email" => "kutsan.k@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 1,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000004"
            ],
        ],
        "user_permissions" => [
//            [
//                //"id" => 1048,
//                "user_id" => 4,
//                "permission_name" => "reportLoadAllUsers"
//            ],
//            [
//                //"id" => 1049,
//                "user_id" => 4,
//                "permission_name" => "reportLoadMarketUsers"
//            ],
            [
                //"id" => 1050,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
//            [
//                //"id" => 1051,
//                "user_id" => 4,
//                "permission_name" => "errorsUpdate"
//            ],
//            [
//                //"id" => 1052,
//                "user_id" => 4,
//                "permission_name" => "sellerUpdate"
//            ],
//            [
//                //"id" => 1053,
//                "user_id" => 4,
//                "permission_name" => "categoryUpdate"
//            ],
//            [
//                //"id" => 1054,
//                "user_id" => 4,
//                "permission_name" => "teamUpdate"
//            ],
//            [
//                //"id" => 1055,
//                "user_id" => 4,
//                "permission_name" => "coefUpdate"
//            ],
//            [
//                //"id" => 1056,
//                "user_id" => 4,
//                "permission_name" => "fieldsUpdate"
//            ],
//            [
//                //"id" => 1057,
//                "user_id" => 4,
//                "permission_name" => "reasonsUpdate"
//            ],
//            [
//                //"id" => 1058,
//                "user_id" => 4,
//                "permission_name" => "excludedFieldsUpdate"
//            ],
//            [
//                //"id" => 1059,
//                "user_id" => 4,
//                "permission_name" => "requestViewOwnRequests"
//            ],
//            [
//                //"id" => 1060,
//                "user_id" => 4,
//                "permission_name" => "requestViewDirectionRequests"
//            ],
//            [
//                //"id" => 1061,
//                "user_id" => 4,
//                "permission_name" => "requestViewTeamRequests"
//            ],
//            [
//                //"id" => 1062,
//                "user_id" => 4,
//                "permission_name" => "requestDeleteAttachments"
//            ],
//            [
//                //"id" => 1333,
//                "user_id" => 4,
//                "permission_name" => "createUser"
//            ],
//            [
//                //"id" => 1334,
//                "user_id" => 4,
//                "permission_name" => "updateUser"
//            ],
//            [
//                //"id" => 1335,
//                "user_id" => 4,
//                "permission_name" => "blockUser"
//            ],
            [
                //"id" => 1336,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 1337,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 1338,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 1339,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 1340,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 1341,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 1342,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 1343,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 1344,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 1345,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 1346,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 1347,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 1348,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 1349,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 1350,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 1351,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 1352,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 1353,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 1354,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 1355,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 1356,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 1357,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 1358,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 1359,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 1360,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 1361,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 1362,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 1363,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 1364,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 1365,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 1366,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
//            [
//                //"id" => 1369,
//                "user_id" => 4,
//                "permission_name" => "requestViewAllRequests"
//            ],
            [
                //"id" => 1370,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 1371,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 2223,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
//            [
//                //"id" => 2328,
//                "user_id" => 4,
//                "permission_name" => "takeToWork"
//            ],
//            [
//                //"id" => 2563,
//                "user_id" => 4,
//                "permission_name" => "priorityUpdate"
//            ],
//            [
//                //"id" => 3010,
//                "user_id" => 4,
//                "permission_name" => "viewAllDashboards"
//            ],
//            [
//                //"id" => 3015,
//                "user_id" => 4,
//                "permission_name" => "viewDashboardsByDirection"
//            ],
            [
                //"id" => 3037,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
//            [
//                //"id" => 3044,
//                "user_id" => 4,
//                "permission_name" => "viewOwnDashboards"
//            ],
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \rzk\FixtureController::getFixtureDir() . 'cooper_fixtures/market.php',
    ],
    "gomer_fixtures" => [
        "users" => [
            [
                "id" => 1,
                "username" => "kutsan.k",
                "auth_key" => "WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo",
                "password_hash" => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
                "password_reset_token" => null,
                "email" => "kutsan.k@rozetka.com.ua",
                "created_at" => 1584396309,
                "updated_at" => 1584475046,
                "status" => 1,
                "color" => null,
                "first_name" => "",
                "second_name" => "",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
        ],
    ]
];