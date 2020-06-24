<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменить должность, команду и руководителя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'headSupervisor',
                'UserBpm[team]' => '1',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][blockUser]' => '1',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][createUser]' => '1',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '1',
                'UserBpm[userPermissions][reportLoadYourTeam]' => '0',
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
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 4,
                            "name" => "Константин Куцан",
                            "login" => "kutsan.k",
                            "email" => "kutsan.k@rozetka.com.ua",
                            "team" => 1,
                            "parent_id" => 5,
                            "position" => "headSupervisor",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
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
                'UserBpm[parent_id]' => '1',
                'UserBpm[position]' => 'supervisor',
                'UserBpm[team]' => '17',
                'UserBpm[userPermissions][blockUser]' => '0',
                'UserBpm[userPermissions][categoryUpdate]' => '0',
                'UserBpm[userPermissions][coefUpdate]' => '0',
                'UserBpm[userPermissions][createUser]' => '0',
                'UserBpm[userPermissions][errorsUpdate]' => '0',
                'UserBpm[userPermissions][excludedFieldsUpdate]' => '0',
                'UserBpm[userPermissions][fieldsUpdate]' => '0',
                'UserBpm[userPermissions][massEdit]' => '0',
                'UserBpm[userPermissions][massEdit]' => '1',
                'UserBpm[userPermissions][reasonsUpdate]' => '0',
                'UserBpm[userPermissions][reportLoadAllUsers]' => '0',
                'UserBpm[userPermissions][reportLoadMarketUsers]' => '0',
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
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '0',
                'UserBpm[userPermissions][requestViewDirectionRequests]' => '1',
                'UserBpm[userPermissions][requestViewOwnRequests]' => '0',
                'UserBpm[userPermissions][requestViewTeamRequests]' => '0',
                'UserBpm[userPermissions][sellerUpdate]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '0',
                'UserBpm[userPermissions][takeToWork]' => '1',
                'UserBpm[userPermissions][teamUpdate]' => '0',
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                        [
                            "id" => 4,
                            "name" => "Константин Куцан",
                            "login" => "kutsan.k",
                            "email" => "kutsan.k@rozetka.com.ua",
                            "team" => 17,
                            "parent_id" => 1,
                            "position" => "supervisor",
                            "status" => 1,
                            "create_ts" => "2020-05-19 13:36:22",
                            "created_by" => 1,
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменить руководителя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменить статус на заблокированный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestBody' => [
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Изменить статус на активный',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'requestBody' => [
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
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '1',
                'UserBpm[userPermissions][viewUser]' => '0',
                'UserBpm[userPermissions][viewUser]' => '1',
                '_csrf-backend' => null
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
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
                            //"change_date" => "2020-05-19 16:36:22"
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
                            "change_date" => "2020-05-19 16:36:22"
                        ],
                    ],
                    "user_permissions" => [
                        [
                            //"id" => 1,
                            "user_id" => 1,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 3,
                            "user_id" => 1,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 5,
                            "user_id" => 1,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 7,
                            "user_id" => 1,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 9,
                            "user_id" => 1,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 11,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 13,
                            "user_id" => 1,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 15,
                            "user_id" => 1,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 17,
                            "user_id" => 1,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 19,
                            "user_id" => 1,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 21,
                            "user_id" => 1,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 23,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 25,
                            "user_id" => 1,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 27,
                            "user_id" => 1,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 29,
                            "user_id" => 1,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 31,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 33,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 35,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 37,
                            "user_id" => 1,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 39,
                            "user_id" => 1,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 41,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 43,
                            "user_id" => 1,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 45,
                            "user_id" => 1,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 47,
                            "user_id" => 1,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 49,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 51,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 53,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 55,
                            "user_id" => 1,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 57,
                            "user_id" => 1,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 59,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 61,
                            "user_id" => 1,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 63,
                            "user_id" => 1,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 65,
                            "user_id" => 1,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 67,
                            "user_id" => 1,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 69,
                            "user_id" => 1,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 71,
                            "user_id" => 1,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 75,
                            "user_id" => 1,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 77,
                            "user_id" => 1,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 79,
                            "user_id" => 1,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 83,
                            "user_id" => 1,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 929,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 938,
                            "user_id" => 1,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 991,
                            "user_id" => 1,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 994,
                            "user_id" => 1,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 997,
                            "user_id" => 1,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1000,
                            "user_id" => 1,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1003,
                            "user_id" => 1,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1006,
                            "user_id" => 1,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1009,
                            "user_id" => 1,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1100,
                            "user_id" => 1,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2220,
                            "user_id" => 1,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2325,
                            "user_id" => 1,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2564,
                            "user_id" => 1,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 2,
                            "user_id" => 2,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 4,
                            "user_id" => 2,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 6,
                            "user_id" => 2,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 8,
                            "user_id" => 2,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 10,
                            "user_id" => 2,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 12,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 14,
                            "user_id" => 2,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 16,
                            "user_id" => 2,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 18,
                            "user_id" => 2,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 20,
                            "user_id" => 2,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 22,
                            "user_id" => 2,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 24,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 26,
                            "user_id" => 2,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 28,
                            "user_id" => 2,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 30,
                            "user_id" => 2,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 32,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 34,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 36,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 38,
                            "user_id" => 2,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 40,
                            "user_id" => 2,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 42,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 44,
                            "user_id" => 2,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 46,
                            "user_id" => 2,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 48,
                            "user_id" => 2,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 50,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 52,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 54,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 56,
                            "user_id" => 2,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 58,
                            "user_id" => 2,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 60,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 62,
                            "user_id" => 2,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 64,
                            "user_id" => 2,
                            "permission_name" => "requestAppointManager"
                        ],
                        [
                            //"id" => 66,
                            "user_id" => 2,
                            "permission_name" => "requestAppointSupervisor"
                        ],
                        [
                            //"id" => 68,
                            "user_id" => 2,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 70,
                            "user_id" => 2,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 72,
                            "user_id" => 2,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 73,
                            "user_id" => 2,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 74,
                            "user_id" => 2,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 76,
                            "user_id" => 2,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 78,
                            "user_id" => 2,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 80,
                            "user_id" => 2,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 81,
                            "user_id" => 2,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 82,
                            "user_id" => 2,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 927,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 931,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 934,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 936,
                            "user_id" => 2,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 940,
                            "user_id" => 2,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 960,
                            "user_id" => 2,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 989,
                            "user_id" => 2,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 992,
                            "user_id" => 2,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 995,
                            "user_id" => 2,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 998,
                            "user_id" => 2,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1001,
                            "user_id" => 2,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1004,
                            "user_id" => 2,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1007,
                            "user_id" => 2,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1098,
                            "user_id" => 2,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 2222,
                            "user_id" => 2,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2327,
                            "user_id" => 2,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2562,
                            "user_id" => 2,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1048,
                            "user_id" => 4,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            //"id" => 1049,
                            "user_id" => 4,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 1050,
                            "user_id" => 4,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 1051,
                            "user_id" => 4,
                            "permission_name" => "errorsUpdate"
                        ],
                        [
                            //"id" => 1052,
                            "user_id" => 4,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            //"id" => 1053,
                            "user_id" => 4,
                            "permission_name" => "categoryUpdate"
                        ],
                        [
                            //"id" => 1054,
                            "user_id" => 4,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            //"id" => 1055,
                            "user_id" => 4,
                            "permission_name" => "coefUpdate"
                        ],
                        [
                            //"id" => 1056,
                            "user_id" => 4,
                            "permission_name" => "fieldsUpdate"
                        ],
                        [
                            //"id" => 1057,
                            "user_id" => 4,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            //"id" => 1058,
                            "user_id" => 4,
                            "permission_name" => "excludedFieldsUpdate"
                        ],
                        [
                            //"id" => 1059,
                            "user_id" => 4,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 1060,
                            "user_id" => 4,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 1061,
                            "user_id" => 4,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 1062,
                            "user_id" => 4,
                            "permission_name" => "requestDeleteAttachments"
                        ],
                        [
                            //"id" => 1333,
                            "user_id" => 4,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1334,
                            "user_id" => 4,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1335,
                            "user_id" => 4,
                            "permission_name" => "blockUser"
                        ],
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
                        [
                            //"id" => 1369,
                            "user_id" => 4,
                            "permission_name" => "requestViewAllRequests"
                        ],
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
                        [
                            //"id" => 2328,
                            "user_id" => 4,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2563,
                            "user_id" => 4,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            //"id" => 1064,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 1065,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 1066,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 1082,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 1083,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 1084,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 1086,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 1087,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 1088,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 1089,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 1090,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 1091,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 1092,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 1093,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 1094,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            //"id" => 1095,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 1389,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 1391,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 1392,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 1393,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 1394,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 1396,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 1397,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 1398,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 1400,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 1401,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 1402,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 1403,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 1404,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 1417,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 1418,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 1419,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 1420,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 1421,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 1423,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 2224,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 2329,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 2790,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 2791,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 2792,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],        ]
                ],
            ]
        ]
    ],
];
