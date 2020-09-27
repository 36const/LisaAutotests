<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'После добавления пермишенов должности, они добавились и у всех пользователей этой должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/roles/update?id=5',
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][24]' => '1',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][25]' => '1',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][26]' => '1',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][3]' => '1',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][52]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][62]' => '0',
                'RoleBpm[rolePermissions][62]' => '1',
                'RoleBpm[rolePermissions][63]' => '0',
                'RoleBpm[rolePermissions][64]' => '0',
                'RoleBpm[rolePermissions][65]' => '0',
                'RoleBpm[rolePermissions][65]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
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
                        ],
                        [
                            "id" => 219,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 11,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 12,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 12,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 12,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 11,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 12,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 11,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 12,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 11,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 12,
                            "permission_name" => "viewAllDashboards"
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 1,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 2,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 3,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 4,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 5,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 6,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 7,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 8,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 9,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 10,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 11,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 12,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 13,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 14,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 15,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 16,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 17,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 18,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 19,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 20,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 21,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 22,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 34,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 35,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 36,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 37,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 38,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 39,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 40,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 41,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 42,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 43,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 44,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 45,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 46,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 47,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 48,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 49,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 57,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 58,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 59,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 65,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 66,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 67,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 68,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 69,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 70,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 71,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 72,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 73,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 74,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 75,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 76,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 77,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 78,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 79,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 80,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 81,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 82,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 83,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 84,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 85,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 86,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 87,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 88,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 89,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 90,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 91,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 92,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 93,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 94,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 95,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 96,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 97,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 98,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 99,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 100,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 101,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 102,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 103,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 104,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 105,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 106,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 107,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 108,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 109,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 110,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 111,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 112,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 113,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 114,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 115,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 116,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 117,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 118,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 119,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 120,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 121,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 122,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 123,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 124,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 125,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 126,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 127,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 128,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 129,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 130,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 131,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 132,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 133,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 134,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 135,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 136,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 137,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 138,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 139,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 140,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 141,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 142,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 143,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 144,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 145,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 146,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 147,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 148,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 149,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 150,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 151,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 152,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 153,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 154,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 155,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 156,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 157,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 158,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 159,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 160,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 161,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 162,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 163,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 164,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 165,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 166,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 167,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 168,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 169,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 170,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 171,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 172,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 173,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 174,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 175,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 176,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 177,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 178,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 179,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 180,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 181,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 182,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 183,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 184,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 185,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 186,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 187,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 188,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 189,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 190,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 191,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 192,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 193,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 194,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 195,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 196,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 197,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 198,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 199,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 200,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 201,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 202,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 203,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 204,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 205,
                            "role_id" => 5,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 206,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 207,
                            "role_id" => 5,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 208,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 209,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 210,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 211,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 212,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 213,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 214,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 215,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 216,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 217,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 218,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 219,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 220,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 221,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 222,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 223,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 224,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 225,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 226,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 227,
                            "role_id" => 6,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 228,
                            "role_id" => 6,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 229,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 230,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 231,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 232,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 233,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 234,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 235,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 236,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 237,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 238,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 239,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 240,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 241,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 242,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 243,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 244,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 245,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 246,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 247,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 248,
                            "role_id" => 7,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 249,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 250,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 251,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 252,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 253,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 254,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 255,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 256,
                            "role_id" => 8,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 257,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 258,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 259,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 260,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 261,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 262,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 263,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 264,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 265,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 266,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 267,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 268,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 269,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 270,
                            "role_id" => 9,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 271,
                            "role_id" => 10,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 272,
                            "role_id" => 5,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 273,
                            "role_id" => 5,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 274,
                            "role_id" => 5,
                            "permission_id" => 62
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'После снятия пермишенов должности, они снялись и у всех пользователей этой должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => '/bpm/roles/update?id=5',
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][24]' => '1',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][25]' => '1',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][62]' => '0',
                'RoleBpm[rolePermissions][63]' => '0',
                'RoleBpm[rolePermissions][64]' => '0',
                'RoleBpm[rolePermissions][65]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
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
                        ],
                        [
                            "id" => 219,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ]
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 1,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 2,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 3,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 4,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 5,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 6,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 7,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 8,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 9,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 10,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 11,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 12,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 13,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 14,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 15,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 16,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 17,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 18,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 19,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 20,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 21,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 22,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 34,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 35,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 36,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 37,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 38,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 39,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 40,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 41,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 42,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 43,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 44,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 45,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 46,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 47,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 48,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 49,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 57,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 58,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 59,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 65,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 66,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 67,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 68,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 69,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 70,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 71,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 72,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 73,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 74,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 75,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 76,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 77,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 78,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 79,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 80,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 81,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 82,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 83,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 84,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 85,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 86,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 87,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 88,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 89,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 90,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 91,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 92,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 93,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 94,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 95,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 96,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 97,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 98,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 99,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 100,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 101,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 102,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 103,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 104,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 105,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 106,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 107,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 108,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 109,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 110,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 111,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 112,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 113,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 114,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 115,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 116,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 117,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 118,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 119,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 120,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 121,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 122,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 123,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 124,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 125,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 126,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 127,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 128,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 129,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 130,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 131,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 132,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 133,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 134,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 135,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 136,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 137,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 138,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 139,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 140,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 141,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 142,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 143,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 144,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 145,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 146,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 147,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 148,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 149,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 150,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 151,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 152,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 153,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 154,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 155,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 156,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 157,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 158,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 159,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 160,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 161,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 162,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 163,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 164,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 165,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 166,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 167,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 168,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 169,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 170,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 171,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 172,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 173,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 174,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 175,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 176,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 177,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 178,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 179,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 180,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 181,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 182,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 183,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 184,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 185,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 186,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 187,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 188,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 189,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 190,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 191,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 192,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 193,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 194,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 195,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 196,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 197,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 198,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 199,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 200,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 201,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 203,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 204,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 208,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 209,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 210,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 211,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 212,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 213,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 214,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 215,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 216,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 217,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 218,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 219,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 220,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 221,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 222,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 223,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 224,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 225,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 226,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 227,
                            "role_id" => 6,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 228,
                            "role_id" => 6,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 229,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 230,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 231,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 232,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 233,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 234,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 235,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 236,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 237,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 238,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 239,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 240,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 241,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 242,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 243,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 244,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 245,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 246,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 247,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 248,
                            "role_id" => 7,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 249,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 250,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 251,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 252,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 253,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 254,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 255,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 256,
                            "role_id" => 8,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 257,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 258,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 259,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 260,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 261,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 262,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 263,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 264,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 265,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 266,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 267,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 268,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 269,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 270,
                            "role_id" => 9,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 271,
                            "role_id" => 10,
                            "permission_id" => 55
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'После изменения пермишенов должности, индивидуально проставленные пермишены не удалились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'url' => '/bpm/roles/update?id=5',
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][24]' => '1',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][25]' => '1',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][26]' => '1',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][3]' => '1',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][52]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][62]' => '0',
                'RoleBpm[rolePermissions][62]' => '1',
                'RoleBpm[rolePermissions][63]' => '0',
                'RoleBpm[rolePermissions][64]' => '0',
                'RoleBpm[rolePermissions][65]' => '0',
                'RoleBpm[rolePermissions][65]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
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
                        ],
                        [
                            "id" => 219,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 11,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 12,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 12,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 12,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 12,
                            "permission_name" => "reportLoadAllUsers"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 12,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 12,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 11,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 12,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 11,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 290,
                            "user_id" => 12,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 291,
                            "user_id" => 11,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 292,
                            "user_id" => 12,
                            "permission_name" => "viewAllDashboards"
                        ],
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 1,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 2,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 3,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 4,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 5,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 6,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 7,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 8,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 9,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 10,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 11,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 12,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 13,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 14,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 15,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 16,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 17,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 18,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 19,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 20,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 21,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 22,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 34,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 35,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 36,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 37,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 38,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 39,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 40,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 41,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 42,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 43,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 44,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 45,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 46,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 47,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 48,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 49,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 57,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 58,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 59,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 65,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 66,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 67,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 68,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 69,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 70,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 71,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 72,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 73,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 74,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 75,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 76,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 77,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 78,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 79,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 80,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 81,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 82,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 83,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 84,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 85,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 86,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 87,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 88,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 89,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 90,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 91,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 92,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 93,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 94,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 95,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 96,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 97,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 98,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 99,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 100,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 101,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 102,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 103,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 104,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 105,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 106,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 107,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 108,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 109,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 110,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 111,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 112,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 113,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 114,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 115,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 116,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 117,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 118,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 119,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 120,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 121,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 122,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 123,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 124,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 125,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 126,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 127,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 128,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 129,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 130,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 131,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 132,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 133,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 134,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 135,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 136,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 137,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 138,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 139,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 140,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 141,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 142,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 143,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 144,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 145,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 146,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 147,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 148,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 149,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 150,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 151,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 152,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 153,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 154,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 155,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 156,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 157,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 158,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 159,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 160,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 161,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 162,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 163,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 164,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 165,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 166,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 167,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 168,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 169,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 170,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 171,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 172,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 173,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 174,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 175,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 176,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 177,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 178,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 179,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 180,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 181,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 182,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 183,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 184,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 185,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 186,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 187,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 188,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 189,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 190,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 191,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 192,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 193,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 194,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 195,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 196,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 197,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 198,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 199,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 200,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 201,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 202,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 203,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 204,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 205,
                            "role_id" => 5,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 206,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 207,
                            "role_id" => 5,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 208,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 209,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 210,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 211,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 212,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 213,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 214,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 215,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 216,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 217,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 218,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 219,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 220,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 221,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 222,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 223,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 224,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 225,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 226,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 227,
                            "role_id" => 6,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 228,
                            "role_id" => 6,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 229,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 230,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 231,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 232,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 233,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 234,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 235,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 236,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 237,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 238,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 239,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 240,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 241,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 242,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 243,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 244,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 245,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 246,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 247,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 248,
                            "role_id" => 7,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 249,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 250,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 251,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 252,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 253,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 254,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 255,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 256,
                            "role_id" => 8,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 257,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 258,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 259,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 260,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 261,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 262,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 263,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 264,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 265,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 266,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 267,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 268,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 269,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 270,
                            "role_id" => 9,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 271,
                            "role_id" => 10,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 272,
                            "role_id" => 5,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 273,
                            "role_id" => 5,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 274,
                            "role_id" => 5,
                            "permission_id" => 62
                        ],
                    ]
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'После изменения пермишенов должности, индивидуально удалённые пермишены не проставились',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'url' => '/bpm/roles/update?id=5',
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][23]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][24]' => '1',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][25]' => '1',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
                'RoleBpm[rolePermissions][30]' => '0',
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][44]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][47]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][49]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][50]' => '0',
                'RoleBpm[rolePermissions][51]' => '0',
                'RoleBpm[rolePermissions][52]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][54]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][56]' => '0',
                'RoleBpm[rolePermissions][57]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][62]' => '0',
                'RoleBpm[rolePermissions][63]' => '0',
                'RoleBpm[rolePermissions][64]' => '0',
                'RoleBpm[rolePermissions][65]' => '0',
                'RoleBpm[rolePermissions][65]' => '1',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][8]' => '0',
                'RoleBpm[rolePermissions][9]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
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
                        ],
                        [
                            "id" => 219,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ]
                    ],
                    "default_role_permissions" => [
                        [
                            "id" => 1,
                            "role_id" => 1,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 2,
                            "role_id" => 1,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 3,
                            "role_id" => 1,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 4,
                            "role_id" => 1,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 5,
                            "role_id" => 1,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 6,
                            "role_id" => 1,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 7,
                            "role_id" => 1,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 8,
                            "role_id" => 1,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 9,
                            "role_id" => 1,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 10,
                            "role_id" => 1,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 11,
                            "role_id" => 1,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 12,
                            "role_id" => 1,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 13,
                            "role_id" => 1,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 14,
                            "role_id" => 1,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 15,
                            "role_id" => 1,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 16,
                            "role_id" => 1,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 17,
                            "role_id" => 1,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 18,
                            "role_id" => 1,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 19,
                            "role_id" => 1,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 20,
                            "role_id" => 1,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 21,
                            "role_id" => 1,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 22,
                            "role_id" => 1,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 23,
                            "role_id" => 1,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 24,
                            "role_id" => 1,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 25,
                            "role_id" => 1,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 26,
                            "role_id" => 1,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 27,
                            "role_id" => 1,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 28,
                            "role_id" => 1,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 29,
                            "role_id" => 1,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 30,
                            "role_id" => 1,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 31,
                            "role_id" => 1,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 32,
                            "role_id" => 1,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 33,
                            "role_id" => 1,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 34,
                            "role_id" => 1,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 35,
                            "role_id" => 1,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 36,
                            "role_id" => 1,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 37,
                            "role_id" => 1,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 38,
                            "role_id" => 1,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 39,
                            "role_id" => 1,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 40,
                            "role_id" => 1,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 41,
                            "role_id" => 1,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 42,
                            "role_id" => 1,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 43,
                            "role_id" => 1,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 44,
                            "role_id" => 1,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 45,
                            "role_id" => 1,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 46,
                            "role_id" => 1,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 47,
                            "role_id" => 1,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 48,
                            "role_id" => 1,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 49,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 57,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 58,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 59,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 60,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 61,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 62,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 63,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 64,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 65,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 66,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 67,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 68,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 69,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 70,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 71,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 72,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 73,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 74,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 75,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 76,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 77,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 78,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 79,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 80,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 81,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 82,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 83,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 84,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 85,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 86,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 87,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 88,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 89,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 90,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 91,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 92,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 93,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 94,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 95,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 96,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 97,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 98,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 99,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 100,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 101,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 102,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 103,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 104,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 105,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 106,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 107,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 108,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 109,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 110,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 111,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 112,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 113,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 114,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 115,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 116,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 117,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 118,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 119,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 120,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 121,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 122,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 123,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 124,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 125,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 126,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 127,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 128,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 129,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 130,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 131,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 132,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 133,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 134,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 135,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 136,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 137,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 138,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 139,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 140,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 141,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 142,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 143,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 144,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 145,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 146,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 147,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 148,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 149,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 150,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 151,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 152,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 153,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 154,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 155,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 156,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 157,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 158,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 159,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 160,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 161,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 162,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 163,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 164,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 165,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 166,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 167,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 168,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 169,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 170,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 171,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 172,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 173,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 174,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 175,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 176,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 177,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 178,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 179,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 180,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 181,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 182,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 183,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 184,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 185,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 186,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 187,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 188,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 189,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 190,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 191,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 192,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 193,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 194,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 195,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 196,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 197,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 198,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 199,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 200,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 201,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 203,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 204,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 206,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 207,
                            "role_id" => 5,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 208,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 209,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 210,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 211,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 212,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 213,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 214,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 215,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 216,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 217,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 218,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 219,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 220,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 221,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 222,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 223,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 224,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 225,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 226,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 227,
                            "role_id" => 6,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 228,
                            "role_id" => 6,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 229,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 230,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 231,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 232,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 233,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 234,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 235,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 236,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 237,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 238,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 239,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 240,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 241,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 242,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 243,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 244,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 245,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 246,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 247,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 248,
                            "role_id" => 7,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 249,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 250,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 251,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 252,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 253,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 254,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 255,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 256,
                            "role_id" => 8,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 257,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 258,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 259,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 260,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 261,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 262,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 263,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 264,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 265,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 266,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 267,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 268,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 269,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 270,
                            "role_id" => 9,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 271,
                            "role_id" => 10,
                            "permission_id" => 55
                        ]
                    ]
                ],
            ]
        ]
    ],

];
