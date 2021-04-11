<?php

return [
    "lisa_fixtures" => [
        "auth.teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        "auth.auth_item" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
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
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000004"
            ],
            [
                //"id" => 5,
                "name" => "Супервайзер Руководько 1",
                "login" => "bpm_headSupervisor_1",
                "email" => "bpm_headSupervisor_1@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 4,
                "position" => "headSupervisor",
                "status" => 0,
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
            ],
        ]
    ],

    "gomer_fixtures" => [
        "users" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php',
    ],
];