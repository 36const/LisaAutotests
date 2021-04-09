<?php

return [
    "lisa_fixtures" => [
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "notification_settings" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//                "id" => 4,
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
//                "id" => 5,
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
        "auth.auth_item" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        "auth.auth_assignment" => [
            [
                "user_id" => 1,
                "item_name" => "createUser"
            ],
            [
                "user_id" => 1,
                "item_name" => "updateUser"
            ],
            [
                "user_id" => 1,
                "item_name" => "blockUser"
            ],
            [
                "user_id" => 1,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferRequireChangeToInCheck"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "user_id" => 1,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 1,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 1,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 1,
                "item_name" => "requestDeleteAttachments"
            ],
            [
                "user_id" => 1,
                "item_name" => "reportLoadAllUsers"
            ],
            [
                "user_id" => 1,
                "item_name" => "sellerUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "categoryUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "teamUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "coefUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "fieldsUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "reasonsUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "excludedFieldsUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "errorsUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 1,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 1,
                "item_name" => "priorityUpdate"
            ],
            [
                "user_id" => 1,
                "item_name" => "viewAllDashboards"
            ],
            [
                "user_id" => 2,
                "item_name" => "createUser"
            ],
            [
                "user_id" => 2,
                "item_name" => "updateUser"
            ],
            [
                "user_id" => 2,
                "item_name" => "blockUser"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferRequireChangeToInCheck"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "user_id" => 2,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 2,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 2,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestViewTeamRequests"
            ],
            [
                "user_id" => 2,
                "item_name" => "requestDeleteAttachments"
            ],
            [
                "user_id" => 2,
                "item_name" => "reportLoadAllUsers"
            ],
            [
                "user_id" => 2,
                "item_name" => "reportLoadMarketUsers"
            ],
            [
                "user_id" => 2,
                "item_name" => "reportLoadYourTeam"
            ],
            [
                "user_id" => 2,
                "item_name" => "sellerUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "categoryUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "teamUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "coefUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "fieldsUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "reasonsUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "excludedFieldsUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "errorsUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 2,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 2,
                "item_name" => "priorityUpdate"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewAllDashboards"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewDashboardsByDirection"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "user_id" => 2,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 4,
                "item_name" => "reportLoadAllUsers"
            ],
            [
                "user_id" => 4,
                "item_name" => "reportLoadMarketUsers"
            ],
            [
                "user_id" => 4,
                "item_name" => "reportLoadYourTeam"
            ],
            [
                "user_id" => 4,
                "item_name" => "errorsUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "sellerUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "categoryUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "teamUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "coefUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "fieldsUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "reasonsUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "excludedFieldsUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestViewOwnRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestViewDirectionRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestViewTeamRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestDeleteAttachments"
            ],
            [
                "user_id" => 4,
                "item_name" => "createUser"
            ],
            [
                "user_id" => 4,
                "item_name" => "updateUser"
            ],
            [
                "user_id" => 4,
                "item_name" => "blockUser"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferRequireChangeToInCheck"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "user_id" => 4,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 4,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 4,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 4,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 4,
                "item_name" => "priorityUpdate"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewAllDashboards"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewDashboardsByDirection"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewDashboardsByCommand"
            ],
            [
                "user_id" => 4,
                "item_name" => "viewOwnDashboards"
            ],
            [
                "user_id" => 5,
                "item_name" => "createUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "updateUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "blockUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "massEdit"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitCheckToInCheck"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInCheckToRequireChange"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferRequireChangeToInCheck"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInCheckToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferWaitWorkToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToOnHold"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToPartialComplete"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToCompleted"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferInWorkToDeclined"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferOnHoldToInWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferCompletedToRequireFix"
            ],
            [
                "user_id" => 5,
                "item_name" => "transferCompletedToClosed"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewUser"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestTransferItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestGroupItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUploadPhoto"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddFatPortalCat"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateFatPortalCat"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddAttrOrValues"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestStructureDesign"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateSC"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateVideo"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateSizeGrid"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddUpdateTags"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCreate"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdate"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCreateRelated"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestViewAllRequests"
            ],
            [
                "user_id" => 5,
                "item_name" => "reportView"
            ],
            [
                "user_id" => 5,
                "item_name" => "reportLoadMarketUsers"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewSplitterModerationRequests"
            ],
            [
                "user_id" => 5,
                "item_name" => "takeToWork"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestAddNewItems"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestCheckHidden"
            ],
            [
                "user_id" => 5,
                "item_name" => "requestUpdateAttrOrValues"
            ],
            [
                "user_id" => 5,
                "item_name" => "viewAllDashboards"
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
                "first_name" => "Куцан",
                "second_name" => "Константин",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
            [
                "id" => 2,
                "username" => "kutsan",
                "auth_key" => "WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo",
                "password_hash" => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
                "password_reset_token" => null,
                "email" => "kutsan@rozetka.com.ua",
                "created_at" => 1584396309,
                "updated_at" => 1584475046,
                "status" => 1,
                "color" => null,
                "first_name" => "Куцан ",
                "second_name" => "Константин ",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
        ],
    ],
];