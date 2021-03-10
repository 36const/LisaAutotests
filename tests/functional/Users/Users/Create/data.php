<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания юзера без логина/почты',
            'negative'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => '',
                'UserBpm[name]' => '',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'photoManager',
                'UserBpm[team]' => '20',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность создания супервайзера без команды',
            'negative'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_supervisor_2@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_supervisor_2',
                'UserBpm[name]' => 'Начальникович 2 Супервайзер',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'admin',
                'UserBpm[team]' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность создания менеджера без команды',
            'negative'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_contentManager_2a@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_contentManager_2a',
                'UserBpm[name]' => 'Контентович 2А Менеджер',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'contentManager',
                'UserBpm[team]' => '',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Невозможность создания супервайзера без руководителя',
            'negative'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_supervisor_1@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_supervisor_1',
                'UserBpm[name]' => 'Начальникович 1 Супервайзер',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'supervisor',
                'UserBpm[team]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                ],
            ],
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Невозможность создания менеджера без руководителя',
            'negative'
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_contentManager_2a@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_contentManager_2a',
                'UserBpm[name]' => 'Контентович 2А Менеджер',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'contentManager',
                'UserBpm[team]' => '1',
            ],
            'db' => [
                "lisa_fixtures" => [
                    "user_bpm" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_bpm'],
                    "user_permissions" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['user_permissions'],
                ],
            ],
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Создание тим-лида с командой',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_teamLead_1@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_teamLead_1',
                'UserBpm[name]' => 'Тим Лидович 1',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'teamLead',
                'UserBpm[team]' => '18',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Тим Лидович 1",
                            "login" => "bpm_teamLead_1",
                            "email" => "bpm_teamLead_1@rozetka.com.ua",
                            "team" => 18,
                            "parent_id" => 1,
                            "position" => "teamLead",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => ""
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 227,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 228,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 229,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 230,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 231,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 232,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 233,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 234,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 235,
                            "user_id" => 6,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 236,
                            "user_id" => 6,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 237,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            //"id" => 238,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 239,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],

    'case7' => [
        'setting' => [
            'description' => 'Создание продакта с кодом дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => "'000000099",
                'UserBpm[email]' => 'bpm_productManager_1@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_productManager_1',
                'UserBpm[name]' => 'Менеджер Продактович 1',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'productManager',
                'UserBpm[team]' => '',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Менеджер Продактович 1",
                            "login" => "bpm_productManager_1",
                            "email" => "bpm_productManager_1@rozetka.com.ua",
                            "team" => null,
                            "parent_id" => 1,
                            "position" => "productManager",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000099"
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 227,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 228,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 229,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 230,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 231,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 232,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 233,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 234,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 235,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 236,
                            "user_id" => 6,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 238,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 237,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],

    'case8' => [
        'setting' => [
            'description' => 'Создание сео с руководителем',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_seo_1@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_seo_1',
                'UserBpm[name]' => 'Сео Сеошевич 1',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'seo',
                'UserBpm[team]' => '',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Сео Сеошевич 1",
                            "login" => "bpm_seo_1",
                            "email" => "bpm_seo_1@rozetka.com.ua",
                            "team" => null,
                            "parent_id" => 5,
                            "position" => "seo",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => ""
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 227,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 228,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 229,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 230,
                            "user_id" => 6,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 232,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 231,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],

    'case9' => [
        'setting' => [
            'description' => 'Создание фотографа',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => '',
                'UserBpm[email]' => 'bpm_photoManager_2@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_photoManager_2',
                'UserBpm[name]' => 'Менеджер Фоткович 1',
                'UserBpm[parent_id]' => '',
                'UserBpm[position]' => 'photoManager',
                'UserBpm[team]' => '',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Менеджер Фоткович 1",
                            "login" => "bpm_photoManager_2",
                            "email" => "bpm_photoManager_2@rozetka.com.ua",
                            "team" => null,
                            "parent_id" => 1,
                            "position" => "photoManager",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => ""
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestViewTeamRequests"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],

    'case10' => [
        'setting' => [
            'description' => 'Создание менеджера с руководителем/командой/дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => "'000000002",
                'UserBpm[email]' => 'bpm_contentManager_2a@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_contentManager_2a',
                'UserBpm[name]' => 'Менеджер Контентович 2А',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'contentManager',
                'UserBpm[team]' => '2',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Менеджер Контентович 2А",
                            "login" => "bpm_contentManager_2a",
                            "email" => "bpm_contentManager_2a@rozetka.com.ua",
                            "team" => 2,
                            "parent_id" => 5,
                            "position" => "contentManager",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000002"
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestViewOwnRequests"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            //"id" => 227,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            //"id" => 228,
                            "user_id" => 6,
                            "permission_name" => "viewOwnDashboards"
                        ],
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],

    'case11' => [
        'setting' => [
            'description' => 'Создание супервайзера с руководителем/командой/дрфо',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'UserBpm[drfo]' => "'000000002",
                'UserBpm[email]' => 'bpm_supervisor_2@rozetka.com.ua',
                'UserBpm[login]' => 'bpm_supervisor_2',
                'UserBpm[name]' => 'Супервайзер Начальникович 2',
                'UserBpm[parent_id]' => '5',
                'UserBpm[position]' => 'supervisor',
                'UserBpm[team]' => '2',
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
                            "change_date" => "2020-05-19 16:36:22",
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
                        [
                            "id" => 6,
                            "name" => "Супервайзер Начальникович 2",
                            "login" => "bpm_supervisor_2",
                            "email" => "bpm_supervisor_2@rozetka.com.ua",
                            "team" => 2,
                            "parent_id" => 5,
                            "position" => "supervisor",
                            "status" => 1,
                            "create_ts >=" => date("Y-m-d"),
                            "created_by" => 4,
                            "change_date >=" => date("Y-m-d"),
                            "drfo" => "'000000002"
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
                            "user_id" => 5,
                            "permission_name" => "createUser"
                        ],
                        [
                            //"id" => 179,
                            "user_id" => 5,
                            "permission_name" => "updateUser"
                        ],
                        [
                            //"id" => 180,
                            "user_id" => 5,
                            "permission_name" => "blockUser"
                        ],
                        [
                            //"id" => 181,
                            "user_id" => 5,
                            "permission_name" => "massEdit"
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
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 185,
                            "user_id" => 5,
                            "permission_name" => "transferInCheckToDeclined"
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
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 195,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 196,
                            "user_id" => 5,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 197,
                            "user_id" => 5,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 198,
                            "user_id" => 5,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 199,
                            "user_id" => 5,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 200,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 201,
                            "user_id" => 5,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 202,
                            "user_id" => 5,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 203,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 204,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 205,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 206,
                            "user_id" => 5,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 207,
                            "user_id" => 5,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 208,
                            "user_id" => 5,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 209,
                            "user_id" => 5,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 210,
                            "user_id" => 5,
                            "permission_name" => "requestViewAllRequests"
                        ],
                        [
                            //"id" => 211,
                            "user_id" => 5,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 212,
                            "user_id" => 5,
                            "permission_name" => "reportLoadMarketUsers"
                        ],
                        [
                            //"id" => 213,
                            "user_id" => 5,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 214,
                            "user_id" => 5,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 215,
                            "user_id" => 5,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 216,
                            "user_id" => 5,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 217,
                            "user_id" => 5,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 218,
                            "user_id" => 5,
                            "permission_name" => "viewAllDashboards"
                        ],
                        [
                            //"id" => 219,
                            "user_id" => 6,
                            "permission_name" => "viewUser"
                        ],
                        [
                            //"id" => 220,
                            "user_id" => 6,
                            "permission_name" => "requestAddNewItems"
                        ],
                        [
                            //"id" => 221,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateItems"
                        ],
                        [
                            //"id" => 222,
                            "user_id" => 6,
                            "permission_name" => "requestTransferItems"
                        ],
                        [
                            //"id" => 223,
                            "user_id" => 6,
                            "permission_name" => "requestGroupItems"
                        ],
                        [
                            //"id" => 224,
                            "user_id" => 6,
                            "permission_name" => "requestUploadPhoto"
                        ],
                        [
                            //"id" => 225,
                            "user_id" => 6,
                            "permission_name" => "requestCheckHidden"
                        ],
                        [
                            //"id" => 226,
                            "user_id" => 6,
                            "permission_name" => "requestAddFatPortalCat"
                        ],
                        [
                            //"id" => 227,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            //"id" => 228,
                            "user_id" => 6,
                            "permission_name" => "requestAddAttrOrValues"
                        ],
                        [
                            //"id" => 229,
                            "user_id" => 6,
                            "permission_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            //"id" => 230,
                            "user_id" => 6,
                            "permission_name" => "requestStructureDesign"
                        ],
                        [
                            //"id" => 231,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSC"
                        ],
                        [
                            //"id" => 232,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateVideo"
                        ],
                        [
                            //"id" => 233,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            //"id" => 234,
                            "user_id" => 6,
                            "permission_name" => "requestAddUpdateTags"
                        ],
                        [
                            //"id" => 235,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            //"id" => 236,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToOnHold"
                        ],
                        [
                            //"id" => 237,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            //"id" => 238,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToCompleted"
                        ],
                        [
                            //"id" => 239,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToDeclined"
                        ],
                        [
                            //"id" => 240,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInWork"
                        ],
                        [
                            //"id" => 241,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToClosed"
                        ],
                        [
                            //"id" => 242,
                            "user_id" => 6,
                            "permission_name" => "requestCreate"
                        ],
                        [
                            //"id" => 243,
                            "user_id" => 6,
                            "permission_name" => "requestUpdate"
                        ],
                        [
                            //"id" => 244,
                            "user_id" => 6,
                            "permission_name" => "requestCreateRelated"
                        ],
                        [
                            //"id" => 245,
                            "user_id" => 6,
                            "permission_name" => "requestViewDirectionRequests"
                        ],
                        [
                            //"id" => 246,
                            "user_id" => 6,
                            "permission_name" => "reportView"
                        ],
                        [
                            //"id" => 247,
                            "user_id" => 6,
                            "permission_name" => "massEdit"
                        ],
                        [
                            //"id" => 249,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToRequireChange"
                        ],
                        [
                            //"id" => 250,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToDeclined"
                        ],
                        [
                            //"id" => 251,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitCheck"
                        ],
                        [
                            //"id" => 252,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            //"id" => 253,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToRequireChange"
                        ],
                        [
                            //"id" => 254,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToWaitCheck"
                        ],
                        [
                            //"id" => 255,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToDeclined"
                        ],
                        [
                            //"id" => 256,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToInCheck"
                        ],
                        [
                            //"id" => 257,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToRequireChange"
                        ],
                        [
                            //"id" => 258,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToDeclined"
                        ],
                        [
                            //"id" => 259,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToWaitCheck"
                        ],
                        [
                            //"id" => 260,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToWaitWork"
                        ],
                        [
                            //"id" => 261,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToInCheck"
                        ],
                        [
                            //"id" => 262,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToWaitWork"
                        ],
                        [
                            //"id" => 263,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToRequireChange"
                        ],
                        [
                            //"id" => 264,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToWaitWork"
                        ],
                        [
                            //"id" => 265,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToDeclined"
                        ],
                        [
                            //"id" => 266,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToWaitWork"
                        ],
                        [
                            //"id" => 267,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInCheck"
                        ],
                        [
                            //"id" => 268,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            //"id" => 269,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitCheck"
                        ],
                        [
                            //"id" => 270,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToInWork"
                        ],
                        [
                            //"id" => 271,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToInCheck"
                        ],
                        [
                            //"id" => 272,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToInWork"
                        ],
                        [
                            //"id" => 273,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToRequireChange"
                        ],
                        [
                            //"id" => 274,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToInWork"
                        ],
                        [
                            //"id" => 275,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToInWork"
                        ],
                        [
                            //"id" => 276,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToWaitWork"
                        ],
                        [
                            //"id" => 277,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToWaitCheck"
                        ],
                        [
                            //"id" => 278,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToOnHold"
                        ],
                        [
                            //"id" => 279,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToInCheck"
                        ],
                        [
                            //"id" => 280,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToOnHold"
                        ],
                        [
                            //"id" => 281,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToRequireChange"
                        ],
                        [
                            //"id" => 282,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToOnHold"
                        ],
                        [
                            //"id" => 283,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToDeclined"
                        ],
                        [
                            //"id" => 284,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToOnHold"
                        ],
                        [
                            //"id" => 285,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToWaitWork"
                        ],
                        [
                            //"id" => 286,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToOnHold"
                        ],
                        [
                            //"id" => 287,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToWaitCheck"
                        ],
                        [
                            //"id" => 288,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToPartialComplete"
                        ],
                        [
                            //"id" => 289,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInCheck"
                        ],
                        [
                            //"id" => 290,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToPartialComplete"
                        ],
                        [
                            //"id" => 291,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToRequireChange"
                        ],
                        [
                            //"id" => 292,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToPartialComplete"
                        ],
                        [
                            //"id" => 293,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToDeclined"
                        ],
                        [
                            //"id" => 294,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToPartialComplete"
                        ],
                        [
                            //"id" => 295,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToWaitWork"
                        ],
                        [
                            //"id" => 296,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToPartialComplete"
                        ],
                        [
                            //"id" => 297,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            //"id" => 298,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToOnHold"
                        ],
                        [
                            //"id" => 299,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToPartialComplete"
                        ],
                        [
                            //"id" => 300,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToWaitCheck"
                        ],
                        [
                            //"id" => 301,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToCompleted"
                        ],
                        [
                            //"id" => 302,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInCheck"
                        ],
                        [
                            //"id" => 303,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToCompleted"
                        ],
                        [
                            //"id" => 304,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToRequireChange"
                        ],
                        [
                            //"id" => 305,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToCompleted"
                        ],
                        [
                            //"id" => 306,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToDeclined"
                        ],
                        [
                            //"id" => 307,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToCompleted"
                        ],
                        [
                            //"id" => 308,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToWaitWork"
                        ],
                        [
                            //"id" => 309,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToCompleted"
                        ],
                        [
                            //"id" => 310,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToInWork"
                        ],
                        [
                            //"id" => 311,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToOnHold"
                        ],
                        [
                            //"id" => 312,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToCompleted"
                        ],
                        [
                            //"id" => 313,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToPartialComplete"
                        ],
                        [
                            //"id" => 314,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToCompleted"
                        ],
                        [
                            //"id" => 315,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToWaitCheck"
                        ],
                        [
                            //"id" => 316,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToClosed"
                        ],
                        [
                            //"id" => 317,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToInCheck"
                        ],
                        [
                            //"id" => 318,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToClosed"
                        ],
                        [
                            //"id" => 319,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToRequireChange"
                        ],
                        [
                            //"id" => 320,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToClosed"
                        ],
                        [
                            //"id" => 321,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToDeclined"
                        ],
                        [
                            //"id" => 322,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToClosed"
                        ],
                        [
                            //"id" => 323,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToWaitWork"
                        ],
                        [
                            //"id" => 324,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToClosed"
                        ],
                        [
                            //"id" => 325,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToInWork"
                        ],
                        [
                            //"id" => 326,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToClosed"
                        ],
                        [
                            //"id" => 327,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToOnHold"
                        ],
                        [
                            //"id" => 328,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToClosed"
                        ],
                        [
                            //"id" => 329,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToPartialComplete"
                        ],
                        [
                            //"id" => 330,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToClosed"
                        ],
                        [
                            //"id" => 331,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToCompleted"
                        ],
                        [
                            //"id" => 332,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToWaitCheck"
                        ],
                        [
                            //"id" => 333,
                            "user_id" => 6,
                            "permission_name" => "transferWaitCheckToAny"
                        ],
                        [
                            //"id" => 334,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToInCheck"
                        ],
                        [
                            //"id" => 335,
                            "user_id" => 6,
                            "permission_name" => "transferInCheckToAny"
                        ],
                        [
                            //"id" => 336,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToRequireChange"
                        ],
                        [
                            //"id" => 337,
                            "user_id" => 6,
                            "permission_name" => "transferRequireChangeToAny"
                        ],
                        [
                            //"id" => 338,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToDeclined"
                        ],
                        [
                            //"id" => 339,
                            "user_id" => 6,
                            "permission_name" => "transferDeclinedToAny"
                        ],
                        [
                            //"id" => 340,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToWaitWork"
                        ],
                        [
                            //"id" => 341,
                            "user_id" => 6,
                            "permission_name" => "transferWaitWorkToAny"
                        ],
                        [
                            //"id" => 342,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToInWork"
                        ],
                        [
                            //"id" => 343,
                            "user_id" => 6,
                            "permission_name" => "transferInWorkToAny"
                        ],
                        [
                            //"id" => 344,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToOnHold"
                        ],
                        [
                            //"id" => 345,
                            "user_id" => 6,
                            "permission_name" => "transferOnHoldToAny"
                        ],
                        [
                            //"id" => 346,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToPartialComplete"
                        ],
                        [
                            //"id" => 347,
                            "user_id" => 6,
                            "permission_name" => "transferPartialCompleteToAny"
                        ],
                        [
                            //"id" => 348,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToCompleted"
                        ],
                        [
                            //"id" => 349,
                            "user_id" => 6,
                            "permission_name" => "transferCompletedToAny"
                        ],
                        [
                            //"id" => 350,
                            "user_id" => 6,
                            "permission_name" => "transferAnyToClosed"
                        ],
                        [
                            //"id" => 351,
                            "user_id" => 6,
                            "permission_name" => "transferClosedToAny"
                        ],
                        [
                            //"id" => 352,
                            "user_id" => 6,
                            "permission_name" => "reportLoadYourTeam"
                        ],
                        [
                            //"id" => 353,
                            "user_id" => 6,
                            "permission_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            //"id" => 354,
                            "user_id" => 6,
                            "permission_name" => "takeToWork"
                        ],
                        [
                            //"id" => 355,
                            "user_id" => 6,
                            "permission_name" => "viewDashboardsByCommand"
                        ]
                    ],
                    "notification_settings" => [
                        [
                            'id' => 1,
                            "user_id" => 6,
                            "types_for_notification" => '{"create": 1, "comment": 2, "mention": 1, "manager_id": 1, "attachments": 1, "supervisor_id": 1}',
                            "fields_for_complete" => '[]',
                            "statuses_for_notification" => '{"1": 1, "2": 1, "3": 2, "4": 2, "5": 1, "6": 1, "7": 1, "8": 1, "9": 1, "11": 1}'
                        ]
                    ]
                ],
            ],
        ]
    ],
];
