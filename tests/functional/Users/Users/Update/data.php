<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменить должность, команду, ДРФО и руководителя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000099',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'contentManager',
                'UserBpm[team]' => '1',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewUser]' => '0',
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
                            "team" => 1,
                            "parent_id" => 5,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000099"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 130,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
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
                            "id" => 169,
                            "user_id" => 4,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 177,
                            "user_id" => 4,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "17",
                            "new_value" => "1",
//                            "date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 2,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "parent_id",
                            "old_value" => "1. Система",
                            "new_value" => "5. Супервайзер Руководько 1",
//                            "date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 3,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "admin",
                            "new_value" => "contentManager",
//                            "date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 4,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "drfo",
                            "old_value" => "'000000004",
                            "new_value" => "'000000099",
//                            "date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 5,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "blockUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 6,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "categoryUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 7,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "coefUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 8,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "createUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 9,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "errorsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 10,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "excludedFieldsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 11,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "fieldsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 12,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "massEdit",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 13,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "priorityUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 14,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reasonsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 15,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadAllUsers",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 16,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadMarketUsers",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 17,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadYourTeam",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 18,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddAttrOrValues",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 19,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddFatPortalCat",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 20,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddNewItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 21,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateSC",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 22,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateSizeGrid",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 23,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateTags",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 24,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateVideo",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 25,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCheckHidden",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 26,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCreateRelated",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 27,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCreate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 28,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestDeleteAttachments",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 29,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestGroupItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 30,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestStructureDesign",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 31,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestTransferItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 32,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateAttrOrValues",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 33,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateFatPortalCat",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 34,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 35,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 36,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUploadPhoto",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 37,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewAllRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 38,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewDirectionRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 39,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewTeamRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 40,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "sellerUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 41,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "takeToWork",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 42,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "teamUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 43,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToClosed",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 44,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToRequireFix",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 45,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferInCheckToDeclined",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 46,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferInCheckToRequireChange",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 47,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferOnHoldToInWork",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 48,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferRequireChangeToInCheck",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 49,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferWaitCheckToInCheck",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 50,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "updateUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 51,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewAllDashboards",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 52,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewDashboardsByCommand",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 53,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewDashboardsByDirection",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 54,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewSplitterModerationRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ],
                        [
                            "id" => 55,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:05:12"
                        ]
                    ]
                ],

            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменить должность',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000004',
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'contentManager',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewUser]' => '0',
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
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 130,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
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
                            "id" => 169,
                            "user_id" => 4,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 177,
                            "user_id" => 4,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "admin",
                            "new_value" => "contentManager",
                            "date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 2,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "blockUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 3,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "categoryUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 4,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "coefUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 5,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "createUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 6,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "errorsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 7,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "excludedFieldsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 8,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "fieldsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 9,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "massEdit",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 10,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "priorityUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 11,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reasonsUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 12,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadAllUsers",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 13,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadMarketUsers",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 14,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "reportLoadYourTeam",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 15,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddAttrOrValues",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 16,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddFatPortalCat",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 17,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddNewItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 18,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateSC",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 19,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateSizeGrid",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 20,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateTags",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 21,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestAddUpdateVideo",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 22,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCheckHidden",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 23,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCreateRelated",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 24,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestCreate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 25,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestDeleteAttachments",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 26,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestGroupItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 27,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestStructureDesign",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 28,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestTransferItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 29,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateAttrOrValues",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 30,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateFatPortalCat",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 31,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdateItems",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 32,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 33,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestUploadPhoto",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 34,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewAllRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 35,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewDirectionRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 36,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "requestViewTeamRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 37,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "sellerUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 38,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "takeToWork",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 39,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "teamUpdate",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 40,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToClosed",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 41,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToRequireFix",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 42,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferInCheckToDeclined",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 43,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferInCheckToRequireChange",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 44,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferOnHoldToInWork",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 45,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferRequireChangeToInCheck",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 46,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferWaitCheckToInCheck",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 47,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "updateUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 48,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewAllDashboards",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 49,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewDashboardsByCommand",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 50,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewDashboardsByDirection",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 51,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewSplitterModerationRequests",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ],
                        [
                            "id" => 52,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "viewUser",
                            "old_value" => "1",
                            "new_value" => "0",
                            //"date" => "2020-09-20 12:22:24"
                        ]
                    ]
                ],

            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменить команду',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000004',
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'admin',
                'UserBpm[team]' => '1',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '1',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '1',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '1',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '1',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '1',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '1',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '1',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '1',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '1',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '1',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '1',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '1',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '1',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '1',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '1',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '1',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '1',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '1',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '1',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '1',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '1',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '1',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '1',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '1',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '1',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '1',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][updateUser]' => '1',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '1',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '1',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '1',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
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
                            "team" => 1,
                            "parent_id" => 1,
                            "position" => "admin",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "17",
                            "new_value" => "1",
