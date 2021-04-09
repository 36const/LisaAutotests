<?php

return [
    "lisa_fixtures" => [
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
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
        "auth.users" => [
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
                "team" => 1,
                "parent_id" => 1,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:32",
                "created_by" => 1,
                "change_date" => "2020-06-30 13:18:50",
                "drfo" => "'000000004"
            ],
        ],
        "auth.auth_item" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        "auth.auth_assignment" => [
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "updateUser"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "reportView"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewUser"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewOwnDashboards"
            ],
//            [
                //"id" => 3256,
//                "user_id" => 4,
//                "item_name" => "reportLoadAllUsers"
//            ],
//            [
                //"id" => 3257,
//                "user_id" => 4,
//                "item_name" => "reportLoadMarketUsers"
//            ],
//            [
                //"id" => 3258,
//                "user_id" => 4,
//                "item_name" => "reportLoadYourTeam"
//            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewAllDashboards"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewDashboardsByDirection"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "createUser"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "blockUser"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "errorsUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "sellerUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "categoryUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "teamUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "coefUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "fieldsUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "reasonsUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "excludedFieldsUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "priorityUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestCreate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestUpdate"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestCreateRelated"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "massEdit"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestViewTeamRequests"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestDeleteAttachments"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "takeToWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddNewItems"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestUpdateItems"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestTransferItems"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestGroupItems"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestCheckHidden"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestStructureDesign"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToWaitCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitCheckToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToInCheck"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInCheckToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToRequireChange"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferRequireChangeToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToDeclined"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferDeclinedToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToWaitWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferWaitWorkToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToInWork"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferInWorkToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToOnHold"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferOnHoldToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToPartialComplete"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferPartialCompleteToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToCompleted"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferCompletedToAny"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferAnyToClosed"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "transferClosedToAny"
            ],
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