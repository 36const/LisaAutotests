<?php

return [
    "lisa_fixtures" => [
        "default_role_permissions" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/default_role_permissions.php',
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
                //"id" => 1367,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 1368,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
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
                //"id" => 1372,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 1374,
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 1375,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 1376,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 1377,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 1378,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 1379,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 1380,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 1381,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 1382,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 1383,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 1384,
                "user_id" => 4,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 2223,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 2272,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 2328,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 1386,
                "user_id" => 5,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 1387,
                "user_id" => 5,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 1388,
                "user_id" => 5,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 1389,
                "user_id" => 5,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 1390,
                "user_id" => 5,
                "permission_name" => "requestAddNewItems"
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
                //"id" => 1395,
                "user_id" => 5,
                "permission_name" => "requestCheckHidden"
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
                //"id" => 1399,
                "user_id" => 5,
                "permission_name" => "requestUpdateAttrOrValues"
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
                //"id" => 1405,
                "user_id" => 5,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 1406,
                "user_id" => 5,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 1407,
                "user_id" => 5,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 1408,
                "user_id" => 5,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 1409,
                "user_id" => 5,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 1410,
                "user_id" => 5,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 1411,
                "user_id" => 5,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 1412,
                "user_id" => 5,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 1413,
                "user_id" => 5,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 1414,
                "user_id" => 5,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 1415,
                "user_id" => 5,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 1416,
                "user_id" => 5,
                "permission_name" => "transferCompletedToClosed"
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
                //"id" => 1422,
                "user_id" => 5,
                "permission_name" => "massEdit"
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
        ]
    ],
];