//                            "date" => "2020-05-19 16:36:22"
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменить ДРФО',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000099',
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'admin',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '1',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '1',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '1',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '1',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '1',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '1',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '1',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '1',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '1',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '1',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '1',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '1',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '1',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '1',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '1',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '1',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '1',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '1',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '1',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '1',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '1',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '1',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '1',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '1',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '1',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '1',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][updateUser]' => '1',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '1',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '1',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '1',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
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
                            //"change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000099"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "drfo",
                            "old_value" => "'000000004",
                            "new_value" => "'000000099",
//                            "date" => "2020-05-19 16:36:22"
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменить руководителя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000004',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'admin',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '1',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '1',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '1',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '1',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '1',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '1',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '1',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '1',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '1',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '1',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '1',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '1',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '1',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '1',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '1',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '1',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '1',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '1',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '1',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '1',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '1',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '1',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '1',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '1',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '1',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '1',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][updateUser]' => '1',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '1',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '1',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '1',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
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
                            "parent_id" => 5,
                            "position" => "admin",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
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
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "parent_id",
                            "old_value" => "1. Система",
                            "new_value" => "5. Супервайзер Руководько 1",
//                            "date" => "2020-05-19 16:36:22"
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменить статус на заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case6.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000004',
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'admin',
                'UserBpm[status]' => '0',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '1',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '1',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '1',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '1',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '1',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '1',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '1',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '1',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '1',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '1',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '1',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '1',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '1',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '1',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '1',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '1',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '1',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '1',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '1',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '1',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '1',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '1',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '1',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '1',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '1',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '1',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][updateUser]' => '1',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '1',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '1',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '1',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
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
                            "status" => 0,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
//                            "change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
                            "name" => "Супервайзер Руководько 1",
                            "login" => "bpm_headSupervisor_1",
                            "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "headSupervisor",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            "change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000005"
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
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "status",
                            "old_value" => "1",
                            "new_value" => "0",
//                            "date" => "2020-05-19 16:36:22"
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Изменить статус на активный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case7.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '\'000000004',
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'admin',
                'UserBpm[status]' => '1',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '1',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '1',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '1',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '1',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '1',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][priorityUpdate]' => '0',
                'UserBpm[userPermissions][priorityUpdate]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reasonsUpdate]' => '1',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '1',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '1',
                'UserBpm[userPermissions][reportView]' => '0',
                'UserBpm[userPermissions][reportView]' => '1',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestAddAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestAddFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestAddNewItems]' => '0',
                'UserBpm[userPermissions][requestAddNewItems]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSC]' => '1',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '0',
                'UserBpm[userPermissions][requestAddUpdateSizeGrid]' => '1',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '0',
                'UserBpm[userPermissions][requestAddUpdateTags]' => '1',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '0',
                'UserBpm[userPermissions][requestAddUpdateVideo]' => '1',
                'UserBpm[userPermissions][requestCheckHidden]' => '0',
                'UserBpm[userPermissions][requestCheckHidden]' => '1',
                'UserBpm[userPermissions][requestCreateRelated]' => '0',
                'UserBpm[userPermissions][requestCreateRelated]' => '1',
                'UserBpm[userPermissions][requestCreate]' => '0',
                'UserBpm[userPermissions][requestCreate]' => '1',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '0',
                'UserBpm[userPermissions][requestDeleteAttachments]' => '1',
                'UserBpm[userPermissions][requestGroupItems]' => '0',
                'UserBpm[userPermissions][requestGroupItems]' => '1',
                'UserBpm[userPermissions][requestStructureDesign]' => '0',
                'UserBpm[userPermissions][requestStructureDesign]' => '1',
                'UserBpm[userPermissions][requestTransferItems]' => '0',
                'UserBpm[userPermissions][requestTransferItems]' => '1',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '0',
                'UserBpm[userPermissions][requestUpdateAttrOrValues]' => '1',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '0',
                'UserBpm[userPermissions][requestUpdateFatPortalCat]' => '1',
                'UserBpm[userPermissions][requestUpdateItems]' => '0',
                'UserBpm[userPermissions][requestUpdateItems]' => '1',
                'UserBpm[userPermissions][requestUpdate]' => '0',
                'UserBpm[userPermissions][requestUpdate]' => '1',
                'UserBpm[userPermissions][requestUploadPhoto]' => '0',
                'UserBpm[userPermissions][requestUploadPhoto]' => '1',
                'UserBpm[userPermissions][requestViewAllRequests]' => '0',
                'UserBpm[userPermissions][requestViewAllRequests]' => '1',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '1',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '1',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '1',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
                'UserBpm[userPermissions][teamUpdate]' => '1',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '0',
                'UserBpm[userPermissions][transferCompletedToClosed]' => '1',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '0',
                'UserBpm[userPermissions][transferCompletedToRequireFix]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][updateUser]' => '1',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '1',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '1',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '1',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
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
//                            "change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000004"
                        ],
                        [
                            "id" => 5,
                            "name" => "Супервайзер Руководько 1",
                            "login" => "bpm_headSupervisor_1",
                            "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "headSupervisor",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            "change_date" => "2020-05-19 16:36:22",
                            "drfo" => "'000000005"
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
                            "id" => 178,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ]
                    ],
                    "user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "status",
                            "old_value" => "0",
                            "new_value" => "1",
//                            "date" => "2020-05-19 16:36:22"
                        ]
                    ]
                ],
            ]
        ]
    ],
];
