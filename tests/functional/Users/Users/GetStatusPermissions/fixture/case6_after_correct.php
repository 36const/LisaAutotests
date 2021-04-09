<?php

return [
    "lisa_fixtures" => [
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values_errors.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "auth.users" => [
            [
                //"id" => 1,
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
                //"id" => 2,
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
                //"id" => 3,
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
                //"id" => 4,
                "name" => "Константин Куцан",
                "login" => "kutsan.k",
                "email" => "kutsan.k@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 1,
                "position" => "admin",
                "status" => 1,
                "create_ts" => "2020-04-13 13:15:32",
                "created_by" => 1,
                "change_date" => "2020-06-30 13:18:50",
                "drfo" => "'000000004"
            ],
            [
//        "id" => 5,
                "name" => "Супервайзер Руководько 1",
                "login" => "bpm_headSupervisor_1",
                "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 4,
                "position" => "headSupervisor",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000005"
            ],
            [
//        "id" => 6,
                "name" => "Супервайзер Начальникович 1",
                "login" => "bpm_supervisor_1",
                "email" => "bpm_supervisor_1@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000006"
            ],
            [
//        "id" => 7,
                "name" => "Splitter.Moderation",
                "login" => "splitter_moderation",
                "email" => "splitter_moderation@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "0"
            ],
            [
                //"id" => 8,
                "name" => "Супервайзер Групповушкин 13",
                "login" => "bpm_supervisor_13",
                "email" => "bpm_supervisor_13@rozetka.com.ua",
                "team" => 14,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "0"
            ],
            [
                //"id" => 9,
                "name" => "Супервайзер Групповушкин 16",
                "login" => "bpm_supervisor_16",
                "email" => "bpm_supervisor_16@rozetka.com.ua",
                "team" => 14,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-04-13 13:17:20",
                "created_by" => 1,
                "change_date" => "2020-04-13 13:17:20",
                "drfo" => "0"
            ],
            [
//                "id" => 10,
                "name" => "Супервайзер Начальникович 2",
                "login" => "bpm_supervisor_2",
                "email" => "bpm_supervisor_2@rozetka.com.ua",
                "team" => 7,
                "parent_id" => 5,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:23",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000010"
            ],
            [
//                "id" => 11,
                "name" => "Менеджер Контентович 1А",
                "login" => "bpm_contentManager_1a",
                "email" => "bpm_contentManager_1a@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 6,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:23",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:23",
                "drfo" => "'000000011"
            ],
            [
//                "id" => 12,
                "name" => "Менеджер Контентович 1Б",
                "login" => "bpm_contentManager_1b",
                "email" => "bpm_contentManager_1b@rozetka.com.ua",
                "team" => 1,
                "parent_id" => 6,
                "position" => "contentManager",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:23",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:23",
                "drfo" => "'000000012"
            ],
        ],
        'request_errors' => [
            [
//                'id' => 1,
                'request_id' => 1,
                'manager_id' => 11,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 67,
                'comment' => 'comment',
                'status' => 1,
                'create_ts' => '2020-01-01 00:00:00',
                'correction_date' => null
            ]
        ],
        "requests" => [
            [
//                "id" => 1,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 6,
                "manager_id" => 11,
                "status" => 6,
                "direction" => 1,
                "priority" => 2,
                "awaiting_correction" => 1,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => '',
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "description" => 'description',
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => '',
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => '',
                "supervisor_comment" => '',
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "cross_check_status" => 0,
                "cross_check_manager_id" => null,
            ],
        ],
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
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "reportLoadAllUsers"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "reportLoadMarketUsers"
            ],
            [
                "created_at" => null,
                "user_id" => 4,
                "item_name" => "reportLoadYourTeam"
            ],
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
            //[
            //    "created_at" => null,
            //   "user_id" => 4,
            //    "item_name" => "transferRequireChangeToWaitCheck"
            //],
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
];