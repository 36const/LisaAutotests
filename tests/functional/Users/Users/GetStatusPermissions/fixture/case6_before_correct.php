<?php

return [
    "lisa_fixtures" => [
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "priorities" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/priorities.php',
        "user_bpm" => [
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
                'status' => 0,
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
                //"reason_id" => null,
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
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
            ],
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
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 3257,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 3258,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
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
                //"user_id" => 4,
                //"permission_name" => "requestUpdate"
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
        ]
    ],
];