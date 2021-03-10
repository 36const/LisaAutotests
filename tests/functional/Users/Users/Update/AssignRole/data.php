<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Групповое изменение должности у нескольких пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'keys' => '5,6,8',
                'role' => 'contentManager'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => [
                        [
                            "id" => 1,
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
                            "id" => 2,
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
                            "id" => 3,
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
                            "id" => 4,
                            "name" => "Константин Куцан",
                            "login" => "kutsan.k",
                            "email" => "kutsan.k@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "admin",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            "change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
                            "name" => "Супервайзер Руководько 1",
                            "login" => "bpm_headSupervisor_1",
                            "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 4,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000005"
                        ],
                        [
                            "id" => 6,
                            "name" => "Супервайзер Начальникович 1",
                            "login" => "bpm_supervisor_1",
                            "email" => "bpm_supervisor_1@rozetka.com.ua",
                            "team" => 1,
                            "parent_id" => 5,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000006"
                        ],
                        [
                            "id" => 7,
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
                            "id" => 8,
                            "name" => "Супервайзер Групповушкин 13",
                            "login" => "bpm_supervisor_13",
                            "email" => "bpm_supervisor_13@rozetka.com.ua",
                            "team" => 14,
                            "parent_id" => 5,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-04-13 13:17:20",
                            "created_by" => 1,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "0"
                        ],
                        [
                            "id" => 9,
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
                    ],
                    "user_permissions" => [
                        [
                            "id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 2,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 3,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 4,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 5,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 6,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 7,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 8,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 10,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 12,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 14,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 16,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 18,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 20,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 21,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 22,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 23,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 24,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 25,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 26,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 27,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 28,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 29,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 30,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 31,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 32,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            "id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            "id" => 34,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 36,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 38,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 39,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 40,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            "id" => 41,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 42,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 43,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            "id" => 44,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            "id" => 45,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            "id" => 46,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            "id" => 47,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            "id" => 48,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            "id" => 49,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "id" => 50,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            "id" => 51,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 52,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 53,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 54,
                            "user_id" => 1,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 55,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 56,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 57,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 58,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 59,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 60,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 61,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 62,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 63,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 65,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 67,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 69,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 71,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 74,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 75,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 76,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 77,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 78,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 79,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 80,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 81,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 82,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 83,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 84,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 85,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 86,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            "id" => 87,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            "id" => 88,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 89,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 90,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 91,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 92,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 93,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 94,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 95,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 96,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 97,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            "id" => 98,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 99,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 100,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 101,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 102,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 103,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 104,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            "id" => 105,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            "id" => 106,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            "id" => 107,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            "id" => 108,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            "id" => 109,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            "id" => 110,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "id" => 111,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            "id" => 112,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 113,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 114,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 115,
                            "user_id" => 2,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 116,
                            "user_id" => 2,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 117,
                            "user_id" => 2,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 118,
                            "user_id" => 2,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 119,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 120,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 121,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 122,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            "id" => 123,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            "id" => 124,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            "id" => 125,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            "id" => 126,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            "id" => 127,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            "id" => 128,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            "id" => 129,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "id" => 130,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 131,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 132,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 133,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            "id" => 134,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 135,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 136,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 137,
                            "user_id" => 4,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 138,
                            "user_id" => 4,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 139,
                            "user_id" => 4,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 140,
                            "user_id" => 4,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 141,
                            "user_id" => 4,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 142,
                            "user_id" => 4,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 143,
                            "user_id" => 4,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 144,
                            "user_id" => 4,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 145,
                            "user_id" => 4,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 146,
                            "user_id" => 4,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 147,
                            "user_id" => 4,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 148,
                            "user_id" => 4,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 149,
                            "user_id" => 4,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 150,
                            "user_id" => 4,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 151,
                            "user_id" => 4,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 152,
                            "user_id" => 4,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 153,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 154,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 155,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 156,
                            "user_id" => 4,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 157,
                            "user_id" => 4,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 158,
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 159,
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 160,
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 161,
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 162,
                            "user_id" => 4,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 163,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 164,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 165,
                            "user_id" => 4,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 166,
                            "user_id" => 4,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 167,
                            "user_id" => 4,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 168,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 169,
                            "user_id" => 4,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 170,
                            "user_id" => 4,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 171,
                            "user_id" => 4,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 172,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 173,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 174,
                            "user_id" => 4,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 175,
                            "user_id" => 4,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 176,
                            "user_id" => 4,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 177,
                            "user_id" => 4,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 219,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 5,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 5,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 8,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 8,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 8,
                            "permission_name" => "viewOwnDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 5,
                            "changed_user_login" => "bpm_headSupervisor_1",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "headSupervisor",
                            "new_value" => "contentManager",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 2,
                            "changed_user_id" => 6,
                            "changed_user_login" => "bpm_supervisor_1",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "supervisor",
                            "new_value" => "contentManager",
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 3,
                            "changed_user_id" => 8,
                            "changed_user_login" => "bpm_supervisor_13",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "supervisor",
                            "new_value" => "contentManager",
                            "date >=" => date("Y-m-d"),
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность группового изменения должности без указания пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'keys' => '',
                'role' => 'contentManager'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                    "user_changing_history" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_changing_history'],
                ],
            ]
        ]
    ],

];
