<?php

return [
    "lisa_fixtures" => [
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "roles" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/roles.php',
        "default_role_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/default_role_permissions.php',
        "user_bpm" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/user_bpm.php',
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
                //"id" => 52,
                "user_id" => 1,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 53,
                "user_id" => 1,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 54,
                "user_id" => 1,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 55,
                "user_id" => 2,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 56,
                "user_id" => 2,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 57,
                "user_id" => 2,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 58,
                "user_id" => 2,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 59,
                "user_id" => 2,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 60,
                "user_id" => 2,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 61,
                "user_id" => 2,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 62,
                "user_id" => 2,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 63,
                "user_id" => 2,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 64,
                "user_id" => 2,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 65,
                "user_id" => 2,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 66,
                "user_id" => 2,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 67,
                "user_id" => 2,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 68,
                "user_id" => 2,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 69,
                "user_id" => 2,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 70,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 71,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 72,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 73,
                "user_id" => 2,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 74,
                "user_id" => 2,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 75,
                "user_id" => 2,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 76,
                "user_id" => 2,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 77,
                "user_id" => 2,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 78,
                "user_id" => 2,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 79,
                "user_id" => 2,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 80,
                "user_id" => 2,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 81,
                "user_id" => 2,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 82,
                "user_id" => 2,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 83,
                "user_id" => 2,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 84,
                "user_id" => 2,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 85,
                "user_id" => 2,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 86,
                "user_id" => 2,
                "permission_name" => "requestAppointManager"
            ],
            [
                //"id" => 87,
                "user_id" => 2,
                "permission_name" => "requestAppointSupervisor"
            ],
            [
                //"id" => 88,
                "user_id" => 2,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 89,
                "user_id" => 2,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 90,
                "user_id" => 2,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 91,
                "user_id" => 2,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 92,
                "user_id" => 2,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 93,
                "user_id" => 2,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 94,
                "user_id" => 2,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 95,
                "user_id" => 2,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 96,
                "user_id" => 2,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 97,
                "user_id" => 2,
                "permission_name" => "requestDeleteAttachments"
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
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 102,
                "user_id" => 2,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 103,
                "user_id" => 2,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 104,
                "user_id" => 2,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 105,
                "user_id" => 2,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 106,
                "user_id" => 2,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 107,
                "user_id" => 2,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 108,
                "user_id" => 2,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 109,
                "user_id" => 2,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 110,
                "user_id" => 2,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 111,
                "user_id" => 2,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 112,
                "user_id" => 2,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 113,
                "user_id" => 2,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 114,
                "user_id" => 2,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 115,
                "user_id" => 2,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 116,
                "user_id" => 2,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 117,
                "user_id" => 2,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 118,
                "user_id" => 2,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 119,
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 120,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 121,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 122,
                "user_id" => 4,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 123,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 124,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 125,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 126,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 127,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 128,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 129,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 130,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 131,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 132,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 133,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 134,
                "user_id" => 4,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 135,
                "user_id" => 4,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 136,
                "user_id" => 4,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 137,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 138,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 139,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 140,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 141,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 142,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 143,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 144,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 145,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 146,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 147,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 148,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 149,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 150,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 151,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 152,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 153,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 154,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 155,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 156,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 157,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 158,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 159,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 160,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 161,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 162,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 163,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 164,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 165,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 166,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 167,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 168,
                "user_id" => 4,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 169,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 170,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 171,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 172,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 173,
                "user_id" => 4,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 174,
                "user_id" => 4,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 175,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 176,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 177,
                "user_id" => 4,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 178,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 179,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 180,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 181,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 182,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 183,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 184,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 185,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 186,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 187,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 188,
                "user_id" => 5,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 189,
                "user_id" => 5,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 190,
                "user_id" => 5,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 191,
                "user_id" => 5,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 192,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 193,
                "user_id" => 5,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 194,
                "user_id" => 5,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 195,
                "user_id" => 5,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 196,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 197,
                "user_id" => 5,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 198,
                "user_id" => 5,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 199,
                "user_id" => 5,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 200,
                "user_id" => 5,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 201,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 202,
                "user_id" => 5,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 203,
                "user_id" => 5,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 204,
                "user_id" => 5,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 205,
                "user_id" => 5,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 206,
                "user_id" => 5,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 207,
                "user_id" => 5,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 208,
                "user_id" => 5,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 209,
                "user_id" => 5,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 210,
                "user_id" => 5,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 211,
                "user_id" => 5,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 212,
                "user_id" => 5,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 213,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 214,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 215,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 216,
                "user_id" => 5,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 217,
                "user_id" => 5,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 218,
                "user_id" => 5,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 219,
                "user_id" => 5,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 220,
                "user_id" => 5,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 221,
                "user_id" => 5,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 222,
                "user_id" => 5,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 223,
                "user_id" => 5,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 224,
                "user_id" => 5,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 225,
                "user_id" => 5,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 226,
                "user_id" => 5,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 227,
                "user_id" => 5,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 228,
                "user_id" => 5,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 229,
                "user_id" => 5,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 230,
                "user_id" => 5,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 231,
                "user_id" => 5,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 232,
                "user_id" => 5,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 233,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 234,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 235,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 236,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 237,
                "user_id" => 5,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 238,
                "user_id" => 5,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 239,
                "user_id" => 6,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 240,
                "user_id" => 6,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 241,
                "user_id" => 6,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 242,
                "user_id" => 6,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 243,
                "user_id" => 6,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 244,
                "user_id" => 6,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 245,
                "user_id" => 6,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 246,
                "user_id" => 6,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 247,
                "user_id" => 6,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 248,
                "user_id" => 6,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 249,
                "user_id" => 6,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 250,
                "user_id" => 6,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 251,
                "user_id" => 6,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 252,
                "user_id" => 6,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 253,
                "user_id" => 6,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 254,
                "user_id" => 6,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 255,
                "user_id" => 6,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 256,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 257,
                "user_id" => 6,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 258,
                "user_id" => 6,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 259,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 260,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 261,
                "user_id" => 6,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 262,
                "user_id" => 6,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 263,
                "user_id" => 6,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 264,
                "user_id" => 6,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 265,
                "user_id" => 6,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 266,
                "user_id" => 6,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 267,
                "user_id" => 6,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 268,
                "user_id" => 6,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 269,
                "user_id" => 6,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 270,
                "user_id" => 6,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 271,
                "user_id" => 6,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 272,
                "user_id" => 6,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 273,
                "user_id" => 6,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 274,
                "user_id" => 6,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 275,
                "user_id" => 6,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 276,
                "user_id" => 6,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 277,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 278,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 279,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 280,
                "user_id" => 6,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 281,
                "user_id" => 6,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 282,
                "user_id" => 6,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 283,
                "user_id" => 6,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 284,
                "user_id" => 6,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 285,
                "user_id" => 7,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 286,
                "user_id" => 7,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 287,
                "user_id" => 7,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 288,
                "user_id" => 7,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 289,
                "user_id" => 8,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 290,
                "user_id" => 8,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 291,
                "user_id" => 8,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 292,
                "user_id" => 8,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 293,
                "user_id" => 8,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 294,
                "user_id" => 8,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 295,
                "user_id" => 8,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 296,
                "user_id" => 8,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 297,
                "user_id" => 8,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 298,
                "user_id" => 8,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 299,
                "user_id" => 8,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 300,
                "user_id" => 8,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 301,
                "user_id" => 8,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 302,
                "user_id" => 8,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 303,
                "user_id" => 8,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 304,
                "user_id" => 8,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 305,
                "user_id" => 8,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 306,
                "user_id" => 8,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 307,
                "user_id" => 8,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 308,
                "user_id" => 8,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 309,
                "user_id" => 8,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 310,
                "user_id" => 8,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 311,
                "user_id" => 8,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 312,
                "user_id" => 8,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 313,
                "user_id" => 8,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 314,
                "user_id" => 8,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 315,
                "user_id" => 8,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 316,
                "user_id" => 8,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 317,
                "user_id" => 8,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 318,
                "user_id" => 8,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 319,
                "user_id" => 8,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 320,
                "user_id" => 8,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 321,
                "user_id" => 8,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 322,
                "user_id" => 8,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 323,
                "user_id" => 8,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 324,
                "user_id" => 8,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 325,
                "user_id" => 8,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 326,
                "user_id" => 8,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 327,
                "user_id" => 8,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 328,
                "user_id" => 8,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 329,
                "user_id" => 8,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 330,
                "user_id" => 8,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 331,
                "user_id" => 8,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 332,
                "user_id" => 8,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 333,
                "user_id" => 8,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 334,
                "user_id" => 8,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 335,
                "user_id" => 9,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 336,
                "user_id" => 9,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 337,
                "user_id" => 9,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 338,
                "user_id" => 9,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 339,
                "user_id" => 9,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 340,
                "user_id" => 9,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 341,
                "user_id" => 9,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 342,
                "user_id" => 9,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 343,
                "user_id" => 9,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 344,
                "user_id" => 9,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 345,
                "user_id" => 9,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 346,
                "user_id" => 9,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 347,
                "user_id" => 9,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 348,
                "user_id" => 9,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 349,
                "user_id" => 9,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 350,
                "user_id" => 9,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 351,
                "user_id" => 9,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 352,
                "user_id" => 9,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 353,
                "user_id" => 9,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 354,
                "user_id" => 9,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 355,
                "user_id" => 9,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 356,
                "user_id" => 9,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 357,
                "user_id" => 9,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 358,
                "user_id" => 9,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 359,
                "user_id" => 9,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 360,
                "user_id" => 9,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 361,
                "user_id" => 9,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 362,
                "user_id" => 9,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 363,
                "user_id" => 9,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 364,
                "user_id" => 9,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 365,
                "user_id" => 9,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 366,
                "user_id" => 9,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 367,
                "user_id" => 9,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 368,
                "user_id" => 9,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 369,
                "user_id" => 9,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 370,
                "user_id" => 9,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 371,
                "user_id" => 9,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 372,
                "user_id" => 9,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 373,
                "user_id" => 9,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 374,
                "user_id" => 9,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 375,
                "user_id" => 9,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 376,
                "user_id" => 9,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 377,
                "user_id" => 9,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 378,
                "user_id" => 9,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 379,
                "user_id" => 9,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 380,
                "user_id" => 9,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 381,
                "user_id" => 10,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 382,
                "user_id" => 10,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 383,
                "user_id" => 10,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 384,
                "user_id" => 10,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 385,
                "user_id" => 10,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 386,
                "user_id" => 10,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 387,
                "user_id" => 10,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 388,
                "user_id" => 10,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 389,
                "user_id" => 10,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 390,
                "user_id" => 10,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 391,
                "user_id" => 10,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 392,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 393,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 394,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 395,
                "user_id" => 10,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 396,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 397,
                "user_id" => 10,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 398,
                "user_id" => 10,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 399,
                "user_id" => 10,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 400,
                "user_id" => 10,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 401,
                "user_id" => 10,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 402,
                "user_id" => 10,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 403,
                "user_id" => 10,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 404,
                "user_id" => 10,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 405,
                "user_id" => 10,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 406,
                "user_id" => 10,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 407,
                "user_id" => 10,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 408,
                "user_id" => 10,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 409,
                "user_id" => 10,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 410,
                "user_id" => 10,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 411,
                "user_id" => 10,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 412,
                "user_id" => 10,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 413,
                "user_id" => 10,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 414,
                "user_id" => 10,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 415,
                "user_id" => 10,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 416,
                "user_id" => 10,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 417,
                "user_id" => 10,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 418,
                "user_id" => 10,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 419,
                "user_id" => 10,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 420,
                "user_id" => 10,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 421,
                "user_id" => 10,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 422,
                "user_id" => 10,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 423,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 424,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 425,
                "user_id" => 10,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 426,
                "user_id" => 10,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 427,
                "user_id" => 10,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 428,
                "user_id" => 10,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 429,
                "user_id" => 11,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 430,
                "user_id" => 11,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 431,
                "user_id" => 11,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 432,
                "user_id" => 11,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 433,
                "user_id" => 11,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 434,
                "user_id" => 11,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 435,
                "user_id" => 11,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 436,
                "user_id" => 11,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 437,
                "user_id" => 11,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 438,
                "user_id" => 11,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 449,
                "user_id" => 11,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 450,
                "user_id" => 11,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 451,
                "user_id" => 11,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 452,
                "user_id" => 11,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 439,
                "user_id" => 12,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 440,
                "user_id" => 12,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 441,
                "user_id" => 12,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 442,
                "user_id" => 12,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 443,
                "user_id" => 12,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 444,
                "user_id" => 12,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 445,
                "user_id" => 12,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 446,
                "user_id" => 12,
                "permission_name" => "viewOwnDashboards"
            ],
            [
                //"id" => 447,
                "user_id" => 12,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 448,
                "user_id" => 12,
                "permission_name" => "transferPartialCompleteToInWork"
            ]
        ],
    ],
    "gomer_fixtures" => [
        "users" => include \rzk\FixtureController::getFixtureDir() . 'gomer_fixtures/users.php',
    ],
];