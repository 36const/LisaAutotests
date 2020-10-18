<?php

return [
    "lisa_fixtures" => [
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "reports" => [
            [
                //"id" => 46,
                "title" => "Детальный отчет по контент-менеджерам по работе с порталами, фат-меню, категориями",
                "fields" => '["id", 29, "created_at", 7, "category_id", "amount_to_work", 80, 81, 115, 82, 83, 79, 112, 90, 97, 98, 99, 84, 91, 92, 110, "result_comment", 54, "manager_id", 85, "report_period_id", 45, 42, 43, 40, 41, 44, 2, 113, 28, "seller_id", 55, 57, 58, 1, 8, 9, 30, "author_id", "status", "supervisor_id", "type_id", 6, 20, "actual_finish_date", "actual_start_date", 26]',
                "conditions" => '{"type_id": ["7", "8", "14", "15"], "team_direction": ["6"]}',
                "type" => 0
            ],
            [
                //"id" => 42,
                "title" => "Детальный отчет по ошибкам контент-менеджеров команды Маркетплейс",
                "fields" => '["id", "created_at", "amount_to_work", 93, 66, 67, "manager_id", 101, 122, "report_period_id", 36, 38, 33, 37, 39, 35, "priority", "seller_id", "author_id", "supervisor_id", "type_id", "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 0
            ],
            [
                //"id" => 43,
                "title" => "Детальный отчет по работе контент-менеджера по добавлению видео",
                "fields" => '["supervisor_team", "id", "27", "62", "supervisor_process_date", "supervisor_check_date", "created_at", "category_id", "amount_to_work", "63", "70", "100", "87", "88", "result_comment", "54", "manager_id", "report_period_id", "46", "2", "seller_id", "56", "86", "1", "author_id", "status", "47", "48", "supervisor_id", "type_id", "20", "25", "actual_finish_date", "actual_start_date", "89"]',
                "conditions" => '{"type_id": ["13"], "team_direction": ["6"]}',
                "type" => 0
            ],
            [
                //"id" => 41,
                "title" => "Детальный отчет по работе контент-менеджеров команды Группировка товаров",
                "fields" => '["id", 31, "created_at", "category_id", "amount_to_work", 93, 118, 116, 94, "result_comment", 53, 54, "manager_id", "description", "report_period_id", 36, 2, "priority", "seller_id", 61, 1, 32, "author_id", "status", "supervisor_id", "type_id", 20, "actual_finish_date", "actual_start_date", 89]',
                "conditions" => '{"type_id": ["4"], "team_direction": ["4"]}',
                "type" => 0
            ],
            [
                //"id" => 40,
                "title" => "Детальный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры",
                "fields" => '["supervisor_team", "id", "created_at", "category_id", "amount_to_work", "manager_id", "report_period_id", "priority", "seller_id", "author_id", "supervisor_id", "type_id", "actual_finish_date", "actual_start_date", "29", "80", "79", "96", "97", "98", "99", "84", "91", "104", "105", "106", "53", "54", "45", "41", "2", "113", "59", "1", "30", "20", "25", "89"]',
                "conditions" => '{"type_id": ["9", "10", "11"], "team_direction": ["5"]}',
                "type" => 0
            ],
            [
                //"id" => 39,
                "title" => "Детальный отчет по работе контент-менеджеров  с товарами Rozetka",
                "fields" => '["id", 27, 31, "created_at", 18, 76, "subject", 77, "category_id", "amount_to_work", 70, 93, 71, 66, 67, 94, 88, 111, "result_comment", 52, 53, 54, 16, "manager_id", 12, 23, 22, 21, 124, 123, 125, 24, 69, 101, 122, 64, "report_period_id", 36, 34, 33, 37, 35, 2, "priority", "seller_id", 14, 49, 50, 1, 15, 4, "author_id", 68, "supervisor_id", "type_id", 20, 25, 10, 11, "actual_finish_date", "actual_start_date", 89, 26]',
                "conditions" => '{"type_id": ["1", "2", "3", "5", "12"], "team_direction": ["3"]}',
                "type" => 0
            ],
            [
                //"id" => 38,
                "title" => "Детальный отчет по работе контент-менеджеров  с товарами маркетплейс ",
                "fields" => '["id", "manager_id", "supervisor_id", "type_id", "created_at", "report_period_id", "amount_to_work", "93", "66", "67", "75", "73", "74", "94", "72", "114", "53", "64", "36", "38", "33", "37", "39", "35", "priority", "seller_id", "49", "50", "author_id", "status", "25", "actual_finish_date", "actual_start_date", "89"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 0
            ],
            [
                //"id" => 62,
                "title" => "Детальный отчет по работе  супервайзеров команды Проектирование структур + фильтры",
                "fields" => '["supervisor_team", "id", "29", "supervisor_process_date", "supervisor_check_date", "created_at", "80", "79", "96", "91", "104", "105", "106", "manager_id", "101", "sv_report_periods", "45", "41", "2", "priority", "121", "seller_id", "1", "30", "author_id", "status", "supervisor_id", "type_id", "20", "actual_finish_date", "actual_start_date", "89"]',
                "conditions" => '{"type_id": ["9", "10", "11"], "team_direction": ["5"]}',
                "type" => 0
            ],
            [
                //"id" => 57,
                "title" => "Детальный отчет по супервайзерам команды Группировка товаров",
                "fields" => '["id", 31, "supervisor_process_date", "supervisor_check_date", "created_at", "category_id", "amount_to_work", 95, 93, 103, "manager_id", 101, "sv_report_periods", 36, "priority", 121, "seller_id", 32, "author_id", "status", "supervisor_id", "type_id", 20, "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["4"], "team_direction": ["4"]}',
                "type" => 0
            ],
            [
                //"id" => 59,
                "title" => "Детальный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео",
                "fields" => '["id", "supervisor_process_date", "supervisor_check_date", "created_at", 7, "category_id", "amount_to_work", 102, 104, 105, 106, 107, 108, 109, 117, 65, "manager_id", 101, 122, "sv_report_periods", 46, 36, 45, 42, 43, 40, 41, 44, 121, "seller_id", "status", "supervisor_id", "type_id", 20, "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["7", "8", "13", "14", "15"], "team_direction": ["6"]}',
                "type" => 0
            ],
            [
                //"id" => 50,
                "title" => "Детальный отчет по супервайзерам по работе с товарами Rozetka ",
                "fields" => '["id", "supervisor_process_date", "supervisor_check_date", "created_at", 18, "category_id", "amount_to_work", 66, 67, 65, 52, 53, "manager_id", 101, 122, "description", "sv_report_periods", 2, 121, "seller_id", 14, 49, 50, 51, 60, 1, 15, 8, 9, 4, "author_id", "status", "supervisor_id", "type_id", 20, 10, 11, "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["1", "2", "3", "5", "12"], "team_direction": ["3"]}',
                "type" => 0
            ],
            [
                //"id" => 55,
                "title" => "Детальный отчет по супервайзерам по работе с товарами маркетплейс",
                "fields" => '["id", "supervisor_process_date", "supervisor_check_date", "created_at", "category_id", "amount_to_work", 66, 67, 65, 94, 114, 53, "manager_id", 101, 122, "description", "sv_report_periods", "priority", 121, "seller_id", 51, 60, "author_id", "status", "supervisor_id", "type_id", "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 0
            ],
            [
                //"id" => 54,
                "title" => "Сводный  отчет по контент-менеджерам по работе с порталами, фат-меню, категориями",
                "fields" => '["id", 80, 81, 115, 82, 83, 79, 112, 90, 97, 98, 99, 84, 91, 92, 110, "manager_id", 101, 85, 113, 55, 57, 58]',
                "conditions" => '{"type_id": ["7", "8", "14", "15"], "team_direction": ["6"]}',
                "type" => 1
            ],
            [
                //"id" => 64,
                "title" => "Сводный отчет по ошибкам контент-менеджеров команды Маркетплейс",
                "fields" => '["id", "created_at", "amount_to_work", 93, 66, 67, "manager_id", 101, 122, "report_period_id", 36, 38, 33, 37, 39, 35, "priority", "seller_id", "author_id", "supervisor_id", "type_id", "actual_finish_date", "actual_start_date"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 1
            ],
            [
                //"id" => 49,
                "title" => "Сводный  отчет по работе контент-менеджера по добавлению видео",
                "fields" => '["id", 70, 100, 88, "manager_id", 101, 56]',
                "conditions" => '{"type_id": ["13"], "team_direction": ["6"]}',
                "type" => 1
            ],
            [
                //"id" => 52,
                "title" => "Сводный отчет по работе контент-менеджеров команды Группировка товаров",
                "fields" => '["id", 93, 91, 118, 116, 94, "manager_id", 101, 61]',
                "conditions" => '{"type_id": ["4"], "team_direction": ["4"]}',
                "type" => 1
            ],
            [
                //"id" => 48,
                "title" => "Сводный отчет по работе контент-менеджеров  команды Проектирование структур + фильтры",
                "fields" => '["id", 80, 79, 97, 98, 99, 91, "manager_id", 101, 59]',
                "conditions" => '{"type_id": ["9", "10", "11"], "team_direction": ["5"]}',
                "type" => 1
            ],
            [
                //"id" => 44,
                "title" => "Сводный отчет по работе контент-менеджеров  с товарами Rozetka",
                "fields" => '[66, 67, "manager_id", 101, 122, 64, 49, 50]',
                "conditions" => '{"type_id": ["1", "2", "3", "5", "12"], "team_direction": ["3"]}',
                "type" => 1
            ],
            [
                //"id" => 47,
                "title" => "Сводный отчет по работе контент-менеджеров  с товарами маркетплейс",
                "fields" => '["manager_id", "manager_team", "66", "67", "94", "101", "49", "50", "64"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 1
            ],
            [
                //"id" => 63,
                "title" => "Сводный отчет по работе супервайзеров команды Проектирование структур + фильтры",
                "fields" => '["id", 96, 104, 105, 106, 101, "supervisor_id"]',
                "conditions" => '{"type_id": ["9", "10", "11"], "team_direction": ["5"]}',
                "type" => 1
            ],
            [
                //"id" => 58,
                "title" => "Сводный отчет по супервайзерам команды Группировка товаров",
                "fields" => '["id", 95, 93, 118, 103, 101, "supervisor_id"]',
                "conditions" => '{"type_id": ["4"], "team_direction": ["4"]}',
                "type" => 1
            ],
            [
                //"id" => 61,
                "title" => "Сводный отчет по супервайзерам по работе с порталами, фат-меню, категориями, видео",
                "fields" => '["id", 102, 104, 105, 106, 107, 108, 109, 117, 65, 101, 122, "supervisor_id"]',
                "conditions" => '{"type_id": ["7", "8", "13", "14", "15"], "team_direction": ["6"]}',
                "type" => 1
            ],
            [
                //"id" => 51,
                "title" => "Сводный  отчет по супервайзерам по работе с товарами Rozetka",
                "fields" => '["id", 66, 67, 65, 101, 122, 51, 60, "supervisor_id"]',
                "conditions" => '{"type_id": ["1", "2", "3", "5", "12"], "team_direction": ["3"]}',
                "type" => 1
            ],
            [
                //"id" => 56,
                "title" => "Сводный отчет по супервайзерам по работе с товарами маркетплейс",
                "fields" => '["id", 66, 67, 65, 94, 101, 122, 51, 60, "supervisor_id"]',
                "conditions" => '{"type_id": ["1", "2", "3", "6"], "team_direction": ["2"]}',
                "type" => 1
            ]
        ],
        "report_periods" => [
            [
                //'id' => 1,
                "begin" => '2020-01-01 00:00:00',
                "end" => '2020-03-31 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 2,
                "begin" => '2020-04-01 00:00:00',
                "end" => '2020-06-30 00:00:00',
                "created_at" => '2020-01-01 00:00:00',
                "updated_at" => null,
            ],
            [
                //'id' => 3,
                "begin" => '2020-07-01 00:00:00',
                "end" => date('Y-m-d', strtotime('+1 week')) . ' 00:00:00',
                "created_at" => '2020-02-01 00:00:00',
                "updated_at" => '2020-07-01 17:01:01',
            ],
            [
                //'id' => 4,
                "begin" => date('Y-m-d', strtotime('+8 days')) . ' 00:00:00',
                "end" => '2021-12-31 00:00:00',
                "created_at" => '2020-03-01 00:00:00',
                "updated_at" => '2020-09-01 19:01:01',
            ],
        ],
        "user_bpm" => [
            [
//                "id" => 1,
                "name" => "Система",
                "login" => "systemBPM",
                "email" => "system@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
//                "id" => 2,
                "name" => "Администратор",
                "login" => "adminBPM",
                "email" => "admin@admin.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "admin",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
//                "id" => 3,
                "name" => "Гость",
                "login" => "guestBPM",
                "email" => "guest@guest.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "guest",
                "status" => 1,
                "create_ts" => "2020-03-10 12:07:48",
                "created_by" => 0,
                "change_date" => "2020-03-10 12:07:48",
                "drfo" => "0"
            ],
            [
//                "id" => 4,
                "name" => "Константин Куцан",
                "login" => "kutsan.k",
                "email" => "kutsan.k@rozetka.com.ua",
                "team" => 16,
                "parent_id" => 1,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:32",
                "created_by" => 1,
                "change_date" => "2020-06-30 13:18:50",
                "drfo" => "'000000004"
            ],
        ],
        "user_permissions" => [
            [
                //"id" => 3143,
                "user_id" => 4,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 3144,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 3151,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 3162,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 3167,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 3168,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 3169,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 3170,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 3171,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 3214,
                "user_id" => 4,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 3256,
//                "user_id" => 4,
//                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 3257,
//                "user_id" => 4,
//                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 3258,
//                "user_id" => 4,
//                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 3259,
                "user_id" => 4,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 3260,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 3261,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 3262,
                "user_id" => 4,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 3263,
                "user_id" => 4,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 3264,
                "user_id" => 4,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 3265,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 3266,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 3267,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 3268,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 3269,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 3270,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 3271,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 3272,
                "user_id" => 4,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 3273,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 3274,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 3275,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 3276,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 3277,
                "user_id" => 4,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 3278,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 3279,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 3280,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 3281,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 3282,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 3283,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 3284,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 3285,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 3286,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 3287,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 3288,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 3290,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 3291,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 3292,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 3293,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 3294,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 3295,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 3296,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 3297,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 3298,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 3299,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 3300,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 3301,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 3302,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 3303,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 3304,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 3317,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitCheck"
            ],
            [
                //"id" => 3341,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 3365,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 3389,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitCheck"
            ],
            [
                //"id" => 3413,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 3437,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInCheck"
            ],
            [
                //"id" => 3461,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToRequireChange"
            ],
            [
                //"id" => 3485,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToDeclined"
            ],
            [
                //"id" => 3509,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                //"id" => 3533,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 3557,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInCheck"
            ],
            [
                //"id" => 3581,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 3605,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToRequireChange"
            ],
            [
                //"id" => 3629,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitWork"
            ],
            [
                //"id" => 3653,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 3677,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitWork"
            ],
            [
                //"id" => 3701,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitCheck"
            ],
            [
                //"id" => 3725,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInWork"
            ],
            [
                //"id" => 3749,
                "user_id" => 4,
                "permission_name" => "transferInWorkToInCheck"
            ],
            [
                //"id" => 3773,
                "user_id" => 4,
                "permission_name" => "transferInCheckToInWork"
            ],
            [
                //"id" => 3797,
                "user_id" => 4,
                "permission_name" => "transferInWorkToRequireChange"
            ],
            [
                //"id" => 3821,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInWork"
            ],
            [
                //"id" => 3845,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInWork"
            ],
            [
                //"id" => 3869,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 3893,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitCheck"
            ],
            [
                //"id" => 3917,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToOnHold"
            ],
            [
                //"id" => 3941,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInCheck"
            ],
            [
                //"id" => 3965,
                "user_id" => 4,
                "permission_name" => "transferInCheckToOnHold"
            ],
            [
                //"id" => 3989,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToRequireChange"
            ],
            [
                //"id" => 4013,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToOnHold"
            ],
            [
                //"id" => 4037,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToDeclined"
            ],
            [
                //"id" => 4061,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToOnHold"
            ],
            [
                //"id" => 4085,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitWork"
            ],
            [
                //"id" => 4109,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToOnHold"
            ],
            [
                //"id" => 4133,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                //"id" => 4157,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                //"id" => 4181,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInCheck"
            ],
            [
                //"id" => 4205,
                "user_id" => 4,
                "permission_name" => "transferInCheckToPartialComplete"
            ],
            [
                //"id" => 4229,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                //"id" => 4253,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                //"id" => 4277,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToDeclined"
            ],
            [
                //"id" => 4301,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToPartialComplete"
            ],
            [
                //"id" => 4325,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                //"id" => 4349,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                //"id" => 4373,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 4397,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToOnHold"
            ],
            [
                //"id" => 4421,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 4445,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitCheck"
            ],
            [
                //"id" => 4469,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToCompleted"
            ],
            [
                //"id" => 4493,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInCheck"
            ],
            [
                //"id" => 4517,
                "user_id" => 4,
                "permission_name" => "transferInCheckToCompleted"
            ],
            [
                //"id" => 4541,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireChange"
            ],
            [
                //"id" => 4565,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToCompleted"
            ],
            [
                //"id" => 4589,
                "user_id" => 4,
                "permission_name" => "transferCompletedToDeclined"
            ],
            [
                //"id" => 4613,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToCompleted"
            ],
            [
                //"id" => 4637,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitWork"
            ],
            [
                //"id" => 4661,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToCompleted"
            ],
            [
                //"id" => 4685,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 4709,
                "user_id" => 4,
                "permission_name" => "transferCompletedToOnHold"
            ],
            [
                //"id" => 4733,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 4757,
                "user_id" => 4,
                "permission_name" => "transferCompletedToPartialComplete"
            ],
            [
                //"id" => 4781,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToCompleted"
            ],
            [
                //"id" => 4805,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitCheck"
            ],
            [
                //"id" => 4829,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToClosed"
            ],
            [
                //"id" => 4853,
                "user_id" => 4,
                "permission_name" => "transferClosedToInCheck"
            ],
            [
                //"id" => 4877,
                "user_id" => 4,
                "permission_name" => "transferInCheckToClosed"
            ],
            [
                //"id" => 4901,
                "user_id" => 4,
                "permission_name" => "transferClosedToRequireChange"
            ],
            [
                //"id" => 4925,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToClosed"
            ],
            [
                //"id" => 4949,
                "user_id" => 4,
                "permission_name" => "transferClosedToDeclined"
            ],
            [
                //"id" => 4973,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToClosed"
            ],
            [
                //"id" => 4997,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitWork"
            ],
            [
                //"id" => 5021,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToClosed"
            ],
            [
                //"id" => 5045,
                "user_id" => 4,
                "permission_name" => "transferClosedToInWork"
            ],
            [
                //"id" => 5069,
                "user_id" => 4,
                "permission_name" => "transferInWorkToClosed"
            ],
            [
                //"id" => 5093,
                "user_id" => 4,
                "permission_name" => "transferClosedToOnHold"
            ],
            [
                //"id" => 5117,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToClosed"
            ],
            [
                //"id" => 5141,
                "user_id" => 4,
                "permission_name" => "transferClosedToPartialComplete"
            ],
            [
                //"id" => 5165,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 5189,
                "user_id" => 4,
                "permission_name" => "transferClosedToCompleted"
            ],
            [
                //"id" => 5213,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitCheck"
            ],
            [
                //"id" => 5237,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToAny"
            ],
            [
                //"id" => 5261,
                "user_id" => 4,
                "permission_name" => "transferAnyToInCheck"
            ],
            [
                //"id" => 5285,
                "user_id" => 4,
                "permission_name" => "transferInCheckToAny"
            ],
            [
                //"id" => 5309,
                "user_id" => 4,
                "permission_name" => "transferAnyToRequireChange"
            ],
            [
                //"id" => 5333,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToAny"
            ],
            [
                //"id" => 5357,
                "user_id" => 4,
                "permission_name" => "transferAnyToDeclined"
            ],
            [
                //"id" => 5381,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToAny"
            ],
            [
                //"id" => 5405,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitWork"
            ],
            [
                //"id" => 5429,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToAny"
            ],
            [
                //"id" => 5453,
                "user_id" => 4,
                "permission_name" => "transferAnyToInWork"
            ],
            [
                //"id" => 5477,
                "user_id" => 4,
                "permission_name" => "transferInWorkToAny"
            ],
            [
                //"id" => 5501,
                "user_id" => 4,
                "permission_name" => "transferAnyToOnHold"
            ],
            [
                //"id" => 5525,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToAny"
            ],
            [
                //"id" => 5549,
                "user_id" => 4,
                "permission_name" => "transferAnyToPartialComplete"
            ],
            [
                //"id" => 5573,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToAny"
            ],
            [
                //"id" => 5597,
                "user_id" => 4,
                "permission_name" => "transferAnyToCompleted"
            ],
            [
                //"id" => 5621,
                "user_id" => 4,
                "permission_name" => "transferCompletedToAny"
            ],
            [
                //"id" => 5645,
                "user_id" => 4,
                "permission_name" => "transferAnyToClosed"
            ],
            [
                //"id" => 5669,
                "user_id" => 4,
                "permission_name" => "transferClosedToAny"
            ],
            [
                //"id" => 5715,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ]
        ]
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
    ],
];