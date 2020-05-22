<?php

return [
    "lisa_fixtures" => [
        "default_role_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/default_role_permissions.php',
        //"user_bpm" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/user_bpm.php',
        //"user_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/user_permissions.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "user_bpm" =>[
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
                "change_date" => "2020-05-19 16:36:22"
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
                //"id" => 2,
                "user_id" => 1,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 3,
                "user_id" => 1,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 4,
                "user_id" => 1,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 5,
                "user_id" => 1,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 6,
                "user_id" => 1,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 7,
                "user_id" => 1,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 8,
                "user_id" => 1,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 9,
                "user_id" => 1,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 10,
                "user_id" => 1,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 11,
                "user_id" => 1,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 12,
                "user_id" => 1,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 13,
                "user_id" => 1,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 14,
                "user_id" => 1,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 15,
                "user_id" => 1,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 16,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 17,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 18,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 19,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 20,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 21,
                "user_id" => 1,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 22,
                "user_id" => 1,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 23,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 24,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 25,
                "user_id" => 1,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 26,
                "user_id" => 1,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 27,
                "user_id" => 1,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 28,
                "user_id" => 1,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 29,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 30,
                "user_id" => 1,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 31,
                "user_id" => 1,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 32,
                "user_id" => 1,
                "permission_name" => "requestAppointManager"
            ],
            [
                //"id" => 33,
                "user_id" => 1,
                "permission_name" => "requestAppointSupervisor"
            ],
            [
                //"id" => 34,
                "user_id" => 1,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 35,
                "user_id" => 1,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 36,
                "user_id" => 1,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 37,
                "user_id" => 1,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 38,
                "user_id" => 1,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 39,
                "user_id" => 1,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 40,
                "user_id" => 1,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 41,
                "user_id" => 1,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 42,
                "user_id" => 1,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 43,
                "user_id" => 1,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 44,
                "user_id" => 1,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 45,
                "user_id" => 1,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 46,
                "user_id" => 1,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 47,
                "user_id" => 1,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 48,
                "user_id" => 1,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 49,
                "user_id" => 1,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 50,
                "user_id" => 1,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 51,
                "user_id" => 1,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 51,
                "user_id" => 1,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 52,
                "user_id" => 2,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 53,
                "user_id" => 2,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 54,
                "user_id" => 2,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 55,
                "user_id" => 2,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 56,
                "user_id" => 2,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 57,
                "user_id" => 2,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 58,
                "user_id" => 2,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 59,
                "user_id" => 2,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 60,
                "user_id" => 2,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 61,
                "user_id" => 2,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 62,
                "user_id" => 2,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 63,
                "user_id" => 2,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 64,
                "user_id" => 2,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 65,
                "user_id" => 2,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 66,
                "user_id" => 2,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 67,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 68,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 69,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 70,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 71,
                "user_id" => 2,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 72,
                "user_id" => 2,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 73,
                "user_id" => 2,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 74,
                "user_id" => 2,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 75,
                "user_id" => 2,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 76,
                "user_id" => 2,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 77,
                "user_id" => 2,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 78,
                "user_id" => 2,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 79,
                "user_id" => 2,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 80,
                "user_id" => 2,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 81,
                "user_id" => 2,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 82,
                "user_id" => 2,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 83,
                "user_id" => 2,
                "permission_name" => "requestAppointManager"
            ],
            [
                //"id" => 84,
                "user_id" => 2,
                "permission_name" => "requestAppointSupervisor"
            ],
            [
                //"id" => 85,
                "user_id" => 2,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 86,
                "user_id" => 2,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 87,
                "user_id" => 2,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 88,
                "user_id" => 2,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 89,
                "user_id" => 2,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 90,
                "user_id" => 2,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 91,
                "user_id" => 2,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 92,
                "user_id" => 2,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 93,
                "user_id" => 2,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 94,
                "user_id" => 2,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 95,
                "user_id" => 2,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 96,
                "user_id" => 2,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 97,
                "user_id" => 2,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 98,
                "user_id" => 2,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 99,
                "user_id" => 2,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 100,
                "user_id" => 2,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 101,
                "user_id" => 2,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 102,
                "user_id" => 2,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 103,
                "user_id" => 2,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 104,
                "user_id" => 2,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 105,
                "user_id" => 2,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 106,
                "user_id" => 2,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 107,
                "user_id" => 2,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 108,
                "user_id" => 2,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 109,
                "user_id" => 2,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 51,
                "user_id" => 2,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 110,
                "user_id" => 4,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 111,
                "user_id" => 4,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 112,
                "user_id" => 4,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 113,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 114,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 115,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 116,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 117,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 118,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 119,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 120,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 121,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 122,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 123,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 124,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 125,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 126,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 127,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 128,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 129,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 130,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 131,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 132,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 133,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 134,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 135,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 136,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 137,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 138,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 139,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 140,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 141,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 142,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 143,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 144,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 145,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 146,
                "user_id" => 4,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 147,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 148,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 149,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 150,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 151,
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 152,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 153,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 154,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 155,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 156,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 157,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 158,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 159,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 160,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 161,
                "user_id" => 4,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 162,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 51,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 163,
                "user_id" => 5,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 164,
                "user_id" => 5,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 165,
                "user_id" => 5,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 166,
                "user_id" => 5,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 167,
                "user_id" => 5,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 168,
                "user_id" => 5,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 169,
                "user_id" => 5,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 170,
                "user_id" => 5,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 171,
                "user_id" => 5,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 172,
                "user_id" => 5,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 173,
                "user_id" => 5,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 174,
                "user_id" => 5,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 175,
                "user_id" => 5,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 176,
                "user_id" => 5,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 177,
                "user_id" => 5,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 178,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 179,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 180,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 181,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 182,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 183,
                "user_id" => 5,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 184,
                "user_id" => 5,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 185,
                "user_id" => 5,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 186,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 187,
                "user_id" => 5,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 188,
                "user_id" => 5,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 189,
                "user_id" => 5,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 190,
                "user_id" => 5,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 191,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 192,
                "user_id" => 5,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 193,
                "user_id" => 5,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 194,
                "user_id" => 5,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 195,
                "user_id" => 5,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 196,
                "user_id" => 5,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 197,
                "user_id" => 5,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 198,
                "user_id" => 5,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 199,
                "user_id" => 5,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 200,
                "user_id" => 5,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 201,
                "user_id" => 5,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 51,
                "user_id" => 5,
                "permission_name" => "takeToWork"
            ],
        ]
    ],
];