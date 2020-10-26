<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'После добавления пермишенов должности, они добавились и у всех пользователей этой должности',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][101]' => '1',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][143]' => '1',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][145]' => '1',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][148]' => '1',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][152]' => '1',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][164]' => '1',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
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
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][31]' => '1',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][34]' => '1',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][41]' => '1',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][42]' => '1',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][4]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][88]' => '1',
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
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 4,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 4,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 219,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 5,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 6,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 6,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 6,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 6,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 6,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 6,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 6,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 8,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 290,
                            "user_id" => 8,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 291,
                            "user_id" => 8,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 292,
                            "user_id" => 8,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 293,
                            "user_id" => 8,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 294,
                            "user_id" => 8,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 295,
                            "user_id" => 8,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 296,
                            "user_id" => 8,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 297,
                            "user_id" => 8,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 298,
                            "user_id" => 8,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 299,
                            "user_id" => 8,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 300,
                            "user_id" => 8,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 301,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 302,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 303,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 304,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 305,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 306,
                            "user_id" => 8,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 307,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 308,
                            "user_id" => 8,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 309,
                            "user_id" => 8,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 310,
                            "user_id" => 8,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 311,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 312,
                            "user_id" => 8,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 313,
                            "user_id" => 8,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 314,
                            "user_id" => 8,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 315,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 316,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 317,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 318,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 319,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 320,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 321,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 322,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 323,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 324,
                            "user_id" => 8,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 325,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 326,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 327,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 328,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 329,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 330,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 331,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 332,
                            "user_id" => 8,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 333,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 334,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 335,
                            "user_id" => 9,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 336,
                            "user_id" => 9,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 337,
                            "user_id" => 9,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 338,
                            "user_id" => 9,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 339,
                            "user_id" => 9,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 340,
                            "user_id" => 9,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 341,
                            "user_id" => 9,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 342,
                            "user_id" => 9,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 343,
                            "user_id" => 9,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 344,
                            "user_id" => 9,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 345,
                            "user_id" => 9,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 346,
                            "user_id" => 9,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 347,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 348,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 349,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 350,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 351,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 352,
                            "user_id" => 9,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 353,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 354,
                            "user_id" => 9,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 355,
                            "user_id" => 9,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 356,
                            "user_id" => 9,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 357,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 358,
                            "user_id" => 9,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 359,
                            "user_id" => 9,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 360,
                            "user_id" => 9,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 361,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 362,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 363,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 364,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 365,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 366,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 367,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 368,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 369,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 370,
                            "user_id" => 9,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 371,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 372,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 373,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 374,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 375,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 376,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 377,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 378,
                            "user_id" => 9,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 379,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 380,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 381,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 382,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 383,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 384,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 385,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 386,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 387,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 388,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 389,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 390,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 391,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 392,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 393,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 394,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 395,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 396,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 397,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 398,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 399,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 400,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 401,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 402,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 403,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 404,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 405,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 406,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 407,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 408,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 409,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 410,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 411,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 412,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 413,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 414,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 415,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 416,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 417,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 418,
                            "user_id" => 10,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 419,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 420,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 421,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 422,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 423,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 424,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 425,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 426,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 427,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 428,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 429,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 430,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 431,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 432,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 433,
                            "user_id" => 11,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 434,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 435,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 436,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 437,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 438,
                            "user_id" => 11,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 449,
                            "user_id" => 11,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            "id" => 451,
                            "user_id" => 11,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            "id" => 453,
                            "user_id" => 11,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            "id" => 455,
                            "user_id" => 11,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 457,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 459,
                            "user_id" => 11,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 461,
                            "user_id" => 11,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 463,
                            "user_id" => 11,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 465,
                            "user_id" => 11,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 467,
                            "user_id" => 11,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 469,
                            "user_id" => 11,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 439,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 440,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 441,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 442,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 443,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 444,
                            "user_id" => 12,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 445,
                            "user_id" => 12,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 446,
                            "user_id" => 12,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 447,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 448,
                            "user_id" => 12,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 450,
                            "user_id" => 12,
                            "permission_name" => "sellerUpdate"
                        ],
                        [
                            "id" => 452,
                            "user_id" => 12,
                            "permission_name" => "teamUpdate"
                        ],
                        [
                            "id" => 454,
                            "user_id" => 12,
                            "permission_name" => "reasonsUpdate"
                        ],
                        [
                            "id" => 456,
                            "user_id" => 12,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 458,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 460,
                            "user_id" => 12,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 462,
                            "user_id" => 12,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 464,
                            "user_id" => 12,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 466,
                            "user_id" => 12,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 468,
                            "user_id" => 12,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 470,
                            "user_id" => 12,
                            "permission_name" => "transferWaitCheckToWaitWork"
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
                            "permission_id" => 52
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 57,
                            "role_id" => 1,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 58,
                            "role_id" => 1,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 59,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 60,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 61,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 62,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 63,
                            "role_id" => 1,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 64,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 65,
                            "role_id" => 1,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 66,
                            "role_id" => 1,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 67,
                            "role_id" => 1,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 68,
                            "role_id" => 1,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 69,
                            "role_id" => 1,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 70,
                            "role_id" => 1,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 71,
                            "role_id" => 1,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 72,
                            "role_id" => 1,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 73,
                            "role_id" => 1,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 74,
                            "role_id" => 1,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 75,
                            "role_id" => 1,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 76,
                            "role_id" => 1,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 77,
                            "role_id" => 1,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 78,
                            "role_id" => 1,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 79,
                            "role_id" => 1,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 80,
                            "role_id" => 1,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 81,
                            "role_id" => 1,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 82,
                            "role_id" => 1,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 83,
                            "role_id" => 1,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 84,
                            "role_id" => 1,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 85,
                            "role_id" => 1,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 86,
                            "role_id" => 1,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 87,
                            "role_id" => 1,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 88,
                            "role_id" => 1,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 89,
                            "role_id" => 1,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 90,
                            "role_id" => 1,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 91,
                            "role_id" => 1,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 92,
                            "role_id" => 1,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 93,
                            "role_id" => 1,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 94,
                            "role_id" => 1,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 95,
                            "role_id" => 1,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 96,
                            "role_id" => 1,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 97,
                            "role_id" => 1,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 98,
                            "role_id" => 1,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 99,
                            "role_id" => 1,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 100,
                            "role_id" => 1,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 101,
                            "role_id" => 1,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 102,
                            "role_id" => 1,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 103,
                            "role_id" => 1,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 104,
                            "role_id" => 1,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 105,
                            "role_id" => 1,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 106,
                            "role_id" => 1,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 107,
                            "role_id" => 1,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 108,
                            "role_id" => 1,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 109,
                            "role_id" => 1,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 110,
                            "role_id" => 1,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 111,
                            "role_id" => 1,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 112,
                            "role_id" => 1,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 113,
                            "role_id" => 1,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 114,
                            "role_id" => 1,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 115,
                            "role_id" => 1,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 116,
                            "role_id" => 1,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 117,
                            "role_id" => 1,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 118,
                            "role_id" => 1,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 119,
                            "role_id" => 1,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 120,
                            "role_id" => 1,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 121,
                            "role_id" => 1,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 122,
                            "role_id" => 1,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 123,
                            "role_id" => 1,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 124,
                            "role_id" => 1,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 125,
                            "role_id" => 1,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 126,
                            "role_id" => 1,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 127,
                            "role_id" => 1,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 128,
                            "role_id" => 1,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 129,
                            "role_id" => 1,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 130,
                            "role_id" => 1,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 131,
                            "role_id" => 1,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 132,
                            "role_id" => 1,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 133,
                            "role_id" => 1,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 134,
                            "role_id" => 1,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 135,
                            "role_id" => 1,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 136,
                            "role_id" => 1,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 137,
                            "role_id" => 1,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 138,
                            "role_id" => 1,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 139,
                            "role_id" => 1,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 140,
                            "role_id" => 1,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 141,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 142,
                            "role_id" => 1,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 143,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 144,
                            "role_id" => 1,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 145,
                            "role_id" => 1,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 146,
                            "role_id" => 1,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 147,
                            "role_id" => 1,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 148,
                            "role_id" => 1,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 149,
                            "role_id" => 1,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 150,
                            "role_id" => 1,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 151,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 152,
                            "role_id" => 1,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 153,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 154,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 155,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 156,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 157,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 158,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 159,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 160,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 161,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 162,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 163,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 164,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 165,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 166,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 167,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 168,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 169,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 170,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 171,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 172,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 173,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 174,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 175,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 176,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 177,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 178,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 179,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 180,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 181,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 182,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 183,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 184,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 185,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 186,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 187,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 188,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 189,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 190,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 191,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 192,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 193,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 194,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 195,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 196,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 197,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 198,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 199,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 200,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 201,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 202,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 203,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 204,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 205,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 206,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 207,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 208,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 209,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 210,
                            "role_id" => 2,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 211,
                            "role_id" => 2,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 212,
                            "role_id" => 2,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 213,
                            "role_id" => 2,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 214,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 215,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 216,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 217,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 218,
                            "role_id" => 2,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 219,
                            "role_id" => 2,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 220,
                            "role_id" => 2,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 221,
                            "role_id" => 2,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 222,
                            "role_id" => 2,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 223,
                            "role_id" => 2,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 224,
                            "role_id" => 2,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 225,
                            "role_id" => 2,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 226,
                            "role_id" => 2,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 227,
                            "role_id" => 2,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 228,
                            "role_id" => 2,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 229,
                            "role_id" => 2,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 230,
                            "role_id" => 2,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 231,
                            "role_id" => 2,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 232,
                            "role_id" => 2,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 233,
                            "role_id" => 2,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 234,
                            "role_id" => 2,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 235,
                            "role_id" => 2,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 236,
                            "role_id" => 2,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 237,
                            "role_id" => 2,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 238,
                            "role_id" => 2,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 239,
                            "role_id" => 2,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 240,
                            "role_id" => 2,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 241,
                            "role_id" => 2,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 242,
                            "role_id" => 2,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 243,
                            "role_id" => 2,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 244,
                            "role_id" => 2,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 245,
                            "role_id" => 2,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 246,
                            "role_id" => 2,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 247,
                            "role_id" => 2,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 248,
                            "role_id" => 2,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 249,
                            "role_id" => 2,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 250,
                            "role_id" => 2,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 251,
                            "role_id" => 2,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 252,
                            "role_id" => 2,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 253,
                            "role_id" => 2,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 254,
                            "role_id" => 2,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 255,
                            "role_id" => 2,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 256,
                            "role_id" => 2,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 257,
                            "role_id" => 2,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 258,
                            "role_id" => 2,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 259,
                            "role_id" => 2,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 260,
                            "role_id" => 2,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 261,
                            "role_id" => 2,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 262,
                            "role_id" => 2,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 263,
                            "role_id" => 2,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 264,
                            "role_id" => 2,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 265,
                            "role_id" => 2,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 266,
                            "role_id" => 2,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 267,
                            "role_id" => 2,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 268,
                            "role_id" => 2,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 269,
                            "role_id" => 2,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 270,
                            "role_id" => 2,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 271,
                            "role_id" => 2,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 272,
                            "role_id" => 2,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 273,
                            "role_id" => 2,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 274,
                            "role_id" => 2,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 275,
                            "role_id" => 2,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 276,
                            "role_id" => 2,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 277,
                            "role_id" => 2,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 278,
                            "role_id" => 2,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 279,
                            "role_id" => 2,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 280,
                            "role_id" => 2,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 281,
                            "role_id" => 2,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 282,
                            "role_id" => 2,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 283,
                            "role_id" => 2,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 284,
                            "role_id" => 2,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 285,
                            "role_id" => 2,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 286,
                            "role_id" => 2,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 287,
                            "role_id" => 2,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 288,
                            "role_id" => 2,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 289,
                            "role_id" => 2,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 290,
                            "role_id" => 2,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 291,
                            "role_id" => 2,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 292,
                            "role_id" => 2,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 293,
                            "role_id" => 2,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 294,
                            "role_id" => 2,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 295,
                            "role_id" => 2,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 296,
                            "role_id" => 2,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 297,
                            "role_id" => 2,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 298,
                            "role_id" => 2,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 299,
                            "role_id" => 2,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 300,
                            "role_id" => 2,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 301,
                            "role_id" => 2,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 302,
                            "role_id" => 2,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 303,
                            "role_id" => 2,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 304,
                            "role_id" => 2,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 305,
                            "role_id" => 2,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 306,
                            "role_id" => 2,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 307,
                            "role_id" => 2,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 308,
                            "role_id" => 2,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 309,
                            "role_id" => 2,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 310,
                            "role_id" => 2,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 311,
                            "role_id" => 2,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 312,
                            "role_id" => 2,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 313,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 314,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 315,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 316,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 317,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 318,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 319,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 320,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 321,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 322,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 323,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 324,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 325,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 326,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 327,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 328,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 329,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 330,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 331,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 332,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 333,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 334,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 335,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 336,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 337,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 338,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 339,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 340,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 341,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 342,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 343,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 344,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 345,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 346,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 347,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 348,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 349,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 350,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 351,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 352,
                            "role_id" => 3,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 353,
                            "role_id" => 3,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 354,
                            "role_id" => 3,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 355,
                            "role_id" => 3,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 356,
                            "role_id" => 3,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 357,
                            "role_id" => 3,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 358,
                            "role_id" => 3,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 359,
                            "role_id" => 3,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 360,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 361,
                            "role_id" => 3,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 362,
                            "role_id" => 3,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 363,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 364,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 365,
                            "role_id" => 3,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 366,
                            "role_id" => 3,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 367,
                            "role_id" => 3,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 368,
                            "role_id" => 3,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 369,
                            "role_id" => 3,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 370,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 371,
                            "role_id" => 3,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 372,
                            "role_id" => 3,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 373,
                            "role_id" => 3,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 374,
                            "role_id" => 3,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 375,
                            "role_id" => 3,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 376,
                            "role_id" => 3,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 377,
                            "role_id" => 3,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 378,
                            "role_id" => 3,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 379,
                            "role_id" => 3,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 380,
                            "role_id" => 3,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 381,
                            "role_id" => 3,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 382,
                            "role_id" => 3,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 383,
                            "role_id" => 3,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 384,
                            "role_id" => 3,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 385,
                            "role_id" => 3,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 386,
                            "role_id" => 3,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 387,
                            "role_id" => 3,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 388,
                            "role_id" => 3,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 389,
                            "role_id" => 3,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 390,
                            "role_id" => 3,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 391,
                            "role_id" => 3,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 392,
                            "role_id" => 3,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 393,
                            "role_id" => 3,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 394,
                            "role_id" => 3,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 395,
                            "role_id" => 3,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 396,
                            "role_id" => 3,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 397,
                            "role_id" => 3,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 398,
                            "role_id" => 3,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 399,
                            "role_id" => 3,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 400,
                            "role_id" => 3,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 401,
                            "role_id" => 3,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 402,
                            "role_id" => 3,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 403,
                            "role_id" => 3,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 404,
                            "role_id" => 3,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 405,
                            "role_id" => 3,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 406,
                            "role_id" => 3,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 407,
                            "role_id" => 3,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 408,
                            "role_id" => 3,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 409,
                            "role_id" => 3,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 410,
                            "role_id" => 3,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 411,
                            "role_id" => 3,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 412,
                            "role_id" => 3,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 413,
                            "role_id" => 3,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 414,
                            "role_id" => 3,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 415,
                            "role_id" => 3,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 416,
                            "role_id" => 3,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 417,
                            "role_id" => 3,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 418,
                            "role_id" => 3,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 419,
                            "role_id" => 3,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 420,
                            "role_id" => 3,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 421,
                            "role_id" => 3,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 422,
                            "role_id" => 3,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 423,
                            "role_id" => 3,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 424,
                            "role_id" => 3,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 425,
                            "role_id" => 3,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 426,
                            "role_id" => 3,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 427,
                            "role_id" => 3,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 428,
                            "role_id" => 3,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 429,
                            "role_id" => 3,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 430,
                            "role_id" => 3,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 431,
                            "role_id" => 3,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 432,
                            "role_id" => 3,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 433,
                            "role_id" => 3,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 434,
                            "role_id" => 3,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 435,
                            "role_id" => 3,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 436,
                            "role_id" => 3,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 437,
                            "role_id" => 3,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 438,
                            "role_id" => 3,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 439,
                            "role_id" => 3,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 440,
                            "role_id" => 3,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 441,
                            "role_id" => 3,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 442,
                            "role_id" => 3,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 443,
                            "role_id" => 3,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 444,
                            "role_id" => 3,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 445,
                            "role_id" => 3,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 446,
                            "role_id" => 3,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 447,
                            "role_id" => 3,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 448,
                            "role_id" => 3,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 449,
                            "role_id" => 3,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 450,
                            "role_id" => 3,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 451,
                            "role_id" => 3,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 452,
                            "role_id" => 3,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 453,
                            "role_id" => 3,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 454,
                            "role_id" => 3,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 455,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 456,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 457,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 458,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 459,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 460,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 461,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 462,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 463,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 464,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 465,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 466,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 467,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 468,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 469,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 470,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 471,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 472,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 473,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 474,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 475,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 476,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 477,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 478,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 479,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 480,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 481,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 482,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 483,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 484,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 485,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 486,
                            "role_id" => 4,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 487,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 488,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 489,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 490,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 491,
                            "role_id" => 4,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 492,
                            "role_id" => 4,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 493,
                            "role_id" => 4,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 494,
                            "role_id" => 4,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 495,
                            "role_id" => 4,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 496,
                            "role_id" => 4,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 497,
                            "role_id" => 4,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 498,
                            "role_id" => 4,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 499,
                            "role_id" => 4,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 500,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 501,
                            "role_id" => 4,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 502,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 503,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 504,
                            "role_id" => 4,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 505,
                            "role_id" => 4,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 506,
                            "role_id" => 4,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 507,
                            "role_id" => 4,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 508,
                            "role_id" => 4,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 509,
                            "role_id" => 4,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 510,
                            "role_id" => 4,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 511,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 512,
                            "role_id" => 4,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 513,
                            "role_id" => 4,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 514,
                            "role_id" => 4,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 515,
                            "role_id" => 4,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 516,
                            "role_id" => 4,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 517,
                            "role_id" => 4,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 518,
                            "role_id" => 4,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 519,
                            "role_id" => 4,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 520,
                            "role_id" => 4,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 521,
                            "role_id" => 4,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 522,
                            "role_id" => 4,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 523,
                            "role_id" => 4,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 524,
                            "role_id" => 4,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 525,
                            "role_id" => 4,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 526,
                            "role_id" => 4,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 527,
                            "role_id" => 4,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 528,
                            "role_id" => 4,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 529,
                            "role_id" => 4,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 530,
                            "role_id" => 4,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 531,
                            "role_id" => 4,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 532,
                            "role_id" => 4,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 533,
                            "role_id" => 4,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 534,
                            "role_id" => 4,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 535,
                            "role_id" => 4,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 536,
                            "role_id" => 4,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 537,
                            "role_id" => 4,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 538,
                            "role_id" => 4,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 539,
                            "role_id" => 4,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 540,
                            "role_id" => 4,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 541,
                            "role_id" => 4,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 542,
                            "role_id" => 4,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 543,
                            "role_id" => 4,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 544,
                            "role_id" => 4,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 545,
                            "role_id" => 4,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 546,
                            "role_id" => 4,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 547,
                            "role_id" => 4,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 548,
                            "role_id" => 4,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 549,
                            "role_id" => 4,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 550,
                            "role_id" => 4,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 551,
                            "role_id" => 4,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 552,
                            "role_id" => 4,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 553,
                            "role_id" => 4,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 554,
                            "role_id" => 4,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 555,
                            "role_id" => 4,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 556,
                            "role_id" => 4,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 557,
                            "role_id" => 4,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 558,
                            "role_id" => 4,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 559,
                            "role_id" => 4,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 560,
                            "role_id" => 4,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 561,
                            "role_id" => 4,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 562,
                            "role_id" => 4,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 563,
                            "role_id" => 4,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 564,
                            "role_id" => 4,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 565,
                            "role_id" => 4,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 566,
                            "role_id" => 4,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 567,
                            "role_id" => 4,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 568,
                            "role_id" => 4,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 569,
                            "role_id" => 4,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 570,
                            "role_id" => 4,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 571,
                            "role_id" => 4,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 572,
                            "role_id" => 4,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 573,
                            "role_id" => 4,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 574,
                            "role_id" => 4,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 575,
                            "role_id" => 4,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 576,
                            "role_id" => 4,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 577,
                            "role_id" => 4,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 578,
                            "role_id" => 4,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 579,
                            "role_id" => 4,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 580,
                            "role_id" => 4,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 581,
                            "role_id" => 4,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 582,
                            "role_id" => 4,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 583,
                            "role_id" => 4,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 584,
                            "role_id" => 4,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 585,
                            "role_id" => 4,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 586,
                            "role_id" => 4,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 587,
                            "role_id" => 4,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 588,
                            "role_id" => 4,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 589,
                            "role_id" => 4,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 590,
                            "role_id" => 4,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 591,
                            "role_id" => 4,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 592,
                            "role_id" => 4,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 593,
                            "role_id" => 4,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 677,
                            "role_id" => 5,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 594,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 595,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 596,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 597,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 598,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 672,
                            "role_id" => 5,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 673,
                            "role_id" => 5,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 599,
                            "role_id" => 5,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 600,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 674,
                            "role_id" => 5,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 675,
                            "role_id" => 5,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 676,
                            "role_id" => 5,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 678,
                            "role_id" => 5,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 601,
                            "role_id" => 5,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 602,
                            "role_id" => 5,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 668,
                            "role_id" => 5,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 669,
                            "role_id" => 5,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 670,
                            "role_id" => 5,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 671,
                            "role_id" => 5,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 603,
                            "role_id" => 5,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 604,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 605,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 606,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 607,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 608,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 609,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 610,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 611,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 612,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 613,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 614,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 615,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 616,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 617,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 618,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 619,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 620,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 621,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 622,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 623,
                            "role_id" => 6,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 624,
                            "role_id" => 6,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 625,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 626,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 627,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 628,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 629,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 630,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 631,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 632,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 633,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 634,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 635,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 636,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 637,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 638,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 639,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 640,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 641,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 642,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 643,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 644,
                            "role_id" => 7,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 645,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 646,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 647,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 648,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 649,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 650,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 651,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 652,
                            "role_id" => 8,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 653,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 654,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 655,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 656,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 657,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 658,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 659,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 660,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 661,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 662,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 663,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 664,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 665,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 666,
                            "role_id" => 9,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 667,
                            "role_id" => 10,
                            "permission_id" => 154
                        ]
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
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
                'RoleBpm[rolePermissions][24]' => '0',
                'RoleBpm[rolePermissions][25]' => '0',
                'RoleBpm[rolePermissions][26]' => '0',
                'RoleBpm[rolePermissions][26]' => '1',
                'RoleBpm[rolePermissions][27]' => '0',
                'RoleBpm[rolePermissions][27]' => '1',
                'RoleBpm[rolePermissions][28]' => '0',
                'RoleBpm[rolePermissions][28]' => '1',
                'RoleBpm[rolePermissions][29]' => '0',
                'RoleBpm[rolePermissions][2]' => '0',
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
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
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
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 4,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 4,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 219,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 5,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 6,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 6,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 6,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 6,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 6,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 6,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 6,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 8,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 290,
                            "user_id" => 8,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 291,
                            "user_id" => 8,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 292,
                            "user_id" => 8,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 293,
                            "user_id" => 8,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 294,
                            "user_id" => 8,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 295,
                            "user_id" => 8,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 296,
                            "user_id" => 8,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 297,
                            "user_id" => 8,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 298,
                            "user_id" => 8,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 299,
                            "user_id" => 8,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 300,
                            "user_id" => 8,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 301,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 302,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 303,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 304,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 305,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 306,
                            "user_id" => 8,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 307,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 308,
                            "user_id" => 8,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 309,
                            "user_id" => 8,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 310,
                            "user_id" => 8,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 311,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 312,
                            "user_id" => 8,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 313,
                            "user_id" => 8,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 314,
                            "user_id" => 8,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 315,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 316,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 317,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 318,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 319,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 320,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 321,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 322,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 323,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 324,
                            "user_id" => 8,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 325,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 326,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 327,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 328,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 329,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 330,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 331,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 332,
                            "user_id" => 8,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 333,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 334,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 335,
                            "user_id" => 9,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 336,
                            "user_id" => 9,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 337,
                            "user_id" => 9,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 338,
                            "user_id" => 9,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 339,
                            "user_id" => 9,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 340,
                            "user_id" => 9,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 341,
                            "user_id" => 9,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 342,
                            "user_id" => 9,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 343,
                            "user_id" => 9,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 344,
                            "user_id" => 9,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 345,
                            "user_id" => 9,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 346,
                            "user_id" => 9,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 347,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 348,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 349,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 350,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 351,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 352,
                            "user_id" => 9,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 353,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 354,
                            "user_id" => 9,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 355,
                            "user_id" => 9,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 356,
                            "user_id" => 9,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 357,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 358,
                            "user_id" => 9,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 359,
                            "user_id" => 9,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 360,
                            "user_id" => 9,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 361,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 362,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 363,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 364,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 365,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 366,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 367,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 368,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 369,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 370,
                            "user_id" => 9,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 371,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 372,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 373,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 374,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 375,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 376,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 377,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 378,
                            "user_id" => 9,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 379,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 380,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 381,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 382,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 383,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 384,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 385,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 386,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 387,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 388,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 389,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 390,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 391,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 392,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 393,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 394,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 395,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 396,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 397,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 398,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 399,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 400,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 401,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 402,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 403,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 404,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 405,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 406,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 407,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 408,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 409,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 410,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 411,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 412,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 413,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 414,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 415,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 416,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 417,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 418,
                            "user_id" => 10,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 419,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 420,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 421,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 422,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 423,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 424,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 425,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 426,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 427,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 428,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 430,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 431,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 432,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 434,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 441,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 442,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 443,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 445,
                            "user_id" => 12,
                            "permission_name" => "reportView"
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
                            "permission_id" => 52
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 57,
                            "role_id" => 1,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 58,
                            "role_id" => 1,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 59,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 60,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 61,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 62,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 63,
                            "role_id" => 1,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 64,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 65,
                            "role_id" => 1,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 66,
                            "role_id" => 1,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 67,
                            "role_id" => 1,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 68,
                            "role_id" => 1,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 69,
                            "role_id" => 1,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 70,
                            "role_id" => 1,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 71,
                            "role_id" => 1,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 72,
                            "role_id" => 1,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 73,
                            "role_id" => 1,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 74,
                            "role_id" => 1,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 75,
                            "role_id" => 1,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 76,
                            "role_id" => 1,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 77,
                            "role_id" => 1,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 78,
                            "role_id" => 1,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 79,
                            "role_id" => 1,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 80,
                            "role_id" => 1,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 81,
                            "role_id" => 1,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 82,
                            "role_id" => 1,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 83,
                            "role_id" => 1,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 84,
                            "role_id" => 1,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 85,
                            "role_id" => 1,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 86,
                            "role_id" => 1,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 87,
                            "role_id" => 1,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 88,
                            "role_id" => 1,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 89,
                            "role_id" => 1,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 90,
                            "role_id" => 1,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 91,
                            "role_id" => 1,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 92,
                            "role_id" => 1,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 93,
                            "role_id" => 1,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 94,
                            "role_id" => 1,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 95,
                            "role_id" => 1,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 96,
                            "role_id" => 1,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 97,
                            "role_id" => 1,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 98,
                            "role_id" => 1,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 99,
                            "role_id" => 1,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 100,
                            "role_id" => 1,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 101,
                            "role_id" => 1,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 102,
                            "role_id" => 1,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 103,
                            "role_id" => 1,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 104,
                            "role_id" => 1,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 105,
                            "role_id" => 1,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 106,
                            "role_id" => 1,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 107,
                            "role_id" => 1,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 108,
                            "role_id" => 1,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 109,
                            "role_id" => 1,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 110,
                            "role_id" => 1,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 111,
                            "role_id" => 1,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 112,
                            "role_id" => 1,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 113,
                            "role_id" => 1,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 114,
                            "role_id" => 1,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 115,
                            "role_id" => 1,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 116,
                            "role_id" => 1,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 117,
                            "role_id" => 1,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 118,
                            "role_id" => 1,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 119,
                            "role_id" => 1,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 120,
                            "role_id" => 1,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 121,
                            "role_id" => 1,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 122,
                            "role_id" => 1,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 123,
                            "role_id" => 1,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 124,
                            "role_id" => 1,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 125,
                            "role_id" => 1,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 126,
                            "role_id" => 1,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 127,
                            "role_id" => 1,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 128,
                            "role_id" => 1,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 129,
                            "role_id" => 1,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 130,
                            "role_id" => 1,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 131,
                            "role_id" => 1,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 132,
                            "role_id" => 1,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 133,
                            "role_id" => 1,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 134,
                            "role_id" => 1,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 135,
                            "role_id" => 1,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 136,
                            "role_id" => 1,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 137,
                            "role_id" => 1,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 138,
                            "role_id" => 1,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 139,
                            "role_id" => 1,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 140,
                            "role_id" => 1,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 141,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 142,
                            "role_id" => 1,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 143,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 144,
                            "role_id" => 1,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 145,
                            "role_id" => 1,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 146,
                            "role_id" => 1,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 147,
                            "role_id" => 1,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 148,
                            "role_id" => 1,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 149,
                            "role_id" => 1,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 150,
                            "role_id" => 1,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 151,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 152,
                            "role_id" => 1,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 153,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 154,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 155,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 156,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 157,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 158,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 159,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 160,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 161,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 162,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 163,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 164,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 165,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 166,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 167,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 168,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 169,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 170,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 171,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 172,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 173,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 174,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 175,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 176,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 177,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 178,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 179,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 180,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 181,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 182,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 183,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 184,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 185,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 186,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 187,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 188,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 189,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 190,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 191,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 192,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 193,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 194,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 195,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 196,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 197,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 198,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 199,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 200,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 201,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 202,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 203,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 204,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 205,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 206,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 207,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 208,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 209,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 210,
                            "role_id" => 2,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 211,
                            "role_id" => 2,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 212,
                            "role_id" => 2,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 213,
                            "role_id" => 2,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 214,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 215,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 216,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 217,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 218,
                            "role_id" => 2,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 219,
                            "role_id" => 2,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 220,
                            "role_id" => 2,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 221,
                            "role_id" => 2,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 222,
                            "role_id" => 2,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 223,
                            "role_id" => 2,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 224,
                            "role_id" => 2,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 225,
                            "role_id" => 2,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 226,
                            "role_id" => 2,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 227,
                            "role_id" => 2,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 228,
                            "role_id" => 2,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 229,
                            "role_id" => 2,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 230,
                            "role_id" => 2,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 231,
                            "role_id" => 2,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 232,
                            "role_id" => 2,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 233,
                            "role_id" => 2,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 234,
                            "role_id" => 2,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 235,
                            "role_id" => 2,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 236,
                            "role_id" => 2,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 237,
                            "role_id" => 2,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 238,
                            "role_id" => 2,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 239,
                            "role_id" => 2,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 240,
                            "role_id" => 2,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 241,
                            "role_id" => 2,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 242,
                            "role_id" => 2,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 243,
                            "role_id" => 2,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 244,
                            "role_id" => 2,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 245,
                            "role_id" => 2,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 246,
                            "role_id" => 2,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 247,
                            "role_id" => 2,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 248,
                            "role_id" => 2,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 249,
                            "role_id" => 2,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 250,
                            "role_id" => 2,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 251,
                            "role_id" => 2,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 252,
                            "role_id" => 2,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 253,
                            "role_id" => 2,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 254,
                            "role_id" => 2,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 255,
                            "role_id" => 2,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 256,
                            "role_id" => 2,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 257,
                            "role_id" => 2,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 258,
                            "role_id" => 2,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 259,
                            "role_id" => 2,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 260,
                            "role_id" => 2,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 261,
                            "role_id" => 2,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 262,
                            "role_id" => 2,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 263,
                            "role_id" => 2,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 264,
                            "role_id" => 2,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 265,
                            "role_id" => 2,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 266,
                            "role_id" => 2,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 267,
                            "role_id" => 2,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 268,
                            "role_id" => 2,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 269,
                            "role_id" => 2,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 270,
                            "role_id" => 2,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 271,
                            "role_id" => 2,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 272,
                            "role_id" => 2,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 273,
                            "role_id" => 2,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 274,
                            "role_id" => 2,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 275,
                            "role_id" => 2,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 276,
                            "role_id" => 2,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 277,
                            "role_id" => 2,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 278,
                            "role_id" => 2,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 279,
                            "role_id" => 2,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 280,
                            "role_id" => 2,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 281,
                            "role_id" => 2,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 282,
                            "role_id" => 2,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 283,
                            "role_id" => 2,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 284,
                            "role_id" => 2,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 285,
                            "role_id" => 2,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 286,
                            "role_id" => 2,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 287,
                            "role_id" => 2,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 288,
                            "role_id" => 2,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 289,
                            "role_id" => 2,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 290,
                            "role_id" => 2,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 291,
                            "role_id" => 2,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 292,
                            "role_id" => 2,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 293,
                            "role_id" => 2,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 294,
                            "role_id" => 2,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 295,
                            "role_id" => 2,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 296,
                            "role_id" => 2,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 297,
                            "role_id" => 2,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 298,
                            "role_id" => 2,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 299,
                            "role_id" => 2,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 300,
                            "role_id" => 2,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 301,
                            "role_id" => 2,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 302,
                            "role_id" => 2,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 303,
                            "role_id" => 2,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 304,
                            "role_id" => 2,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 305,
                            "role_id" => 2,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 306,
                            "role_id" => 2,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 307,
                            "role_id" => 2,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 308,
                            "role_id" => 2,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 309,
                            "role_id" => 2,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 310,
                            "role_id" => 2,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 311,
                            "role_id" => 2,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 312,
                            "role_id" => 2,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 313,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 314,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 315,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 316,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 317,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 318,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 319,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 320,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 321,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 322,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 323,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 324,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 325,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 326,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 327,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 328,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 329,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 330,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 331,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 332,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 333,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 334,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 335,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 336,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 337,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 338,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 339,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 340,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 341,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 342,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 343,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 344,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 345,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 346,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 347,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 348,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 349,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 350,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 351,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 352,
                            "role_id" => 3,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 353,
                            "role_id" => 3,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 354,
                            "role_id" => 3,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 355,
                            "role_id" => 3,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 356,
                            "role_id" => 3,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 357,
                            "role_id" => 3,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 358,
                            "role_id" => 3,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 359,
                            "role_id" => 3,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 360,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 361,
                            "role_id" => 3,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 362,
                            "role_id" => 3,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 363,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 364,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 365,
                            "role_id" => 3,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 366,
                            "role_id" => 3,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 367,
                            "role_id" => 3,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 368,
                            "role_id" => 3,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 369,
                            "role_id" => 3,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 370,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 371,
                            "role_id" => 3,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 372,
                            "role_id" => 3,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 373,
                            "role_id" => 3,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 374,
                            "role_id" => 3,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 375,
                            "role_id" => 3,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 376,
                            "role_id" => 3,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 377,
                            "role_id" => 3,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 378,
                            "role_id" => 3,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 379,
                            "role_id" => 3,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 380,
                            "role_id" => 3,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 381,
                            "role_id" => 3,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 382,
                            "role_id" => 3,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 383,
                            "role_id" => 3,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 384,
                            "role_id" => 3,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 385,
                            "role_id" => 3,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 386,
                            "role_id" => 3,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 387,
                            "role_id" => 3,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 388,
                            "role_id" => 3,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 389,
                            "role_id" => 3,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 390,
                            "role_id" => 3,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 391,
                            "role_id" => 3,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 392,
                            "role_id" => 3,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 393,
                            "role_id" => 3,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 394,
                            "role_id" => 3,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 395,
                            "role_id" => 3,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 396,
                            "role_id" => 3,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 397,
                            "role_id" => 3,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 398,
                            "role_id" => 3,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 399,
                            "role_id" => 3,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 400,
                            "role_id" => 3,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 401,
                            "role_id" => 3,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 402,
                            "role_id" => 3,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 403,
                            "role_id" => 3,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 404,
                            "role_id" => 3,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 405,
                            "role_id" => 3,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 406,
                            "role_id" => 3,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 407,
                            "role_id" => 3,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 408,
                            "role_id" => 3,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 409,
                            "role_id" => 3,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 410,
                            "role_id" => 3,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 411,
                            "role_id" => 3,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 412,
                            "role_id" => 3,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 413,
                            "role_id" => 3,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 414,
                            "role_id" => 3,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 415,
                            "role_id" => 3,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 416,
                            "role_id" => 3,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 417,
                            "role_id" => 3,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 418,
                            "role_id" => 3,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 419,
                            "role_id" => 3,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 420,
                            "role_id" => 3,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 421,
                            "role_id" => 3,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 422,
                            "role_id" => 3,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 423,
                            "role_id" => 3,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 424,
                            "role_id" => 3,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 425,
                            "role_id" => 3,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 426,
                            "role_id" => 3,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 427,
                            "role_id" => 3,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 428,
                            "role_id" => 3,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 429,
                            "role_id" => 3,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 430,
                            "role_id" => 3,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 431,
                            "role_id" => 3,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 432,
                            "role_id" => 3,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 433,
                            "role_id" => 3,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 434,
                            "role_id" => 3,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 435,
                            "role_id" => 3,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 436,
                            "role_id" => 3,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 437,
                            "role_id" => 3,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 438,
                            "role_id" => 3,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 439,
                            "role_id" => 3,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 440,
                            "role_id" => 3,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 441,
                            "role_id" => 3,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 442,
                            "role_id" => 3,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 443,
                            "role_id" => 3,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 444,
                            "role_id" => 3,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 445,
                            "role_id" => 3,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 446,
                            "role_id" => 3,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 447,
                            "role_id" => 3,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 448,
                            "role_id" => 3,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 449,
                            "role_id" => 3,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 450,
                            "role_id" => 3,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 451,
                            "role_id" => 3,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 452,
                            "role_id" => 3,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 453,
                            "role_id" => 3,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 454,
                            "role_id" => 3,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 455,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 456,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 457,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 458,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 459,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 460,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 461,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 462,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 463,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 464,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 465,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 466,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 467,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 468,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 469,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 470,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 471,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 472,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 473,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 474,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 475,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 476,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 477,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 478,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 479,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 480,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 481,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 482,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 483,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 484,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 485,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 486,
                            "role_id" => 4,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 487,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 488,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 489,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 490,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 491,
                            "role_id" => 4,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 492,
                            "role_id" => 4,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 493,
                            "role_id" => 4,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 494,
                            "role_id" => 4,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 495,
                            "role_id" => 4,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 496,
                            "role_id" => 4,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 497,
                            "role_id" => 4,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 498,
                            "role_id" => 4,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 499,
                            "role_id" => 4,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 500,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 501,
                            "role_id" => 4,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 502,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 503,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 504,
                            "role_id" => 4,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 505,
                            "role_id" => 4,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 506,
                            "role_id" => 4,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 507,
                            "role_id" => 4,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 508,
                            "role_id" => 4,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 509,
                            "role_id" => 4,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 510,
                            "role_id" => 4,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 511,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 512,
                            "role_id" => 4,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 513,
                            "role_id" => 4,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 514,
                            "role_id" => 4,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 515,
                            "role_id" => 4,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 516,
                            "role_id" => 4,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 517,
                            "role_id" => 4,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 518,
                            "role_id" => 4,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 519,
                            "role_id" => 4,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 520,
                            "role_id" => 4,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 521,
                            "role_id" => 4,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 522,
                            "role_id" => 4,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 523,
                            "role_id" => 4,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 524,
                            "role_id" => 4,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 525,
                            "role_id" => 4,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 526,
                            "role_id" => 4,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 527,
                            "role_id" => 4,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 528,
                            "role_id" => 4,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 529,
                            "role_id" => 4,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 530,
                            "role_id" => 4,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 531,
                            "role_id" => 4,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 532,
                            "role_id" => 4,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 533,
                            "role_id" => 4,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 534,
                            "role_id" => 4,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 535,
                            "role_id" => 4,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 536,
                            "role_id" => 4,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 537,
                            "role_id" => 4,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 538,
                            "role_id" => 4,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 539,
                            "role_id" => 4,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 540,
                            "role_id" => 4,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 541,
                            "role_id" => 4,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 542,
                            "role_id" => 4,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 543,
                            "role_id" => 4,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 544,
                            "role_id" => 4,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 545,
                            "role_id" => 4,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 546,
                            "role_id" => 4,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 547,
                            "role_id" => 4,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 548,
                            "role_id" => 4,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 549,
                            "role_id" => 4,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 550,
                            "role_id" => 4,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 551,
                            "role_id" => 4,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 552,
                            "role_id" => 4,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 553,
                            "role_id" => 4,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 554,
                            "role_id" => 4,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 555,
                            "role_id" => 4,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 556,
                            "role_id" => 4,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 557,
                            "role_id" => 4,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 558,
                            "role_id" => 4,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 559,
                            "role_id" => 4,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 560,
                            "role_id" => 4,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 561,
                            "role_id" => 4,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 562,
                            "role_id" => 4,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 563,
                            "role_id" => 4,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 564,
                            "role_id" => 4,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 565,
                            "role_id" => 4,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 566,
                            "role_id" => 4,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 567,
                            "role_id" => 4,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 568,
                            "role_id" => 4,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 569,
                            "role_id" => 4,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 570,
                            "role_id" => 4,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 571,
                            "role_id" => 4,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 572,
                            "role_id" => 4,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 573,
                            "role_id" => 4,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 574,
                            "role_id" => 4,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 575,
                            "role_id" => 4,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 576,
                            "role_id" => 4,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 577,
                            "role_id" => 4,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 578,
                            "role_id" => 4,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 579,
                            "role_id" => 4,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 580,
                            "role_id" => 4,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 581,
                            "role_id" => 4,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 582,
                            "role_id" => 4,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 583,
                            "role_id" => 4,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 584,
                            "role_id" => 4,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 585,
                            "role_id" => 4,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 586,
                            "role_id" => 4,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 587,
                            "role_id" => 4,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 588,
                            "role_id" => 4,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 589,
                            "role_id" => 4,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 590,
                            "role_id" => 4,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 591,
                            "role_id" => 4,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 592,
                            "role_id" => 4,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 593,
                            "role_id" => 4,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 596,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 597,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 598,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 600,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 604,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 605,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 606,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 607,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 608,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 609,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 610,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 611,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 612,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 613,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 614,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 615,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 616,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 617,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 618,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 619,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 620,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 621,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 622,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 623,
                            "role_id" => 6,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 624,
                            "role_id" => 6,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 625,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 626,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 627,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 628,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 629,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 630,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 631,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 632,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 633,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 634,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 635,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 636,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 637,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 638,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 639,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 640,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 641,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 642,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 643,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 644,
                            "role_id" => 7,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 645,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 646,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 647,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 648,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 649,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 650,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 651,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 652,
                            "role_id" => 8,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 653,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 654,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 655,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 656,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 657,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 658,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 659,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 660,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 661,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 662,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 663,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 664,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 665,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 666,
                            "role_id" => 9,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 667,
                            "role_id" => 10,
                            "permission_id" => 154
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
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][101]' => '1',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][151]' => '1',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][152]' => '1',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][164]' => '1',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
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
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][31]' => '1',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][34]' => '1',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][41]' => '1',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][42]' => '1',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][4]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][88]' => '1',
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
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 4,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 4,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 219,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 5,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 6,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 6,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 6,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 6,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 6,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 6,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 6,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 8,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 290,
                            "user_id" => 8,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 291,
                            "user_id" => 8,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 292,
                            "user_id" => 8,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 293,
                            "user_id" => 8,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 294,
                            "user_id" => 8,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 295,
                            "user_id" => 8,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 296,
                            "user_id" => 8,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 297,
                            "user_id" => 8,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 298,
                            "user_id" => 8,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 299,
                            "user_id" => 8,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 300,
                            "user_id" => 8,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 301,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 302,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 303,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 304,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 305,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 306,
                            "user_id" => 8,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 307,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 308,
                            "user_id" => 8,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 309,
                            "user_id" => 8,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 310,
                            "user_id" => 8,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 311,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 312,
                            "user_id" => 8,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 313,
                            "user_id" => 8,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 314,
                            "user_id" => 8,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 315,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 316,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 317,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 318,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 319,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 320,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 321,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 322,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 323,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 324,
                            "user_id" => 8,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 325,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 326,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 327,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 328,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 329,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 330,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 331,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 332,
                            "user_id" => 8,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 333,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 334,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 335,
                            "user_id" => 9,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 336,
                            "user_id" => 9,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 337,
                            "user_id" => 9,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 338,
                            "user_id" => 9,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 339,
                            "user_id" => 9,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 340,
                            "user_id" => 9,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 341,
                            "user_id" => 9,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 342,
                            "user_id" => 9,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 343,
                            "user_id" => 9,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 344,
                            "user_id" => 9,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 345,
                            "user_id" => 9,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 346,
                            "user_id" => 9,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 347,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 348,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 349,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 350,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 351,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 352,
                            "user_id" => 9,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 353,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 354,
                            "user_id" => 9,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 355,
                            "user_id" => 9,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 356,
                            "user_id" => 9,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 357,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 358,
                            "user_id" => 9,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 359,
                            "user_id" => 9,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 360,
                            "user_id" => 9,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 361,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 362,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 363,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 364,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 365,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 366,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 367,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 368,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 369,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 370,
                            "user_id" => 9,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 371,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 372,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 373,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 374,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 375,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 376,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 377,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 378,
                            "user_id" => 9,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 379,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 380,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 381,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 382,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 383,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 384,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 385,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 386,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 387,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 388,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 389,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 390,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 391,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 392,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 393,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 394,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 395,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 396,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 397,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 398,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 399,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 400,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 401,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 402,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 403,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 404,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 405,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 406,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 407,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 408,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 409,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 410,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 411,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 412,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 413,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 414,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 415,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 416,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 417,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 418,
                            "user_id" => 10,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 419,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 420,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 421,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 422,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 423,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 424,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 425,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 426,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 427,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 428,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 429,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 430,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 431,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 432,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 433,
                            "user_id" => 11,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 434,
                            "user_id" => 11,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 435,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 436,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 437,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 438,
                            "user_id" => 11,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 439,
                            "user_id" => 11,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 440,
                            "user_id" => 11,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 441,
                            "user_id" => 11,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 442,
                            "user_id" => 11,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 453,
                            "user_id" => 11,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 455,
                            "user_id" => 11,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 457,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 459,
                            "user_id" => 11,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 461,
                            "user_id" => 11,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 463,
                            "user_id" => 11,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 465,
                            "user_id" => 11,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 467,
                            "user_id" => 11,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 469,
                            "user_id" => 11,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 443,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 444,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 445,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 446,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 447,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 448,
                            "user_id" => 12,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 449,
                            "user_id" => 12,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 450,
                            "user_id" => 12,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 451,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 452,
                            "user_id" => 12,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 454,
                            "user_id" => 12,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 456,
                            "user_id" => 12,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 458,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 460,
                            "user_id" => 12,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 462,
                            "user_id" => 12,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 464,
                            "user_id" => 12,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 466,
                            "user_id" => 12,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 468,
                            "user_id" => 12,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 470,
                            "user_id" => 12,
                            "permission_name" => "transferWaitCheckToWaitWork"
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
                            "permission_id" => 52
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 57,
                            "role_id" => 1,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 58,
                            "role_id" => 1,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 59,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 60,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 61,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 62,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 63,
                            "role_id" => 1,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 64,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 65,
                            "role_id" => 1,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 66,
                            "role_id" => 1,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 67,
                            "role_id" => 1,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 68,
                            "role_id" => 1,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 69,
                            "role_id" => 1,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 70,
                            "role_id" => 1,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 71,
                            "role_id" => 1,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 72,
                            "role_id" => 1,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 73,
                            "role_id" => 1,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 74,
                            "role_id" => 1,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 75,
                            "role_id" => 1,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 76,
                            "role_id" => 1,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 77,
                            "role_id" => 1,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 78,
                            "role_id" => 1,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 79,
                            "role_id" => 1,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 80,
                            "role_id" => 1,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 81,
                            "role_id" => 1,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 82,
                            "role_id" => 1,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 83,
                            "role_id" => 1,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 84,
                            "role_id" => 1,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 85,
                            "role_id" => 1,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 86,
                            "role_id" => 1,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 87,
                            "role_id" => 1,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 88,
                            "role_id" => 1,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 89,
                            "role_id" => 1,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 90,
                            "role_id" => 1,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 91,
                            "role_id" => 1,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 92,
                            "role_id" => 1,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 93,
                            "role_id" => 1,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 94,
                            "role_id" => 1,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 95,
                            "role_id" => 1,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 96,
                            "role_id" => 1,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 97,
                            "role_id" => 1,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 98,
                            "role_id" => 1,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 99,
                            "role_id" => 1,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 100,
                            "role_id" => 1,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 101,
                            "role_id" => 1,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 102,
                            "role_id" => 1,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 103,
                            "role_id" => 1,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 104,
                            "role_id" => 1,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 105,
                            "role_id" => 1,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 106,
                            "role_id" => 1,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 107,
                            "role_id" => 1,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 108,
                            "role_id" => 1,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 109,
                            "role_id" => 1,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 110,
                            "role_id" => 1,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 111,
                            "role_id" => 1,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 112,
                            "role_id" => 1,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 113,
                            "role_id" => 1,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 114,
                            "role_id" => 1,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 115,
                            "role_id" => 1,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 116,
                            "role_id" => 1,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 117,
                            "role_id" => 1,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 118,
                            "role_id" => 1,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 119,
                            "role_id" => 1,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 120,
                            "role_id" => 1,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 121,
                            "role_id" => 1,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 122,
                            "role_id" => 1,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 123,
                            "role_id" => 1,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 124,
                            "role_id" => 1,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 125,
                            "role_id" => 1,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 126,
                            "role_id" => 1,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 127,
                            "role_id" => 1,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 128,
                            "role_id" => 1,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 129,
                            "role_id" => 1,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 130,
                            "role_id" => 1,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 131,
                            "role_id" => 1,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 132,
                            "role_id" => 1,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 133,
                            "role_id" => 1,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 134,
                            "role_id" => 1,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 135,
                            "role_id" => 1,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 136,
                            "role_id" => 1,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 137,
                            "role_id" => 1,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 138,
                            "role_id" => 1,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 139,
                            "role_id" => 1,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 140,
                            "role_id" => 1,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 141,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 142,
                            "role_id" => 1,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 143,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 144,
                            "role_id" => 1,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 145,
                            "role_id" => 1,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 146,
                            "role_id" => 1,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 147,
                            "role_id" => 1,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 148,
                            "role_id" => 1,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 149,
                            "role_id" => 1,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 150,
                            "role_id" => 1,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 151,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 152,
                            "role_id" => 1,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 153,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 154,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 155,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 156,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 157,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 158,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 159,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 160,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 161,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 162,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 163,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 164,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 165,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 166,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 167,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 168,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 169,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 170,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 171,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 172,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 173,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 174,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 175,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 176,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 177,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 178,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 179,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 180,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 181,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 182,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 183,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 184,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 185,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 186,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 187,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 188,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 189,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 190,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 191,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 192,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 193,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 194,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 195,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 196,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 197,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 198,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 199,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 200,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 201,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 202,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 203,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 204,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 205,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 206,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 207,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 208,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 209,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 210,
                            "role_id" => 2,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 211,
                            "role_id" => 2,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 212,
                            "role_id" => 2,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 213,
                            "role_id" => 2,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 214,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 215,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 216,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 217,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 218,
                            "role_id" => 2,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 219,
                            "role_id" => 2,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 220,
                            "role_id" => 2,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 221,
                            "role_id" => 2,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 222,
                            "role_id" => 2,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 223,
                            "role_id" => 2,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 224,
                            "role_id" => 2,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 225,
                            "role_id" => 2,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 226,
                            "role_id" => 2,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 227,
                            "role_id" => 2,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 228,
                            "role_id" => 2,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 229,
                            "role_id" => 2,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 230,
                            "role_id" => 2,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 231,
                            "role_id" => 2,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 232,
                            "role_id" => 2,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 233,
                            "role_id" => 2,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 234,
                            "role_id" => 2,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 235,
                            "role_id" => 2,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 236,
                            "role_id" => 2,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 237,
                            "role_id" => 2,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 238,
                            "role_id" => 2,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 239,
                            "role_id" => 2,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 240,
                            "role_id" => 2,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 241,
                            "role_id" => 2,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 242,
                            "role_id" => 2,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 243,
                            "role_id" => 2,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 244,
                            "role_id" => 2,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 245,
                            "role_id" => 2,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 246,
                            "role_id" => 2,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 247,
                            "role_id" => 2,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 248,
                            "role_id" => 2,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 249,
                            "role_id" => 2,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 250,
                            "role_id" => 2,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 251,
                            "role_id" => 2,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 252,
                            "role_id" => 2,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 253,
                            "role_id" => 2,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 254,
                            "role_id" => 2,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 255,
                            "role_id" => 2,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 256,
                            "role_id" => 2,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 257,
                            "role_id" => 2,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 258,
                            "role_id" => 2,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 259,
                            "role_id" => 2,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 260,
                            "role_id" => 2,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 261,
                            "role_id" => 2,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 262,
                            "role_id" => 2,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 263,
                            "role_id" => 2,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 264,
                            "role_id" => 2,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 265,
                            "role_id" => 2,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 266,
                            "role_id" => 2,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 267,
                            "role_id" => 2,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 268,
                            "role_id" => 2,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 269,
                            "role_id" => 2,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 270,
                            "role_id" => 2,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 271,
                            "role_id" => 2,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 272,
                            "role_id" => 2,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 273,
                            "role_id" => 2,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 274,
                            "role_id" => 2,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 275,
                            "role_id" => 2,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 276,
                            "role_id" => 2,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 277,
                            "role_id" => 2,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 278,
                            "role_id" => 2,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 279,
                            "role_id" => 2,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 280,
                            "role_id" => 2,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 281,
                            "role_id" => 2,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 282,
                            "role_id" => 2,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 283,
                            "role_id" => 2,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 284,
                            "role_id" => 2,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 285,
                            "role_id" => 2,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 286,
                            "role_id" => 2,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 287,
                            "role_id" => 2,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 288,
                            "role_id" => 2,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 289,
                            "role_id" => 2,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 290,
                            "role_id" => 2,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 291,
                            "role_id" => 2,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 292,
                            "role_id" => 2,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 293,
                            "role_id" => 2,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 294,
                            "role_id" => 2,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 295,
                            "role_id" => 2,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 296,
                            "role_id" => 2,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 297,
                            "role_id" => 2,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 298,
                            "role_id" => 2,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 299,
                            "role_id" => 2,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 300,
                            "role_id" => 2,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 301,
                            "role_id" => 2,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 302,
                            "role_id" => 2,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 303,
                            "role_id" => 2,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 304,
                            "role_id" => 2,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 305,
                            "role_id" => 2,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 306,
                            "role_id" => 2,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 307,
                            "role_id" => 2,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 308,
                            "role_id" => 2,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 309,
                            "role_id" => 2,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 310,
                            "role_id" => 2,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 311,
                            "role_id" => 2,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 312,
                            "role_id" => 2,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 313,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 314,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 315,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 316,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 317,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 318,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 319,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 320,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 321,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 322,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 323,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 324,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 325,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 326,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 327,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 328,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 329,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 330,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 331,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 332,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 333,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 334,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 335,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 336,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 337,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 338,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 339,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 340,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 341,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 342,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 343,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 344,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 345,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 346,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 347,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 348,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 349,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 350,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 351,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 352,
                            "role_id" => 3,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 353,
                            "role_id" => 3,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 354,
                            "role_id" => 3,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 355,
                            "role_id" => 3,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 356,
                            "role_id" => 3,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 357,
                            "role_id" => 3,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 358,
                            "role_id" => 3,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 359,
                            "role_id" => 3,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 360,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 361,
                            "role_id" => 3,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 362,
                            "role_id" => 3,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 363,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 364,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 365,
                            "role_id" => 3,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 366,
                            "role_id" => 3,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 367,
                            "role_id" => 3,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 368,
                            "role_id" => 3,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 369,
                            "role_id" => 3,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 370,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 371,
                            "role_id" => 3,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 372,
                            "role_id" => 3,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 373,
                            "role_id" => 3,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 374,
                            "role_id" => 3,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 375,
                            "role_id" => 3,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 376,
                            "role_id" => 3,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 377,
                            "role_id" => 3,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 378,
                            "role_id" => 3,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 379,
                            "role_id" => 3,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 380,
                            "role_id" => 3,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 381,
                            "role_id" => 3,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 382,
                            "role_id" => 3,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 383,
                            "role_id" => 3,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 384,
                            "role_id" => 3,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 385,
                            "role_id" => 3,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 386,
                            "role_id" => 3,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 387,
                            "role_id" => 3,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 388,
                            "role_id" => 3,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 389,
                            "role_id" => 3,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 390,
                            "role_id" => 3,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 391,
                            "role_id" => 3,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 392,
                            "role_id" => 3,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 393,
                            "role_id" => 3,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 394,
                            "role_id" => 3,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 395,
                            "role_id" => 3,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 396,
                            "role_id" => 3,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 397,
                            "role_id" => 3,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 398,
                            "role_id" => 3,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 399,
                            "role_id" => 3,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 400,
                            "role_id" => 3,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 401,
                            "role_id" => 3,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 402,
                            "role_id" => 3,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 403,
                            "role_id" => 3,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 404,
                            "role_id" => 3,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 405,
                            "role_id" => 3,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 406,
                            "role_id" => 3,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 407,
                            "role_id" => 3,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 408,
                            "role_id" => 3,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 409,
                            "role_id" => 3,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 410,
                            "role_id" => 3,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 411,
                            "role_id" => 3,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 412,
                            "role_id" => 3,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 413,
                            "role_id" => 3,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 414,
                            "role_id" => 3,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 415,
                            "role_id" => 3,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 416,
                            "role_id" => 3,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 417,
                            "role_id" => 3,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 418,
                            "role_id" => 3,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 419,
                            "role_id" => 3,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 420,
                            "role_id" => 3,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 421,
                            "role_id" => 3,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 422,
                            "role_id" => 3,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 423,
                            "role_id" => 3,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 424,
                            "role_id" => 3,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 425,
                            "role_id" => 3,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 426,
                            "role_id" => 3,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 427,
                            "role_id" => 3,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 428,
                            "role_id" => 3,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 429,
                            "role_id" => 3,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 430,
                            "role_id" => 3,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 431,
                            "role_id" => 3,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 432,
                            "role_id" => 3,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 433,
                            "role_id" => 3,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 434,
                            "role_id" => 3,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 435,
                            "role_id" => 3,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 436,
                            "role_id" => 3,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 437,
                            "role_id" => 3,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 438,
                            "role_id" => 3,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 439,
                            "role_id" => 3,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 440,
                            "role_id" => 3,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 441,
                            "role_id" => 3,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 442,
                            "role_id" => 3,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 443,
                            "role_id" => 3,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 444,
                            "role_id" => 3,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 445,
                            "role_id" => 3,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 446,
                            "role_id" => 3,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 447,
                            "role_id" => 3,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 448,
                            "role_id" => 3,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 449,
                            "role_id" => 3,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 450,
                            "role_id" => 3,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 451,
                            "role_id" => 3,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 452,
                            "role_id" => 3,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 453,
                            "role_id" => 3,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 454,
                            "role_id" => 3,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 455,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 456,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 457,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 458,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 459,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 460,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 461,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 462,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 463,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 464,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 465,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 466,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 467,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 468,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 469,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 470,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 471,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 472,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 473,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 474,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 475,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 476,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 477,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 478,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 479,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 480,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 481,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 482,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 483,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 484,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 485,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 486,
                            "role_id" => 4,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 487,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 488,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 489,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 490,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 491,
                            "role_id" => 4,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 492,
                            "role_id" => 4,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 493,
                            "role_id" => 4,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 494,
                            "role_id" => 4,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 495,
                            "role_id" => 4,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 496,
                            "role_id" => 4,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 497,
                            "role_id" => 4,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 498,
                            "role_id" => 4,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 499,
                            "role_id" => 4,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 500,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 501,
                            "role_id" => 4,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 502,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 503,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 504,
                            "role_id" => 4,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 505,
                            "role_id" => 4,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 506,
                            "role_id" => 4,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 507,
                            "role_id" => 4,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 508,
                            "role_id" => 4,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 509,
                            "role_id" => 4,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 510,
                            "role_id" => 4,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 511,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 512,
                            "role_id" => 4,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 513,
                            "role_id" => 4,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 514,
                            "role_id" => 4,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 515,
                            "role_id" => 4,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 516,
                            "role_id" => 4,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 517,
                            "role_id" => 4,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 518,
                            "role_id" => 4,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 519,
                            "role_id" => 4,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 520,
                            "role_id" => 4,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 521,
                            "role_id" => 4,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 522,
                            "role_id" => 4,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 523,
                            "role_id" => 4,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 524,
                            "role_id" => 4,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 525,
                            "role_id" => 4,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 526,
                            "role_id" => 4,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 527,
                            "role_id" => 4,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 528,
                            "role_id" => 4,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 529,
                            "role_id" => 4,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 530,
                            "role_id" => 4,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 531,
                            "role_id" => 4,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 532,
                            "role_id" => 4,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 533,
                            "role_id" => 4,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 534,
                            "role_id" => 4,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 535,
                            "role_id" => 4,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 536,
                            "role_id" => 4,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 537,
                            "role_id" => 4,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 538,
                            "role_id" => 4,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 539,
                            "role_id" => 4,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 540,
                            "role_id" => 4,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 541,
                            "role_id" => 4,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 542,
                            "role_id" => 4,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 543,
                            "role_id" => 4,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 544,
                            "role_id" => 4,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 545,
                            "role_id" => 4,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 546,
                            "role_id" => 4,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 547,
                            "role_id" => 4,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 548,
                            "role_id" => 4,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 549,
                            "role_id" => 4,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 550,
                            "role_id" => 4,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 551,
                            "role_id" => 4,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 552,
                            "role_id" => 4,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 553,
                            "role_id" => 4,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 554,
                            "role_id" => 4,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 555,
                            "role_id" => 4,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 556,
                            "role_id" => 4,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 557,
                            "role_id" => 4,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 558,
                            "role_id" => 4,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 559,
                            "role_id" => 4,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 560,
                            "role_id" => 4,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 561,
                            "role_id" => 4,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 562,
                            "role_id" => 4,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 563,
                            "role_id" => 4,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 564,
                            "role_id" => 4,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 565,
                            "role_id" => 4,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 566,
                            "role_id" => 4,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 567,
                            "role_id" => 4,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 568,
                            "role_id" => 4,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 569,
                            "role_id" => 4,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 570,
                            "role_id" => 4,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 571,
                            "role_id" => 4,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 572,
                            "role_id" => 4,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 573,
                            "role_id" => 4,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 574,
                            "role_id" => 4,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 575,
                            "role_id" => 4,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 576,
                            "role_id" => 4,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 577,
                            "role_id" => 4,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 578,
                            "role_id" => 4,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 579,
                            "role_id" => 4,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 580,
                            "role_id" => 4,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 581,
                            "role_id" => 4,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 582,
                            "role_id" => 4,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 583,
                            "role_id" => 4,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 584,
                            "role_id" => 4,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 585,
                            "role_id" => 4,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 586,
                            "role_id" => 4,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 587,
                            "role_id" => 4,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 588,
                            "role_id" => 4,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 589,
                            "role_id" => 4,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 590,
                            "role_id" => 4,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 591,
                            "role_id" => 4,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 592,
                            "role_id" => 4,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 593,
                            "role_id" => 4,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 675,
                            "role_id" => 5,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 594,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 595,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 596,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 597,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 598,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 670,
                            "role_id" => 5,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 671,
                            "role_id" => 5,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 599,
                            "role_id" => 5,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 600,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 672,
                            "role_id" => 5,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 673,
                            "role_id" => 5,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 674,
                            "role_id" => 5,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 676,
                            "role_id" => 5,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 601,
                            "role_id" => 5,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 602,
                            "role_id" => 5,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 668,
                            "role_id" => 5,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 669,
                            "role_id" => 5,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 603,
                            "role_id" => 5,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 604,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 605,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 606,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 607,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 608,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 609,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 610,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 611,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 612,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 613,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 614,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 615,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 616,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 617,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 618,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 619,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 620,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 621,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 622,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 623,
                            "role_id" => 6,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 624,
                            "role_id" => 6,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 625,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 626,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 627,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 628,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 629,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 630,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 631,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 632,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 633,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 634,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 635,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 636,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 637,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 638,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 639,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 640,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 641,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 642,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 643,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 644,
                            "role_id" => 7,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 645,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 646,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 647,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 648,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 649,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 650,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 651,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 652,
                            "role_id" => 8,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 653,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 654,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 655,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 656,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 657,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 658,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 659,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 660,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 661,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 662,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 663,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 664,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 665,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 666,
                            "role_id" => 9,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 667,
                            "role_id" => 10,
                            "permission_id" => 154
                        ]
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
            'requestBody' => [
                'RoleBpm[description]' => 'Контент-менеджер',
                'RoleBpm[rolePermissions][101]' => '0',
                'RoleBpm[rolePermissions][101]' => '1',
                'RoleBpm[rolePermissions][10]' => '0',
                'RoleBpm[rolePermissions][11]' => '0',
                'RoleBpm[rolePermissions][121]' => '0',
                'RoleBpm[rolePermissions][12]' => '0',
                'RoleBpm[rolePermissions][13]' => '0',
                'RoleBpm[rolePermissions][143]' => '0',
                'RoleBpm[rolePermissions][144]' => '0',
                'RoleBpm[rolePermissions][145]' => '0',
                'RoleBpm[rolePermissions][146]' => '0',
                'RoleBpm[rolePermissions][147]' => '0',
                'RoleBpm[rolePermissions][148]' => '0',
                'RoleBpm[rolePermissions][149]' => '0',
                'RoleBpm[rolePermissions][14]' => '0',
                'RoleBpm[rolePermissions][150]' => '0',
                'RoleBpm[rolePermissions][151]' => '0',
                'RoleBpm[rolePermissions][151]' => '1',
                'RoleBpm[rolePermissions][152]' => '0',
                'RoleBpm[rolePermissions][152]' => '1',
                'RoleBpm[rolePermissions][153]' => '0',
                'RoleBpm[rolePermissions][154]' => '0',
                'RoleBpm[rolePermissions][155]' => '0',
                'RoleBpm[rolePermissions][156]' => '0',
                'RoleBpm[rolePermissions][15]' => '0',
                'RoleBpm[rolePermissions][161]' => '0',
                'RoleBpm[rolePermissions][162]' => '0',
                'RoleBpm[rolePermissions][163]' => '0',
                'RoleBpm[rolePermissions][164]' => '0',
                'RoleBpm[rolePermissions][164]' => '1',
                'RoleBpm[rolePermissions][16]' => '0',
                'RoleBpm[rolePermissions][17]' => '0',
                'RoleBpm[rolePermissions][18]' => '0',
                'RoleBpm[rolePermissions][19]' => '0',
                'RoleBpm[rolePermissions][1]' => '0',
                'RoleBpm[rolePermissions][20]' => '0',
                'RoleBpm[rolePermissions][21]' => '0',
                'RoleBpm[rolePermissions][22]' => '0',
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
                'RoleBpm[rolePermissions][31]' => '0',
                'RoleBpm[rolePermissions][31]' => '1',
                'RoleBpm[rolePermissions][34]' => '0',
                'RoleBpm[rolePermissions][34]' => '1',
                'RoleBpm[rolePermissions][35]' => '0',
                'RoleBpm[rolePermissions][36]' => '0',
                'RoleBpm[rolePermissions][37]' => '0',
                'RoleBpm[rolePermissions][37]' => '1',
                'RoleBpm[rolePermissions][38]' => '0',
                'RoleBpm[rolePermissions][39]' => '0',
                'RoleBpm[rolePermissions][3]' => '0',
                'RoleBpm[rolePermissions][40]' => '0',
                'RoleBpm[rolePermissions][40]' => '1',
                'RoleBpm[rolePermissions][41]' => '0',
                'RoleBpm[rolePermissions][41]' => '1',
                'RoleBpm[rolePermissions][42]' => '0',
                'RoleBpm[rolePermissions][42]' => '1',
                'RoleBpm[rolePermissions][43]' => '0',
                'RoleBpm[rolePermissions][45]' => '0',
                'RoleBpm[rolePermissions][45]' => '1',
                'RoleBpm[rolePermissions][46]' => '0',
                'RoleBpm[rolePermissions][48]' => '0',
                'RoleBpm[rolePermissions][4]' => '0',
                'RoleBpm[rolePermissions][4]' => '1',
                'RoleBpm[rolePermissions][53]' => '0',
                'RoleBpm[rolePermissions][53]' => '1',
                'RoleBpm[rolePermissions][55]' => '0',
                'RoleBpm[rolePermissions][58]' => '0',
                'RoleBpm[rolePermissions][5]' => '0',
                'RoleBpm[rolePermissions][67]' => '0',
                'RoleBpm[rolePermissions][6]' => '0',
                'RoleBpm[rolePermissions][7]' => '0',
                'RoleBpm[rolePermissions][88]' => '0',
                'RoleBpm[rolePermissions][88]' => '1',
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
                            "user_id" => 4,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 179,
                            "user_id" => 4,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 180,
                            "user_id" => 4,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 181,
                            "user_id" => 4,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 182,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 183,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 184,
                            "user_id" => 4,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 185,
                            "user_id" => 4,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 186,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 187,
                            "user_id" => 4,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 188,
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            "id" => 189,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            "id" => 190,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            "id" => 191,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 192,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 193,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 194,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 195,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 196,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 197,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 198,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 199,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 200,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 201,
                            "user_id" => 5,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 202,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 203,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 204,
                            "user_id" => 5,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 211,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 212,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 213,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 214,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 218,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 219,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 220,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            "id" => 221,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 222,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 223,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 224,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 225,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 226,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 227,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 228,
                            "user_id" => 5,
                            "permission_name" => "viewDashboardsByDirection"
                        ],
                        [
                            "id" => 229,
                            "user_id" => 5,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 230,
                            "user_id" => 5,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 231,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 232,
                            "user_id" => 5,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 233,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 234,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 235,
                            "user_id" => 5,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 236,
                            "user_id" => 5,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 237,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 238,
                            "user_id" => 5,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 239,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 240,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 241,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 242,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 243,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 244,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 245,
                            "user_id" => 6,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 246,
                            "user_id" => 6,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 247,
                            "user_id" => 6,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 248,
                            "user_id" => 6,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 249,
                            "user_id" => 6,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 250,
                            "user_id" => 6,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 251,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 252,
                            "user_id" => 6,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 253,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 254,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 255,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 256,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 257,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 258,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 259,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 260,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 261,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 262,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 263,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 264,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 265,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 266,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 267,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 268,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 269,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 270,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 271,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 272,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 273,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 274,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 275,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 276,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 277,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 278,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 279,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 280,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 281,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 282,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 283,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 284,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 285,
                            "user_id" => 7,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 286,
                            "user_id" => 7,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 287,
                            "user_id" => 7,
                            "permission_name" => "priorityUpdate"
                        ],
                        [
                            "id" => 288,
                            "user_id" => 7,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            "id" => 289,
                            "user_id" => 8,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 290,
                            "user_id" => 8,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 291,
                            "user_id" => 8,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 292,
                            "user_id" => 8,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 293,
                            "user_id" => 8,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 294,
                            "user_id" => 8,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 295,
                            "user_id" => 8,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 296,
                            "user_id" => 8,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 297,
                            "user_id" => 8,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 298,
                            "user_id" => 8,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 299,
                            "user_id" => 8,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 300,
                            "user_id" => 8,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 301,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 302,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 303,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 304,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 305,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 306,
                            "user_id" => 8,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 307,
                            "user_id" => 8,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 308,
                            "user_id" => 8,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 309,
                            "user_id" => 8,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 310,
                            "user_id" => 8,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 311,
                            "user_id" => 8,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 312,
                            "user_id" => 8,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 313,
                            "user_id" => 8,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 314,
                            "user_id" => 8,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 315,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 316,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 317,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 318,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 319,
                            "user_id" => 8,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 320,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 321,
                            "user_id" => 8,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 322,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 323,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 324,
                            "user_id" => 8,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 325,
                            "user_id" => 8,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 326,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 327,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 328,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 329,
                            "user_id" => 8,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 330,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 331,
                            "user_id" => 8,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 332,
                            "user_id" => 8,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 333,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 334,
                            "user_id" => 8,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 335,
                            "user_id" => 9,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 336,
                            "user_id" => 9,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 337,
                            "user_id" => 9,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 338,
                            "user_id" => 9,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 339,
                            "user_id" => 9,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 340,
                            "user_id" => 9,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 341,
                            "user_id" => 9,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 342,
                            "user_id" => 9,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 343,
                            "user_id" => 9,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 344,
                            "user_id" => 9,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 345,
                            "user_id" => 9,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 346,
                            "user_id" => 9,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 347,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 348,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 349,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 350,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 351,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 352,
                            "user_id" => 9,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 353,
                            "user_id" => 9,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 354,
                            "user_id" => 9,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 355,
                            "user_id" => 9,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 356,
                            "user_id" => 9,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 357,
                            "user_id" => 9,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 358,
                            "user_id" => 9,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 359,
                            "user_id" => 9,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 360,
                            "user_id" => 9,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 361,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 362,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 363,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 364,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 365,
                            "user_id" => 9,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 366,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 367,
                            "user_id" => 9,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 368,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 369,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 370,
                            "user_id" => 9,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 371,
                            "user_id" => 9,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 372,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 373,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 374,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 375,
                            "user_id" => 9,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 376,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 377,
                            "user_id" => 9,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 378,
                            "user_id" => 9,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 379,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 380,
                            "user_id" => 9,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 381,
                            "user_id" => 10,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            "id" => 382,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            "id" => 383,
                            "user_id" => 10,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            "id" => 384,
                            "user_id" => 10,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            "id" => 385,
                            "user_id" => 10,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            "id" => 386,
                            "user_id" => 10,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            "id" => 387,
                            "user_id" => 10,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "id" => 388,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "id" => 389,
                            "user_id" => 10,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "id" => 390,
                            "user_id" => 10,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "id" => 391,
                            "user_id" => 10,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            "id" => 392,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            "id" => 393,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "id" => 394,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "id" => 395,
                            "user_id" => 10,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            "id" => 396,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            "id" => 397,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            "id" => 398,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            "id" => 399,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "id" => 400,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 401,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToRequireFix"
                        ],
                        [
                            "id" => 402,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 403,
                            "user_id" => 10,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            "id" => 404,
                            "user_id" => 10,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 405,
                            "user_id" => 10,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 406,
                            "user_id" => 10,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 407,
                            "user_id" => 10,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "id" => 408,
                            "user_id" => 10,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 409,
                            "user_id" => 10,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 410,
                            "user_id" => 10,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            "id" => 411,
                            "user_id" => 10,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            "id" => 412,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 413,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 414,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 415,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 416,
                            "user_id" => 10,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "id" => 417,
                            "user_id" => 10,
                            "permission_name" => "viewDashboardsByCommand"
                        ],
                        [
                            "id" => 418,
                            "user_id" => 10,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            "id" => 419,
                            "user_id" => 10,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            "id" => 420,
                            "user_id" => 10,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 421,
                            "user_id" => 10,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            "id" => 422,
                            "user_id" => 10,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 423,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            "id" => 424,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 425,
                            "user_id" => 10,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            "id" => 426,
                            "user_id" => 10,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            "id" => 427,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 428,
                            "user_id" => 10,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            "id" => 429,
                            "user_id" => 11,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 430,
                            "user_id" => 11,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 431,
                            "user_id" => 11,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 432,
                            "user_id" => 11,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 433,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 434,
                            "user_id" => 11,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 445,
                            "user_id" => 11,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 447,
                            "user_id" => 11,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 449,
                            "user_id" => 11,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 451,
                            "user_id" => 11,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 453,
                            "user_id" => 11,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 455,
                            "user_id" => 11,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 457,
                            "user_id" => 11,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 459,
                            "user_id" => 11,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 461,
                            "user_id" => 11,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            "id" => 435,
                            "user_id" => 12,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "id" => 436,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "id" => 437,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "id" => 438,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "id" => 439,
                            "user_id" => 12,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "id" => 440,
                            "user_id" => 12,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            "id" => 441,
                            "user_id" => 12,
                            "permission_name" => "reportView"
                        ],
                        [
                            "id" => 442,
                            "user_id" => 12,
                            "permission_name" => "viewOwnDashboards"
                        ],
                        [
                            "id" => 443,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            "id" => 444,
                            "user_id" => 12,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "id" => 446,
                            "user_id" => 12,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            "id" => 448,
                            "user_id" => 12,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            "id" => 450,
                            "user_id" => 12,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            "id" => 452,
                            "user_id" => 12,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            "id" => 454,
                            "user_id" => 12,
                            "permission_name" => "massEdit"
                        ],
                        [
                            "id" => 456,
                            "user_id" => 12,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            "id" => 458,
                            "user_id" => 12,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "id" => 460,
                            "user_id" => 12,
                            "permission_name" => "viewUser"
                        ],
                        [
                            "id" => 462,
                            "user_id" => 12,
                            "permission_name" => "transferWaitCheckToWaitWork"
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
                            "permission_id" => 52
                        ],
                        [
                            "id" => 50,
                            "role_id" => 1,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 51,
                            "role_id" => 1,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 52,
                            "role_id" => 1,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 53,
                            "role_id" => 1,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 54,
                            "role_id" => 1,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 55,
                            "role_id" => 1,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 56,
                            "role_id" => 1,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 57,
                            "role_id" => 1,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 58,
                            "role_id" => 1,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 59,
                            "role_id" => 1,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 60,
                            "role_id" => 1,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 61,
                            "role_id" => 1,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 62,
                            "role_id" => 1,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 63,
                            "role_id" => 1,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 64,
                            "role_id" => 1,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 65,
                            "role_id" => 1,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 66,
                            "role_id" => 1,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 67,
                            "role_id" => 1,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 68,
                            "role_id" => 1,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 69,
                            "role_id" => 1,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 70,
                            "role_id" => 1,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 71,
                            "role_id" => 1,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 72,
                            "role_id" => 1,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 73,
                            "role_id" => 1,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 74,
                            "role_id" => 1,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 75,
                            "role_id" => 1,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 76,
                            "role_id" => 1,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 77,
                            "role_id" => 1,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 78,
                            "role_id" => 1,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 79,
                            "role_id" => 1,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 80,
                            "role_id" => 1,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 81,
                            "role_id" => 1,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 82,
                            "role_id" => 1,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 83,
                            "role_id" => 1,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 84,
                            "role_id" => 1,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 85,
                            "role_id" => 1,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 86,
                            "role_id" => 1,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 87,
                            "role_id" => 1,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 88,
                            "role_id" => 1,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 89,
                            "role_id" => 1,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 90,
                            "role_id" => 1,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 91,
                            "role_id" => 1,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 92,
                            "role_id" => 1,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 93,
                            "role_id" => 1,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 94,
                            "role_id" => 1,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 95,
                            "role_id" => 1,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 96,
                            "role_id" => 1,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 97,
                            "role_id" => 1,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 98,
                            "role_id" => 1,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 99,
                            "role_id" => 1,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 100,
                            "role_id" => 1,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 101,
                            "role_id" => 1,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 102,
                            "role_id" => 1,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 103,
                            "role_id" => 1,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 104,
                            "role_id" => 1,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 105,
                            "role_id" => 1,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 106,
                            "role_id" => 1,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 107,
                            "role_id" => 1,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 108,
                            "role_id" => 1,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 109,
                            "role_id" => 1,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 110,
                            "role_id" => 1,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 111,
                            "role_id" => 1,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 112,
                            "role_id" => 1,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 113,
                            "role_id" => 1,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 114,
                            "role_id" => 1,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 115,
                            "role_id" => 1,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 116,
                            "role_id" => 1,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 117,
                            "role_id" => 1,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 118,
                            "role_id" => 1,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 119,
                            "role_id" => 1,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 120,
                            "role_id" => 1,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 121,
                            "role_id" => 1,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 122,
                            "role_id" => 1,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 123,
                            "role_id" => 1,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 124,
                            "role_id" => 1,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 125,
                            "role_id" => 1,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 126,
                            "role_id" => 1,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 127,
                            "role_id" => 1,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 128,
                            "role_id" => 1,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 129,
                            "role_id" => 1,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 130,
                            "role_id" => 1,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 131,
                            "role_id" => 1,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 132,
                            "role_id" => 1,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 133,
                            "role_id" => 1,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 134,
                            "role_id" => 1,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 135,
                            "role_id" => 1,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 136,
                            "role_id" => 1,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 137,
                            "role_id" => 1,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 138,
                            "role_id" => 1,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 139,
                            "role_id" => 1,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 140,
                            "role_id" => 1,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 141,
                            "role_id" => 1,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 142,
                            "role_id" => 1,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 143,
                            "role_id" => 1,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 144,
                            "role_id" => 1,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 145,
                            "role_id" => 1,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 146,
                            "role_id" => 1,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 147,
                            "role_id" => 1,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 148,
                            "role_id" => 1,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 149,
                            "role_id" => 1,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 150,
                            "role_id" => 1,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 151,
                            "role_id" => 1,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 152,
                            "role_id" => 1,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 153,
                            "role_id" => 2,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 154,
                            "role_id" => 2,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 155,
                            "role_id" => 2,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 156,
                            "role_id" => 2,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 157,
                            "role_id" => 2,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 158,
                            "role_id" => 2,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 159,
                            "role_id" => 2,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 160,
                            "role_id" => 2,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 161,
                            "role_id" => 2,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 162,
                            "role_id" => 2,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 163,
                            "role_id" => 2,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 164,
                            "role_id" => 2,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 165,
                            "role_id" => 2,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 166,
                            "role_id" => 2,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 167,
                            "role_id" => 2,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 168,
                            "role_id" => 2,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 169,
                            "role_id" => 2,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 170,
                            "role_id" => 2,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 171,
                            "role_id" => 2,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 172,
                            "role_id" => 2,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 173,
                            "role_id" => 2,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 174,
                            "role_id" => 2,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 175,
                            "role_id" => 2,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 176,
                            "role_id" => 2,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 177,
                            "role_id" => 2,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 178,
                            "role_id" => 2,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 179,
                            "role_id" => 2,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 180,
                            "role_id" => 2,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 181,
                            "role_id" => 2,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 182,
                            "role_id" => 2,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 183,
                            "role_id" => 2,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 184,
                            "role_id" => 2,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 185,
                            "role_id" => 2,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 186,
                            "role_id" => 2,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 187,
                            "role_id" => 2,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 188,
                            "role_id" => 2,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 189,
                            "role_id" => 2,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 190,
                            "role_id" => 2,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 191,
                            "role_id" => 2,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 192,
                            "role_id" => 2,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 193,
                            "role_id" => 2,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 194,
                            "role_id" => 2,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 195,
                            "role_id" => 2,
                            "permission_id" => 43
                        ],
                        [
                            "id" => 196,
                            "role_id" => 2,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 197,
                            "role_id" => 2,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 198,
                            "role_id" => 2,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 199,
                            "role_id" => 2,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 200,
                            "role_id" => 2,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 201,
                            "role_id" => 2,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 202,
                            "role_id" => 2,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 203,
                            "role_id" => 2,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 204,
                            "role_id" => 2,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 205,
                            "role_id" => 2,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 206,
                            "role_id" => 2,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 207,
                            "role_id" => 2,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 208,
                            "role_id" => 2,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 209,
                            "role_id" => 2,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 210,
                            "role_id" => 2,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 211,
                            "role_id" => 2,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 212,
                            "role_id" => 2,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 213,
                            "role_id" => 2,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 214,
                            "role_id" => 2,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 215,
                            "role_id" => 2,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 216,
                            "role_id" => 2,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 217,
                            "role_id" => 2,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 218,
                            "role_id" => 2,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 219,
                            "role_id" => 2,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 220,
                            "role_id" => 2,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 221,
                            "role_id" => 2,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 222,
                            "role_id" => 2,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 223,
                            "role_id" => 2,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 224,
                            "role_id" => 2,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 225,
                            "role_id" => 2,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 226,
                            "role_id" => 2,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 227,
                            "role_id" => 2,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 228,
                            "role_id" => 2,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 229,
                            "role_id" => 2,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 230,
                            "role_id" => 2,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 231,
                            "role_id" => 2,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 232,
                            "role_id" => 2,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 233,
                            "role_id" => 2,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 234,
                            "role_id" => 2,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 235,
                            "role_id" => 2,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 236,
                            "role_id" => 2,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 237,
                            "role_id" => 2,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 238,
                            "role_id" => 2,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 239,
                            "role_id" => 2,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 240,
                            "role_id" => 2,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 241,
                            "role_id" => 2,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 242,
                            "role_id" => 2,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 243,
                            "role_id" => 2,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 244,
                            "role_id" => 2,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 245,
                            "role_id" => 2,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 246,
                            "role_id" => 2,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 247,
                            "role_id" => 2,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 248,
                            "role_id" => 2,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 249,
                            "role_id" => 2,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 250,
                            "role_id" => 2,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 251,
                            "role_id" => 2,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 252,
                            "role_id" => 2,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 253,
                            "role_id" => 2,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 254,
                            "role_id" => 2,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 255,
                            "role_id" => 2,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 256,
                            "role_id" => 2,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 257,
                            "role_id" => 2,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 258,
                            "role_id" => 2,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 259,
                            "role_id" => 2,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 260,
                            "role_id" => 2,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 261,
                            "role_id" => 2,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 262,
                            "role_id" => 2,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 263,
                            "role_id" => 2,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 264,
                            "role_id" => 2,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 265,
                            "role_id" => 2,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 266,
                            "role_id" => 2,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 267,
                            "role_id" => 2,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 268,
                            "role_id" => 2,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 269,
                            "role_id" => 2,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 270,
                            "role_id" => 2,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 271,
                            "role_id" => 2,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 272,
                            "role_id" => 2,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 273,
                            "role_id" => 2,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 274,
                            "role_id" => 2,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 275,
                            "role_id" => 2,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 276,
                            "role_id" => 2,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 277,
                            "role_id" => 2,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 278,
                            "role_id" => 2,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 279,
                            "role_id" => 2,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 280,
                            "role_id" => 2,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 281,
                            "role_id" => 2,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 282,
                            "role_id" => 2,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 283,
                            "role_id" => 2,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 284,
                            "role_id" => 2,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 285,
                            "role_id" => 2,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 286,
                            "role_id" => 2,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 287,
                            "role_id" => 2,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 288,
                            "role_id" => 2,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 289,
                            "role_id" => 2,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 290,
                            "role_id" => 2,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 291,
                            "role_id" => 2,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 292,
                            "role_id" => 2,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 293,
                            "role_id" => 2,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 294,
                            "role_id" => 2,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 295,
                            "role_id" => 2,
                            "permission_id" => 143
                        ],
                        [
                            "id" => 296,
                            "role_id" => 2,
                            "permission_id" => 144
                        ],
                        [
                            "id" => 297,
                            "role_id" => 2,
                            "permission_id" => 145
                        ],
                        [
                            "id" => 298,
                            "role_id" => 2,
                            "permission_id" => 146
                        ],
                        [
                            "id" => 299,
                            "role_id" => 2,
                            "permission_id" => 147
                        ],
                        [
                            "id" => 300,
                            "role_id" => 2,
                            "permission_id" => 148
                        ],
                        [
                            "id" => 301,
                            "role_id" => 2,
                            "permission_id" => 149
                        ],
                        [
                            "id" => 302,
                            "role_id" => 2,
                            "permission_id" => 150
                        ],
                        [
                            "id" => 303,
                            "role_id" => 2,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 304,
                            "role_id" => 2,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 305,
                            "role_id" => 2,
                            "permission_id" => 153
                        ],
                        [
                            "id" => 306,
                            "role_id" => 2,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 307,
                            "role_id" => 2,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 308,
                            "role_id" => 2,
                            "permission_id" => 156
                        ],
                        [
                            "id" => 309,
                            "role_id" => 2,
                            "permission_id" => 161
                        ],
                        [
                            "id" => 310,
                            "role_id" => 2,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 311,
                            "role_id" => 2,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 312,
                            "role_id" => 2,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 313,
                            "role_id" => 3,
                            "permission_id" => 1
                        ],
                        [
                            "id" => 314,
                            "role_id" => 3,
                            "permission_id" => 2
                        ],
                        [
                            "id" => 315,
                            "role_id" => 3,
                            "permission_id" => 3
                        ],
                        [
                            "id" => 316,
                            "role_id" => 3,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 317,
                            "role_id" => 3,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 318,
                            "role_id" => 3,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 319,
                            "role_id" => 3,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 320,
                            "role_id" => 3,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 321,
                            "role_id" => 3,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 322,
                            "role_id" => 3,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 323,
                            "role_id" => 3,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 324,
                            "role_id" => 3,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 325,
                            "role_id" => 3,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 326,
                            "role_id" => 3,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 327,
                            "role_id" => 3,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 328,
                            "role_id" => 3,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 329,
                            "role_id" => 3,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 330,
                            "role_id" => 3,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 331,
                            "role_id" => 3,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 332,
                            "role_id" => 3,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 333,
                            "role_id" => 3,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 334,
                            "role_id" => 3,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 335,
                            "role_id" => 3,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 336,
                            "role_id" => 3,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 337,
                            "role_id" => 3,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 338,
                            "role_id" => 3,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 339,
                            "role_id" => 3,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 340,
                            "role_id" => 3,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 341,
                            "role_id" => 3,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 342,
                            "role_id" => 3,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 343,
                            "role_id" => 3,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 344,
                            "role_id" => 3,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 345,
                            "role_id" => 3,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 346,
                            "role_id" => 3,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 347,
                            "role_id" => 3,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 348,
                            "role_id" => 3,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 349,
                            "role_id" => 3,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 350,
                            "role_id" => 3,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 351,
                            "role_id" => 3,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 352,
                            "role_id" => 3,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 353,
                            "role_id" => 3,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 354,
                            "role_id" => 3,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 355,
                            "role_id" => 3,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 356,
                            "role_id" => 3,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 357,
                            "role_id" => 3,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 358,
                            "role_id" => 3,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 359,
                            "role_id" => 3,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 360,
                            "role_id" => 3,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 361,
                            "role_id" => 3,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 362,
                            "role_id" => 3,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 363,
                            "role_id" => 3,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 364,
                            "role_id" => 3,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 365,
                            "role_id" => 3,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 366,
                            "role_id" => 3,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 367,
                            "role_id" => 3,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 368,
                            "role_id" => 3,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 369,
                            "role_id" => 3,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 370,
                            "role_id" => 3,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 371,
                            "role_id" => 3,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 372,
                            "role_id" => 3,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 373,
                            "role_id" => 3,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 374,
                            "role_id" => 3,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 375,
                            "role_id" => 3,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 376,
                            "role_id" => 3,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 377,
                            "role_id" => 3,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 378,
                            "role_id" => 3,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 379,
                            "role_id" => 3,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 380,
                            "role_id" => 3,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 381,
                            "role_id" => 3,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 382,
                            "role_id" => 3,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 383,
                            "role_id" => 3,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 384,
                            "role_id" => 3,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 385,
                            "role_id" => 3,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 386,
                            "role_id" => 3,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 387,
                            "role_id" => 3,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 388,
                            "role_id" => 3,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 389,
                            "role_id" => 3,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 390,
                            "role_id" => 3,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 391,
                            "role_id" => 3,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 392,
                            "role_id" => 3,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 393,
                            "role_id" => 3,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 394,
                            "role_id" => 3,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 395,
                            "role_id" => 3,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 396,
                            "role_id" => 3,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 397,
                            "role_id" => 3,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 398,
                            "role_id" => 3,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 399,
                            "role_id" => 3,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 400,
                            "role_id" => 3,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 401,
                            "role_id" => 3,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 402,
                            "role_id" => 3,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 403,
                            "role_id" => 3,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 404,
                            "role_id" => 3,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 405,
                            "role_id" => 3,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 406,
                            "role_id" => 3,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 407,
                            "role_id" => 3,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 408,
                            "role_id" => 3,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 409,
                            "role_id" => 3,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 410,
                            "role_id" => 3,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 411,
                            "role_id" => 3,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 412,
                            "role_id" => 3,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 413,
                            "role_id" => 3,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 414,
                            "role_id" => 3,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 415,
                            "role_id" => 3,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 416,
                            "role_id" => 3,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 417,
                            "role_id" => 3,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 418,
                            "role_id" => 3,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 419,
                            "role_id" => 3,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 420,
                            "role_id" => 3,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 421,
                            "role_id" => 3,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 422,
                            "role_id" => 3,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 423,
                            "role_id" => 3,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 424,
                            "role_id" => 3,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 425,
                            "role_id" => 3,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 426,
                            "role_id" => 3,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 427,
                            "role_id" => 3,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 428,
                            "role_id" => 3,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 429,
                            "role_id" => 3,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 430,
                            "role_id" => 3,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 431,
                            "role_id" => 3,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 432,
                            "role_id" => 3,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 433,
                            "role_id" => 3,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 434,
                            "role_id" => 3,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 435,
                            "role_id" => 3,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 436,
                            "role_id" => 3,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 437,
                            "role_id" => 3,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 438,
                            "role_id" => 3,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 439,
                            "role_id" => 3,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 440,
                            "role_id" => 3,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 441,
                            "role_id" => 3,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 442,
                            "role_id" => 3,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 443,
                            "role_id" => 3,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 444,
                            "role_id" => 3,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 445,
                            "role_id" => 3,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 446,
                            "role_id" => 3,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 447,
                            "role_id" => 3,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 448,
                            "role_id" => 3,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 449,
                            "role_id" => 3,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 450,
                            "role_id" => 3,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 451,
                            "role_id" => 3,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 452,
                            "role_id" => 3,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 453,
                            "role_id" => 3,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 454,
                            "role_id" => 3,
                            "permission_id" => 162
                        ],
                        [
                            "id" => 455,
                            "role_id" => 4,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 456,
                            "role_id" => 4,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 457,
                            "role_id" => 4,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 458,
                            "role_id" => 4,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 459,
                            "role_id" => 4,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 460,
                            "role_id" => 4,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 461,
                            "role_id" => 4,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 462,
                            "role_id" => 4,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 463,
                            "role_id" => 4,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 464,
                            "role_id" => 4,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 465,
                            "role_id" => 4,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 466,
                            "role_id" => 4,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 467,
                            "role_id" => 4,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 468,
                            "role_id" => 4,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 469,
                            "role_id" => 4,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 470,
                            "role_id" => 4,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 471,
                            "role_id" => 4,
                            "permission_id" => 20
                        ],
                        [
                            "id" => 472,
                            "role_id" => 4,
                            "permission_id" => 21
                        ],
                        [
                            "id" => 473,
                            "role_id" => 4,
                            "permission_id" => 22
                        ],
                        [
                            "id" => 474,
                            "role_id" => 4,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 475,
                            "role_id" => 4,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 476,
                            "role_id" => 4,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 477,
                            "role_id" => 4,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 478,
                            "role_id" => 4,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 479,
                            "role_id" => 4,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 480,
                            "role_id" => 4,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 481,
                            "role_id" => 4,
                            "permission_id" => 30
                        ],
                        [
                            "id" => 482,
                            "role_id" => 4,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 483,
                            "role_id" => 4,
                            "permission_id" => 32
                        ],
                        [
                            "id" => 484,
                            "role_id" => 4,
                            "permission_id" => 33
                        ],
                        [
                            "id" => 485,
                            "role_id" => 4,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 486,
                            "role_id" => 4,
                            "permission_id" => 35
                        ],
                        [
                            "id" => 487,
                            "role_id" => 4,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 488,
                            "role_id" => 4,
                            "permission_id" => 38
                        ],
                        [
                            "id" => 489,
                            "role_id" => 4,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 490,
                            "role_id" => 4,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 491,
                            "role_id" => 4,
                            "permission_id" => 44
                        ],
                        [
                            "id" => 492,
                            "role_id" => 4,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 493,
                            "role_id" => 4,
                            "permission_id" => 46
                        ],
                        [
                            "id" => 494,
                            "role_id" => 4,
                            "permission_id" => 47
                        ],
                        [
                            "id" => 495,
                            "role_id" => 4,
                            "permission_id" => 48
                        ],
                        [
                            "id" => 496,
                            "role_id" => 4,
                            "permission_id" => 49
                        ],
                        [
                            "id" => 497,
                            "role_id" => 4,
                            "permission_id" => 50
                        ],
                        [
                            "id" => 498,
                            "role_id" => 4,
                            "permission_id" => 51
                        ],
                        [
                            "id" => 499,
                            "role_id" => 4,
                            "permission_id" => 52
                        ],
                        [
                            "id" => 500,
                            "role_id" => 4,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 501,
                            "role_id" => 4,
                            "permission_id" => 54
                        ],
                        [
                            "id" => 502,
                            "role_id" => 4,
                            "permission_id" => 55
                        ],
                        [
                            "id" => 503,
                            "role_id" => 4,
                            "permission_id" => 56
                        ],
                        [
                            "id" => 504,
                            "role_id" => 4,
                            "permission_id" => 57
                        ],
                        [
                            "id" => 505,
                            "role_id" => 4,
                            "permission_id" => 58
                        ],
                        [
                            "id" => 506,
                            "role_id" => 4,
                            "permission_id" => 59
                        ],
                        [
                            "id" => 507,
                            "role_id" => 4,
                            "permission_id" => 60
                        ],
                        [
                            "id" => 508,
                            "role_id" => 4,
                            "permission_id" => 61
                        ],
                        [
                            "id" => 509,
                            "role_id" => 4,
                            "permission_id" => 62
                        ],
                        [
                            "id" => 510,
                            "role_id" => 4,
                            "permission_id" => 63
                        ],
                        [
                            "id" => 511,
                            "role_id" => 4,
                            "permission_id" => 64
                        ],
                        [
                            "id" => 512,
                            "role_id" => 4,
                            "permission_id" => 65
                        ],
                        [
                            "id" => 513,
                            "role_id" => 4,
                            "permission_id" => 66
                        ],
                        [
                            "id" => 514,
                            "role_id" => 4,
                            "permission_id" => 67
                        ],
                        [
                            "id" => 515,
                            "role_id" => 4,
                            "permission_id" => 68
                        ],
                        [
                            "id" => 516,
                            "role_id" => 4,
                            "permission_id" => 69
                        ],
                        [
                            "id" => 517,
                            "role_id" => 4,
                            "permission_id" => 70
                        ],
                        [
                            "id" => 518,
                            "role_id" => 4,
                            "permission_id" => 71
                        ],
                        [
                            "id" => 519,
                            "role_id" => 4,
                            "permission_id" => 72
                        ],
                        [
                            "id" => 520,
                            "role_id" => 4,
                            "permission_id" => 73
                        ],
                        [
                            "id" => 521,
                            "role_id" => 4,
                            "permission_id" => 74
                        ],
                        [
                            "id" => 522,
                            "role_id" => 4,
                            "permission_id" => 75
                        ],
                        [
                            "id" => 523,
                            "role_id" => 4,
                            "permission_id" => 76
                        ],
                        [
                            "id" => 524,
                            "role_id" => 4,
                            "permission_id" => 77
                        ],
                        [
                            "id" => 525,
                            "role_id" => 4,
                            "permission_id" => 78
                        ],
                        [
                            "id" => 526,
                            "role_id" => 4,
                            "permission_id" => 79
                        ],
                        [
                            "id" => 527,
                            "role_id" => 4,
                            "permission_id" => 80
                        ],
                        [
                            "id" => 528,
                            "role_id" => 4,
                            "permission_id" => 81
                        ],
                        [
                            "id" => 529,
                            "role_id" => 4,
                            "permission_id" => 82
                        ],
                        [
                            "id" => 530,
                            "role_id" => 4,
                            "permission_id" => 83
                        ],
                        [
                            "id" => 531,
                            "role_id" => 4,
                            "permission_id" => 84
                        ],
                        [
                            "id" => 532,
                            "role_id" => 4,
                            "permission_id" => 85
                        ],
                        [
                            "id" => 533,
                            "role_id" => 4,
                            "permission_id" => 86
                        ],
                        [
                            "id" => 534,
                            "role_id" => 4,
                            "permission_id" => 87
                        ],
                        [
                            "id" => 535,
                            "role_id" => 4,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 536,
                            "role_id" => 4,
                            "permission_id" => 89
                        ],
                        [
                            "id" => 537,
                            "role_id" => 4,
                            "permission_id" => 90
                        ],
                        [
                            "id" => 538,
                            "role_id" => 4,
                            "permission_id" => 91
                        ],
                        [
                            "id" => 539,
                            "role_id" => 4,
                            "permission_id" => 92
                        ],
                        [
                            "id" => 540,
                            "role_id" => 4,
                            "permission_id" => 93
                        ],
                        [
                            "id" => 541,
                            "role_id" => 4,
                            "permission_id" => 94
                        ],
                        [
                            "id" => 542,
                            "role_id" => 4,
                            "permission_id" => 95
                        ],
                        [
                            "id" => 543,
                            "role_id" => 4,
                            "permission_id" => 96
                        ],
                        [
                            "id" => 544,
                            "role_id" => 4,
                            "permission_id" => 97
                        ],
                        [
                            "id" => 545,
                            "role_id" => 4,
                            "permission_id" => 98
                        ],
                        [
                            "id" => 546,
                            "role_id" => 4,
                            "permission_id" => 99
                        ],
                        [
                            "id" => 547,
                            "role_id" => 4,
                            "permission_id" => 100
                        ],
                        [
                            "id" => 548,
                            "role_id" => 4,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 549,
                            "role_id" => 4,
                            "permission_id" => 102
                        ],
                        [
                            "id" => 550,
                            "role_id" => 4,
                            "permission_id" => 103
                        ],
                        [
                            "id" => 551,
                            "role_id" => 4,
                            "permission_id" => 104
                        ],
                        [
                            "id" => 552,
                            "role_id" => 4,
                            "permission_id" => 105
                        ],
                        [
                            "id" => 553,
                            "role_id" => 4,
                            "permission_id" => 106
                        ],
                        [
                            "id" => 554,
                            "role_id" => 4,
                            "permission_id" => 107
                        ],
                        [
                            "id" => 555,
                            "role_id" => 4,
                            "permission_id" => 108
                        ],
                        [
                            "id" => 556,
                            "role_id" => 4,
                            "permission_id" => 109
                        ],
                        [
                            "id" => 557,
                            "role_id" => 4,
                            "permission_id" => 110
                        ],
                        [
                            "id" => 558,
                            "role_id" => 4,
                            "permission_id" => 111
                        ],
                        [
                            "id" => 559,
                            "role_id" => 4,
                            "permission_id" => 112
                        ],
                        [
                            "id" => 560,
                            "role_id" => 4,
                            "permission_id" => 113
                        ],
                        [
                            "id" => 561,
                            "role_id" => 4,
                            "permission_id" => 114
                        ],
                        [
                            "id" => 562,
                            "role_id" => 4,
                            "permission_id" => 115
                        ],
                        [
                            "id" => 563,
                            "role_id" => 4,
                            "permission_id" => 116
                        ],
                        [
                            "id" => 564,
                            "role_id" => 4,
                            "permission_id" => 117
                        ],
                        [
                            "id" => 565,
                            "role_id" => 4,
                            "permission_id" => 118
                        ],
                        [
                            "id" => 566,
                            "role_id" => 4,
                            "permission_id" => 119
                        ],
                        [
                            "id" => 567,
                            "role_id" => 4,
                            "permission_id" => 120
                        ],
                        [
                            "id" => 568,
                            "role_id" => 4,
                            "permission_id" => 121
                        ],
                        [
                            "id" => 569,
                            "role_id" => 4,
                            "permission_id" => 122
                        ],
                        [
                            "id" => 570,
                            "role_id" => 4,
                            "permission_id" => 123
                        ],
                        [
                            "id" => 571,
                            "role_id" => 4,
                            "permission_id" => 124
                        ],
                        [
                            "id" => 572,
                            "role_id" => 4,
                            "permission_id" => 125
                        ],
                        [
                            "id" => 573,
                            "role_id" => 4,
                            "permission_id" => 126
                        ],
                        [
                            "id" => 574,
                            "role_id" => 4,
                            "permission_id" => 127
                        ],
                        [
                            "id" => 575,
                            "role_id" => 4,
                            "permission_id" => 128
                        ],
                        [
                            "id" => 576,
                            "role_id" => 4,
                            "permission_id" => 129
                        ],
                        [
                            "id" => 577,
                            "role_id" => 4,
                            "permission_id" => 130
                        ],
                        [
                            "id" => 578,
                            "role_id" => 4,
                            "permission_id" => 131
                        ],
                        [
                            "id" => 579,
                            "role_id" => 4,
                            "permission_id" => 132
                        ],
                        [
                            "id" => 580,
                            "role_id" => 4,
                            "permission_id" => 133
                        ],
                        [
                            "id" => 581,
                            "role_id" => 4,
                            "permission_id" => 134
                        ],
                        [
                            "id" => 582,
                            "role_id" => 4,
                            "permission_id" => 135
                        ],
                        [
                            "id" => 583,
                            "role_id" => 4,
                            "permission_id" => 136
                        ],
                        [
                            "id" => 584,
                            "role_id" => 4,
                            "permission_id" => 137
                        ],
                        [
                            "id" => 585,
                            "role_id" => 4,
                            "permission_id" => 138
                        ],
                        [
                            "id" => 586,
                            "role_id" => 4,
                            "permission_id" => 139
                        ],
                        [
                            "id" => 587,
                            "role_id" => 4,
                            "permission_id" => 140
                        ],
                        [
                            "id" => 588,
                            "role_id" => 4,
                            "permission_id" => 141
                        ],
                        [
                            "id" => 589,
                            "role_id" => 4,
                            "permission_id" => 142
                        ],
                        [
                            "id" => 590,
                            "role_id" => 4,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 591,
                            "role_id" => 4,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 592,
                            "role_id" => 4,
                            "permission_id" => 155
                        ],
                        [
                            "id" => 593,
                            "role_id" => 4,
                            "permission_id" => 163
                        ],
                        [
                            "id" => 675,
                            "role_id" => 5,
                            "permission_id" => 4
                        ],
                        [
                            "id" => 594,
                            "role_id" => 5,
                            "permission_id" => 24
                        ],
                        [
                            "id" => 595,
                            "role_id" => 5,
                            "permission_id" => 25
                        ],
                        [
                            "id" => 596,
                            "role_id" => 5,
                            "permission_id" => 26
                        ],
                        [
                            "id" => 597,
                            "role_id" => 5,
                            "permission_id" => 27
                        ],
                        [
                            "id" => 598,
                            "role_id" => 5,
                            "permission_id" => 28
                        ],
                        [
                            "id" => 670,
                            "role_id" => 5,
                            "permission_id" => 31
                        ],
                        [
                            "id" => 671,
                            "role_id" => 5,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 599,
                            "role_id" => 5,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 600,
                            "role_id" => 5,
                            "permission_id" => 40
                        ],
                        [
                            "id" => 672,
                            "role_id" => 5,
                            "permission_id" => 41
                        ],
                        [
                            "id" => 673,
                            "role_id" => 5,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 674,
                            "role_id" => 5,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 676,
                            "role_id" => 5,
                            "permission_id" => 53
                        ],
                        [
                            "id" => 601,
                            "role_id" => 5,
                            "permission_id" => 88
                        ],
                        [
                            "id" => 602,
                            "role_id" => 5,
                            "permission_id" => 101
                        ],
                        [
                            "id" => 668,
                            "role_id" => 5,
                            "permission_id" => 151
                        ],
                        [
                            "id" => 669,
                            "role_id" => 5,
                            "permission_id" => 152
                        ],
                        [
                            "id" => 603,
                            "role_id" => 5,
                            "permission_id" => 164
                        ],
                        [
                            "id" => 604,
                            "role_id" => 6,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 605,
                            "role_id" => 6,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 606,
                            "role_id" => 6,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 607,
                            "role_id" => 6,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 608,
                            "role_id" => 6,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 609,
                            "role_id" => 6,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 610,
                            "role_id" => 6,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 611,
                            "role_id" => 6,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 612,
                            "role_id" => 6,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 613,
                            "role_id" => 6,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 614,
                            "role_id" => 6,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 615,
                            "role_id" => 6,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 616,
                            "role_id" => 6,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 617,
                            "role_id" => 6,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 618,
                            "role_id" => 6,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 619,
                            "role_id" => 6,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 620,
                            "role_id" => 6,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 621,
                            "role_id" => 6,
                            "permission_id" => 39
                        ],
                        [
                            "id" => 622,
                            "role_id" => 6,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 623,
                            "role_id" => 6,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 624,
                            "role_id" => 6,
                            "permission_id" => 154
                        ],
                        [
                            "id" => 625,
                            "role_id" => 7,
                            "permission_id" => 5
                        ],
                        [
                            "id" => 626,
                            "role_id" => 7,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 627,
                            "role_id" => 7,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 628,
                            "role_id" => 7,
                            "permission_id" => 8
                        ],
                        [
                            "id" => 629,
                            "role_id" => 7,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 630,
                            "role_id" => 7,
                            "permission_id" => 10
                        ],
                        [
                            "id" => 631,
                            "role_id" => 7,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 632,
                            "role_id" => 7,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 633,
                            "role_id" => 7,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 634,
                            "role_id" => 7,
                            "permission_id" => 16
                        ],
                        [
                            "id" => 635,
                            "role_id" => 7,
                            "permission_id" => 17
                        ],
                        [
                            "id" => 636,
                            "role_id" => 7,
                            "permission_id" => 18
                        ],
                        [
                            "id" => 637,
                            "role_id" => 7,
                            "permission_id" => 19
                        ],
                        [
                            "id" => 638,
                            "role_id" => 7,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 639,
                            "role_id" => 7,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 640,
                            "role_id" => 7,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 641,
                            "role_id" => 7,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 642,
                            "role_id" => 7,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 643,
                            "role_id" => 7,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 644,
                            "role_id" => 7,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 645,
                            "role_id" => 8,
                            "permission_id" => 9
                        ],
                        [
                            "id" => 646,
                            "role_id" => 8,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 647,
                            "role_id" => 8,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 648,
                            "role_id" => 8,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 649,
                            "role_id" => 8,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 650,
                            "role_id" => 8,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 651,
                            "role_id" => 8,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 652,
                            "role_id" => 8,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 653,
                            "role_id" => 9,
                            "permission_id" => 6
                        ],
                        [
                            "id" => 654,
                            "role_id" => 9,
                            "permission_id" => 7
                        ],
                        [
                            "id" => 655,
                            "role_id" => 9,
                            "permission_id" => 11
                        ],
                        [
                            "id" => 656,
                            "role_id" => 9,
                            "permission_id" => 12
                        ],
                        [
                            "id" => 657,
                            "role_id" => 9,
                            "permission_id" => 13
                        ],
                        [
                            "id" => 658,
                            "role_id" => 9,
                            "permission_id" => 14
                        ],
                        [
                            "id" => 659,
                            "role_id" => 9,
                            "permission_id" => 15
                        ],
                        [
                            "id" => 660,
                            "role_id" => 9,
                            "permission_id" => 23
                        ],
                        [
                            "id" => 661,
                            "role_id" => 9,
                            "permission_id" => 29
                        ],
                        [
                            "id" => 662,
                            "role_id" => 9,
                            "permission_id" => 34
                        ],
                        [
                            "id" => 663,
                            "role_id" => 9,
                            "permission_id" => 36
                        ],
                        [
                            "id" => 664,
                            "role_id" => 9,
                            "permission_id" => 37
                        ],
                        [
                            "id" => 665,
                            "role_id" => 9,
                            "permission_id" => 42
                        ],
                        [
                            "id" => 666,
                            "role_id" => 9,
                            "permission_id" => 45
                        ],
                        [
                            "id" => 667,
                            "role_id" => 10,
                            "permission_id" => 154
                        ]
                    ]
                ],
            ]
        ]
    ],

];
