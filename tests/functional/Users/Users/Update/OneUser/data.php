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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferCompletedToInWork]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewUser]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "17",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 44,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToInWork",
                            "old_value" => "0",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 48,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferPartialCompleteToInWork",
                            "old_value" => "0",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferCompletedToInWork]' => '1',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '1',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToInWork]' => '1',
                'UserBpm[userPermissions][updateUser]' => '0',
                'UserBpm[userPermissions][viewAllDashboards]' => '0',
                'UserBpm[userPermissions][viewDashboardsByCommand]' => '0',
                'UserBpm[userPermissions][viewDashboardsByDirection]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '0',
                'UserBpm[userPermissions][viewOwnDashboards]' => '1',
                'UserBpm[userPermissions][viewSplitterModerationRequests]' => '0',
                'UserBpm[userPermissions][viewUser]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferCompletedToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "position",
                            "old_value" => "admin",
                            "new_value" => "contentManager",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 41,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferCompletedToInWork",
                            "old_value" => "0",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
                        ],
                        [
                            "id" => 45,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "transferPartialCompleteToInWork",
                            "old_value" => "0",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
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
                'UserBpm[userPermissions][viewUser]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
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
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
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
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewUser"
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
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "massEdit"
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
                            "item_name" => "priorityUpdate"
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
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "team",
                            "old_value" => "17",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
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
                'UserBpm[userPermissions][viewUser]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
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
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
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
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewUser"
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
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "massEdit"
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
                            "item_name" => "priorityUpdate"
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
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "drfo",
                            "old_value" => "'000000004",
                            "new_value" => "'000000099",
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
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
                'UserBpm[userPermissions][viewUser]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
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
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
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
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewUser"
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
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "massEdit"
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
                            "item_name" => "priorityUpdate"
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
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "parent_id",
                            "old_value" => "1. Система",
                            "new_value" => "5. Супервайзер Руководько 1",
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
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
                'UserBpm[userPermissions][viewUser]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
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
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
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
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewUser"
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
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "massEdit"
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
                            "item_name" => "priorityUpdate"
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
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "status",
                            "old_value" => "1",
                            "new_value" => "0",
                            "date >=" => date("Y-m-d"),
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
                'UserBpm[userPermissions][transferCompletedToInWork]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferInCheckToDeclined]' => '1',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferInCheckToRequireChange]' => '1',
                'UserBpm[userPermissions][transferInCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '0',
                'UserBpm[userPermissions][transferInWorkToCompleted]' => '1',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '0',
                'UserBpm[userPermissions][transferInWorkToDeclined]' => '1',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '0',
                'UserBpm[userPermissions][transferInWorkToOnHold]' => '1',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '0',
                'UserBpm[userPermissions][transferInWorkToPartialComplete]' => '1',
                'UserBpm[userPermissions][transferInWorkToWaitWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '0',
                'UserBpm[userPermissions][transferOnHoldToInWork]' => '1',
                'UserBpm[userPermissions][transferPartialCompleteToClosed]' => '0',
                'UserBpm[userPermissions][transferPartialCompleteToInWork]' => '0',
                'UserBpm[userPermissions][transferRequireChangeToWaitCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToDeclined]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToInCheck]' => '1',
                'UserBpm[userPermissions][transferWaitCheckToRequireChange]' => '0',
                'UserBpm[userPermissions][transferWaitCheckToWaitWork]' => '0',
                'UserBpm[userPermissions][transferWaitWorkToDeclined]' => '0',
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
                'UserBpm[userPermissions][viewUser]' => '1'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.users" => [
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
                            "change_date >=" => date("Y-m-d"),
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
                    "auth.auth_assignment" => [
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 1,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "requestDeleteAttachments"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadAllUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reportLoadYourTeam"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "sellerUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "categoryUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "teamUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "coefUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "fieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "reasonsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "excludedFieldsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "errorsUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "priorityUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewAllDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
                            "item_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 2,
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
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "requestViewDirectionRequests"
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
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "viewUser"
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
                            "item_name" => "transferRequireChangeToInCheck"
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
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 4,
                            "item_name" => "massEdit"
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
                            "item_name" => "priorityUpdate"
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
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "createUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "updateUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "blockUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "massEdit"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "transferCompletedToClosed"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewUser"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdate"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportView"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "takeToWork"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "created_at" => null,
                            "user_id" => 5,
                            "item_name" => "viewAllDashboards"
                        ]
                    ],
                    "auth.user_changing_history" => [
                        [
                            "id" => 1,
                            "changed_user_id" => 4,
                            "changed_user_login" => "kutsan.k",
                            "changer_id" => 4,
                            "changer_login" => "kutsan.k",
                            "changed_field" => "status",
                            "old_value" => "0",
                            "new_value" => "1",
                            "date >=" => date("Y-m-d"),
                        ]
                    ]
                ],
            ]
        ]
    ],
];
