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
                    "auth.auth_item" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    "auth.auth_assignment" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
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
                    "auth.auth_item" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    "auth.auth_assignment" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
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
                    "auth.auth_item" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    "auth.auth_assignment" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
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
                    "auth.auth_item" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    "auth.auth_assignment" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
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
                    "auth.auth_item" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    "auth.auth_assignment" => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
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
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewAllRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "viewSplitterModerationRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "teamLead"
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
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddNewItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestGroupItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCheckHidden"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateSC"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateVideo"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateSizeGrid"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddUpdateTags"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "productManager"
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
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestTransferItems"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateFatPortalCat"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestAddAttrOrValues"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestUpdateAttrOrValues"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestStructureDesign"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "seo"
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
                        [
                            "user_id" => 6,
                            "item_name" => "requestUploadPhoto"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreate"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestCreateRelated"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewTeamRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToInCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferRequireChangeToWaitCheck"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "photoManager"
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
                        [
                            "user_id" => 6,
                            "item_name" => "transferWaitWorkToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferInWorkToOnHold"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferInWorkToPartialComplete"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferInWorkToCompleted"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferInWorkToDeclined"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "requestViewOwnRequests"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "reportView"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferPartialCompleteToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferCompletedToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "transferOnHoldToInWork"
                        ],
                        [
                            "user_id" => 6,
                            "item_name" => "viewOwnDashboards"
                        ],
                        [
                            'user_id' => 6,
                            'item_name' => 'contentManager'
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
                    "auth.auth_assignment" => [
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToRequireFix',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToInCheck',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 1,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToRequireFix',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToInCheck',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 2,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToRequireFix',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToInCheck',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToRequireFix',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToInCheck',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 5,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'supervisor',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToInCheck',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 6,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 6,
                            'created_at' => null
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
