<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменить команду, ДРФО, руководителя и роль с изменением роли сплиттера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'managers_2',
                'managers_17',
                'supervisors',
                'system_usersae2ad3d3da10c2072175ce20624812d4',
                'user_team_ids_1',
                'user_team_ids_2',
                'user_permissions_4',
            ],
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 5,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000099',
                'positions' => [
                    0 => NULL,
                    1 => 'contentManager',
                ],
                'permissions' => [
                    'transferInWorkToCompleted',
                    'transferInWorkToOnHold',
                    'transferInWorkToDeclined',
                    'transferInWorkToPartialComplete',
                    'transferCompletedToInWork',
                    'transferWaitWorkToInWork',
                    'viewOwnDashboards',
                    'reportView',
                    'requestViewOwnRequests',
                    'transferPartialCompleteToInWork',
                ],
                'disabledProjects' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 1,
                    'teamName' => 'Маркетплейс 1',
                    'parent_id' => 5,
                    'position' => 'contentManager',
                    'positions' => '["contentManager"]',
                    'positionName' => 'Контент-менеджер (Контент)',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date >=' => date('Y-m-d'),
                    'drfo' => '\'000000099',
                    'parent' => '5.Супервайзер Руководько 1',
                ],
                'newSplitterRole' => 'userBPM',
                'oldSplitterRole' => 'adminBPM',
                'reassignRequired' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][0],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][1],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][2],
                        [
                            'id' => 4,
                            'name' => 'Константин Куцан',
                            'login' => 'kutsan.k',
                            'email' => 'kutsan.k@rozetka.com.ua',
                            'team' => 1,
                            'parent_id' => 5,
                            'position' => 'contentManager',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000099",
                            'positions' => '["contentManager"]',
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][4],
                    ],
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'contentManager',
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            //'id' => 1,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'team',
                            'old_value' => '17',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 2,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'parent_id',
                            'old_value' => '1. Система',
                            'new_value' => '5. Супервайзер Руководько 1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 3,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'position',
                            'old_value' => 'admin',
                            'new_value' => 'contentManager',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 4,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'drfo',
                            'old_value' => "'000000004",
                            'new_value' => "'000000099",
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 3,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["admin"]',
                            'new_value' => '["contentManager"]',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 5,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 6,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 7,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToWaitWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 8,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadAllUsers',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 9,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadMarketUsers',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 10,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadYourTeam',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 11,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToClosed',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 12,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToRequireChange',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 13,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToWaitWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 14,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToDeclined',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 15,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestGroupItems',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 16,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateVideo',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 17,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateFatPortalCat',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 18,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateItems',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 19,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSizeGrid',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 20,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateTags',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 21,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddFatPortalCat',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 22,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSC',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 23,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddNewItems',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 24,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddAttrOrValues',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 25,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUploadPhoto',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 26,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 27,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateAttrOrValues',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 28,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToWaitCheck',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 29,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToRequireChange',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 30,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToWaitWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 31,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToDeclined',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 32,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToInCheck',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 33,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 34,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToDeclined',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 35,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 36,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'massEdit',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 37,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestTransferItems',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 38,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCheckHidden',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 39,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestStructureDesign',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 40,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewAllRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 41,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeAllTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 42,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByCommand',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 43,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByDirection',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 44,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewAllDashboards',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 45,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 46,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewSplitterModerationRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 47,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 48,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 49,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeTeamTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 50,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeDirectionTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 51,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'excludedFieldsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 52,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'errorsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 53,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'categoryUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 54,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'teamUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 55,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'coefUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 56,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'sellerUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 57,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'fieldsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 58,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'priorityUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 59,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reasonsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 60,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 61,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 62,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 63,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestDeleteAttachments',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 64,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToClosed',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 65,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'contentManager',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":4,"name":"Константин Куцан","login":"kutsan.k","email":"kutsan.k@rozetka.com.ua","team":1,"parent_id":5,"position":"contentManager","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"\'000000099","positions":"[\"contentManager\"]"},"changed_fields_names":["team","parent_id","position","change_date","drfo","positions"]}'
                    ]
                ],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменить ДРФО, руководителя и роль без изменения роли сплиттера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'managers_2',
                'managers_17',
                'supervisors',
                'system_usersae2ad3d3da10c2072175ce20624812d4',
                'user_permissions_4',
            ],
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 5,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000099',
                'positions' => [
                    0 => 'headSupervisor',
                ],
                'permissions' => [
                    'blockUser',
                    'takeToWork',
                    'transferInWorkToCompleted',
                    'transferInWorkToWaitWork',
                    'transferInWorkToOnHold',
                    'transferInWorkToDeclined',
                    'transferInWorkToPartialComplete',
                    'reportLoadMarketUsers',
                    'transferCompletedToInWork',
                    'transferCompletedToClosed',
                    'transferInCheckToRequireChange',
                    'transferInCheckToWaitWork',
                    'transferInCheckToDeclined',
                    'requestGroupItems',
                    'requestAddUpdateVideo',
                    'requestUpdateFatPortalCat',
                    'requestUpdateItems',
                    'requestAddUpdateSizeGrid',
                    'requestAddUpdateTags',
                    'requestAddFatPortalCat',
                    'requestAddUpdateSC',
                    'requestAddNewItems',
                    'requestAddAttrOrValues',
                    'requestUploadPhoto',
                    'updateUser',
                    'requestUpdateAttrOrValues',
                    'transferRequireChangeToWaitCheck',
                    'transferWaitCheckToRequireChange',
                    'transferWaitCheckToWaitWork',
                    'transferWaitCheckToDeclined',
                    'transferWaitCheckToInCheck',
                    'requestUpdate',
                    'updateTemplates',
                    'transferWaitWorkToInWork',
                    'transferWaitWorkToDeclined',
                    'transferOnHoldToInWork',
                    'massEdit',
                    'requestTransferItems',
                    'requestCheckHidden',
                    'requestStructureDesign',
                    'requestViewAllRequests',
                    'viewDashboardsByDirection',
                    'viewSplitterModerationRequests',
                    'reportView',
                    'viewUser',
                    'seeTeamTemplates',
                    'seeDirectionTemplates',
                    'requestCreate',
                    'requestCreateRelated',
                    'createUser',
                    'transferPartialCompleteToInWork',
                    'transferPartialCompleteToClosed',
                ],
                'disabledProjects' => [
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 17,
                    'teamName' => 'Административная команда',
                    'parent_id' => 5,
                    'position' => 'headSupervisor',
                    'positions' => '["headSupervisor"]',
                    'positionName' => 'Руководитель супервайзеров (Все)',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date >=' => date('Y-m-d'),
                    'drfo' => '\'000000099',
                    'parent' => '5.Супервайзер Руководько 1',
                ],
                'newSplitterRole' => 'adminBPM',
                'oldSplitterRole' => 'adminBPM',
                'reassignRequired' => false,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][0],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][1],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][2],
                        [
                            'id' => 4,
                            'name' => 'Константин Куцан',
                            'login' => 'kutsan.k',
                            'email' => 'kutsan.k@rozetka.com.ua',
                            'team' => 17,
                            'parent_id' => 5,
                            'position' => 'headSupervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000099",
                            'positions' => '["headSupervisor"]',
                        ],
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'][4],
                    ],
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 1,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:58'
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 2,
                            'created_at' => '2021-04-04 13:27:59'
                        ],
                        [
                            'item_name' => 'blockUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'headSupervisor',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d')
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
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
                            'created_at >=' => date('Y-m-d')
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
                            'item_name' => 'seeDirectionTemplates',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
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
                            'item_name' => 'transferInCheckToWaitWork',
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
                            'item_name' => 'transferInWorkToWaitWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 4,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
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
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'createUser',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'reportView',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'updateUser',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 5,
                            'created_at' => '2021-04-04 13:31:19'
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            //'id' => 2,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'parent_id',
                            'old_value' => '1. Система',
                            'new_value' => '5. Супервайзер Руководько 1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 3,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'position',
                            'old_value' => 'admin',
                            'new_value' => 'headSupervisor',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 4,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'drfo',
                            'old_value' => "'000000004",
                            'new_value' => "'000000099",
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 3,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["admin"]',
                            'new_value' => '["headSupervisor"]',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 5,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadAllUsers',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 6,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadYourTeam',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 7,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdate',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 8,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeAllTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 9,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByCommand',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 10,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnDashboards',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 11,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewAllDashboards',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 12,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewTeamRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 13,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 14,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewOwnRequests',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 15,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'excludedFieldsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 16,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'errorsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 17,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'categoryUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 18,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'teamUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 19,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'coefUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 20,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'sellerUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 21,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'fieldsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 22,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'priorityUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 23,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reasonsUpdate',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 24,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestDeleteAttachments',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 25,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'headSupervisor',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ]
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":4,"name":"Константин Куцан","login":"kutsan.k","email":"kutsan.k@rozetka.com.ua","team":17,"parent_id":5,"position":"headSupervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"\'000000099","positions":"[\"headSupervisor\"]"},"changed_fields_names":["parent_id","position","change_date","drfo","positions"]}'
                    ]
                ],
            ],
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменить только набор пермишенов',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case3.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'managers_2',
                'managers_17',
                'user_permissions_4',
            ],
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000004',
                'positions' => [
                    0 => 'admin',
                ],
                'permissions' => [
                    'transferInWorkToCompleted',
                    'transferInWorkToWaitWork',
                    'transferInWorkToOnHold',
                    'transferInWorkToDeclined',
                    'transferInWorkToPartialComplete',
                    'reportLoadAllUsers',
                    'reportLoadMarketUsers',
                    'reportLoadYourTeam',
                    'transferCompletedToInWork',
                    'transferCompletedToClosed',
                    'transferInCheckToRequireChange',
                    'transferInCheckToWaitWork',
                    'transferInCheckToDeclined',
                    'requestGroupItems',
                    'requestAddUpdateVideo',
                    'requestUpdateFatPortalCat',
                    'requestUpdateItems',
                    'requestAddUpdateSizeGrid',
                    'requestAddUpdateTags',
                    'requestAddFatPortalCat',
                    'requestAddUpdateSC',
                    'requestAddNewItems',
                    'requestAddAttrOrValues',
                    'requestUploadPhoto',
                    'updateUser',
                    'requestUpdateAttrOrValues',
                    'transferRequireChangeToWaitCheck',
                    'transferWaitCheckToRequireChange',
                    'transferWaitCheckToWaitWork',
                    'transferWaitCheckToDeclined',
                    'transferWaitCheckToInCheck',
                    'requestUpdate',
                    'transferWaitWorkToInWork',
                    'transferOnHoldToInWork',
                    'massEdit',
                    'requestTransferItems',
                    'requestCheckHidden',
                    'requestStructureDesign',
                    'requestViewAllRequests',
                    'viewDashboardsByCommand',
                    'viewDashboardsByDirection',
                    'viewOwnDashboards',
                    'viewAllDashboards',
                    'requestViewTeamRequests',
                    'viewSplitterModerationRequests',
                    'requestViewDirectionRequests',
                    'reportView',
                    'viewUser',
                    'requestViewOwnRequests',
                    'seeTeamTemplates',
                    'excludedFieldsUpdate',
                    'errorsUpdate',
                    'categoryUpdate',
                    'teamUpdate',
                    'coefUpdate',
                    'sellerUpdate',
                    'fieldsUpdate',
                    'priorityUpdate',
                    'reasonsUpdate',
                    'requestCreate',
                    'requestCreateRelated',
                    'createUser',
                    'requestDeleteAttachments',
                    'transferPartialCompleteToClosed',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 17,
                    'teamName' => 'Административная команда',
                    'parent_id' => 1,
                    'position' => 'admin',
                    'positions' => '["admin"]',
                    'positionName' => 'Администратор (Все)',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => '\'000000004',
                    'parent' => '1.Система',
                ],
                'newSplitterRole' => 'adminBPM',
                'oldSplitterRole' => 'adminBPM',
                'reassignRequired' => false,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 1
                        ],
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeAllTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:27:58',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToCompleted',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferOnHoldToPartialComplete',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
                        ],
                        [
                            'item_name' => 'categoryUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'coefUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'errorsUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'excludedFieldsUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'fieldsUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'priorityUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reportLoadAllUsers',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestDeleteAttachments',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestViewDirectionRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestViewOwnRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewAllDashboards',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewDashboardsByCommand',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewOwnDashboards',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => null,
                            'user_id' => 4
                        ],
                        [
                            'item_name' => 'blockUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'createUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'massEdit',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'reportLoadMarketUsers',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'reportView',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddAttrOrValues',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddFatPortalCat',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddNewItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateSC',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateSizeGrid',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateTags',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestAddUpdateVideo',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCheckHidden',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestCreateRelated',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestGroupItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestStructureDesign',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestTransferItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdate',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateFatPortalCat',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUpdateItems',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestUploadPhoto',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'requestViewAllRequests',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'seeDirectionTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'seeTeamTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'takeToWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferCompletedToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToRequireChange',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInCheckToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToCompleted',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToOnHold',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToPartialComplete',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferInWorkToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferOnHoldToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToClosed',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferPartialCompleteToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToInCheck',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToRequireChange',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitWorkToDeclined',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'transferWaitWorkToInWork',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'updateTemplates',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'updateUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewDashboardsByDirection',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewSplitterModerationRequests',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ],
                        [
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:31:19',
                            'user_id' => 5
                        ]
                    ],
                    'auth.user_changing_history' => [
                        [
                            //'id' => 1,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'blockUser',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 2,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 3,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdate',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 4,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 5,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 6,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToDeclined',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 7,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeAllTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 8,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeDirectionTemplates',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            //'id' => 9,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ]
                    ],
                ]
            ],
            'RabbitMQ' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case4' => [
        'setting' => [
            'description' => 'Заблокировать юзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case4.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors'
            ],
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 0,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000004',
                'positions' => [
                    0 => 'admin',
                ],
                'permissions' => [
                    'blockUser',
                    'categoryUpdate',
                    'coefUpdate',
                    'createUser',
                    'errorsUpdate',
                    'excludedFieldsUpdate',
                    'fieldsUpdate',
                    'massEdit',
                    'priorityUpdate',
                    'reasonsUpdate',
                    'reportLoadAllUsers',
                    'reportLoadMarketUsers',
                    'reportLoadYourTeam',
                    'reportView',
                    'requestAddAttrOrValues',
                    'requestAddFatPortalCat',
                    'requestAddNewItems',
                    'requestAddUpdateSC',
                    'requestAddUpdateSizeGrid',
                    'requestAddUpdateTags',
                    'requestAddUpdateVideo',
                    'requestCheckHidden',
                    'requestCreate',
                    'requestCreateRelated',
                    'requestDeleteAttachments',
                    'requestGroupItems',
                    'requestStructureDesign',
                    'requestTransferItems',
                    'requestUpdateAttrOrValues',
                    'requestUpdateFatPortalCat',
                    'requestUpdateItems',
                    'requestUploadPhoto',
                    'requestViewAllRequests',
                    'requestViewDirectionRequests',
                    'requestViewOwnRequests',
                    'requestViewTeamRequests',
                    'seeAllTemplates',
                    'seeDirectionTemplates',
                    'seeTeamTemplates',
                    'sellerUpdate',
                    'takeToWork',
                    'teamUpdate',
                    'transferAnyToClosed',
                    'transferAnyToCompleted',
                    'transferAnyToDeclined',
                    'transferAnyToInCheck',
                    'transferAnyToInWork',
                    'transferAnyToOnHold',
                    'transferAnyToPartialComplete',
                    'transferAnyToRequireChange',
                    'transferAnyToWaitCheck',
                    'transferAnyToWaitWork',
                    'transferClosedToAny',
                    'transferClosedToCompleted',
                    'transferClosedToDeclined',
                    'transferClosedToInCheck',
                    'transferClosedToInWork',
                    'transferClosedToOnHold',
                    'transferClosedToPartialComplete',
                    'transferClosedToRequireChange',
                    'transferClosedToWaitCheck',
                    'transferClosedToWaitWork',
                    'transferCompletedToAny',
                    'transferCompletedToClosed',
                    'transferCompletedToDeclined',
                    'transferCompletedToInCheck',
                    'transferCompletedToInWork',
                    'transferCompletedToOnHold',
                    'transferCompletedToPartialComplete',
                    'transferCompletedToRequireChange',
                    'transferCompletedToWaitCheck',
                    'transferCompletedToWaitWork',
                    'transferDeclinedToAny',
                    'transferDeclinedToClosed',
                    'transferDeclinedToCompleted',
                    'transferDeclinedToInCheck',
                    'transferDeclinedToInWork',
                    'transferDeclinedToOnHold',
                    'transferDeclinedToPartialComplete',
                    'transferDeclinedToRequireChange',
                    'transferDeclinedToWaitCheck',
                    'transferDeclinedToWaitWork',
                    'transferInCheckToAny',
                    'transferInCheckToClosed',
                    'transferInCheckToCompleted',
                    'transferInCheckToDeclined',
                    'transferInCheckToInWork',
                    'transferInCheckToOnHold',
                    'transferInCheckToPartialComplete',
                    'transferInCheckToRequireChange',
                    'transferInCheckToWaitCheck',
                    'transferInCheckToWaitWork',
                    'transferInWorkToAny',
                    'transferInWorkToClosed',
                    'transferInWorkToCompleted',
                    'transferInWorkToDeclined',
                    'transferInWorkToInCheck',
                    'transferInWorkToOnHold',
                    'transferInWorkToPartialComplete',
                    'transferInWorkToRequireChange',
                    'transferInWorkToWaitCheck',
                    'transferInWorkToWaitWork',
                    'transferOnHoldToAny',
                    'transferOnHoldToClosed',
                    'transferOnHoldToCompleted',
                    'transferOnHoldToDeclined',
                    'transferOnHoldToInCheck',
                    'transferOnHoldToInWork',
                    'transferOnHoldToPartialComplete',
                    'transferOnHoldToRequireChange',
                    'transferOnHoldToWaitCheck',
                    'transferOnHoldToWaitWork',
                    'transferPartialCompleteToAny',
                    'transferPartialCompleteToClosed',
                    'transferPartialCompleteToCompleted',
                    'transferPartialCompleteToDeclined',
                    'transferPartialCompleteToInCheck',
                    'transferPartialCompleteToInWork',
                    'transferPartialCompleteToOnHold',
                    'transferPartialCompleteToRequireChange',
                    'transferPartialCompleteToWaitCheck',
                    'transferPartialCompleteToWaitWork',
                    'transferRequireChangeToAny',
                    'transferRequireChangeToClosed',
                    'transferRequireChangeToCompleted',
                    'transferRequireChangeToDeclined',
                    'transferRequireChangeToInWork',
                    'transferRequireChangeToOnHold',
                    'transferRequireChangeToPartialComplete',
                    'transferRequireChangeToWaitCheck',
                    'transferRequireChangeToWaitWork',
                    'transferWaitCheckToAny',
                    'transferWaitCheckToClosed',
                    'transferWaitCheckToCompleted',
                    'transferWaitCheckToDeclined',
                    'transferWaitCheckToInCheck',
                    'transferWaitCheckToInWork',
                    'transferWaitCheckToOnHold',
                    'transferWaitCheckToPartialComplete',
                    'transferWaitCheckToRequireChange',
                    'transferWaitCheckToWaitWork',
                    'transferWaitWorkToAny',
                    'transferWaitWorkToClosed',
                    'transferWaitWorkToCompleted',
                    'transferWaitWorkToDeclined',
                    'transferWaitWorkToInCheck',
                    'transferWaitWorkToInWork',
                    'transferWaitWorkToOnHold',
                    'transferWaitWorkToPartialComplete',
                    'transferWaitWorkToRequireChange',
                    'transferWaitWorkToWaitCheck',
                    'updateTemplates',
                    'updateUser',
                    'viewAllDashboards',
                    'viewDashboardsByCommand',
                    'viewDashboardsByDirection',
                    'viewOwnDashboards',
                    'viewSplitterModerationRequests',
                    'viewUser',
                    'commentRequestMrk',
                    'createFilterMrk',
                    'createRequestMrk',
                    'createSubRequestMrk',
                    'updateRequestMrk',
                    'viewAllRequestsMrk',
                    'viewOwnRequestsMrk',
                    'viewTeamRequestsMrk',
                    'seeHiddenCrossCheckFields',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 17,
                    'teamName' => 'Административная команда',
                    'parent_id' => 1,
                    'position' => 'admin',
                    'positions' => '["admin"]',
                    'positionName' => 'Администратор (Все)',
                    'status' => 'Заблокированный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date >=' => date('Y-m-d'),
                    'drfo' => '\'000000004',
                    'parent' => '1.Система',
                ],
                'newSplitterRole' => NULL,
                'oldSplitterRole' => 'adminBPM',
                'reassignRequired' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['auth.users'][0],
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['auth.users'][1],
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['auth.users'][2],
                        [
                            'id' => 4,
                            'name' => 'Константин Куцан',
                            'login' => 'kutsan.k',
                            'email' => 'kutsan.k@rozetka.com.ua',
                            'team' => 17,
                            'parent_id' => 1,
                            'position' => 'admin',
                            'status' => 0,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000004",
                            'positions' => '["admin"]',
                        ],
                        (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['auth.users'][4],
                    ],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case4.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'status',
                            'old_value' => '1',
                            'new_value' => '0',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":4,"name":"Константин Куцан","login":"kutsan.k","email":"kutsan.k@rozetka.com.ua","team":17,"parent_id":1,"position":"admin","status":0,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"\'000000004","positions":"[\"admin\"]"},"changed_fields_names":["status","change_date"]}'
                    ]
                ],
            ],
        ],
    ],

    'case5' => [
        'setting' => [
            'description' => 'Активировать юзера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case5.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'active_user_names',
                'managers_2',
                'managers_17',
                'supervisors'
            ],
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000004',
                'positions' => [
                    0 => 'admin',
                ],
                'permissions' => [
                    'blockUser',
                    'categoryUpdate',
                    'coefUpdate',
                    'createUser',
                    'errorsUpdate',
                    'excludedFieldsUpdate',
                    'fieldsUpdate',
                    'massEdit',
                    'priorityUpdate',
                    'reasonsUpdate',
                    'reportLoadAllUsers',
                    'reportLoadMarketUsers',
                    'reportLoadYourTeam',
                    'reportView',
                    'requestAddAttrOrValues',
                    'requestAddFatPortalCat',
                    'requestAddNewItems',
                    'requestAddUpdateSC',
                    'requestAddUpdateSizeGrid',
                    'requestAddUpdateTags',
                    'requestAddUpdateVideo',
                    'requestCheckHidden',
                    'requestCreate',
                    'requestCreateRelated',
                    'requestDeleteAttachments',
                    'requestGroupItems',
                    'requestStructureDesign',
                    'requestTransferItems',
                    'requestUpdateAttrOrValues',
                    'requestUpdateFatPortalCat',
                    'requestUpdateItems',
                    'requestUploadPhoto',
                    'requestViewAllRequests',
                    'requestViewDirectionRequests',
                    'requestViewOwnRequests',
                    'requestViewTeamRequests',
                    'seeAllTemplates',
                    'seeDirectionTemplates',
                    'seeTeamTemplates',
                    'sellerUpdate',
                    'takeToWork',
                    'teamUpdate',
                    'transferAnyToClosed',
                    'transferAnyToCompleted',
                    'transferAnyToDeclined',
                    'transferAnyToInCheck',
                    'transferAnyToInWork',
                    'transferAnyToOnHold',
                    'transferAnyToPartialComplete',
                    'transferAnyToRequireChange',
                    'transferAnyToWaitCheck',
                    'transferAnyToWaitWork',
                    'transferClosedToAny',
                    'transferClosedToCompleted',
                    'transferClosedToDeclined',
                    'transferClosedToInCheck',
                    'transferClosedToInWork',
                    'transferClosedToOnHold',
                    'transferClosedToPartialComplete',
                    'transferClosedToRequireChange',
                    'transferClosedToWaitCheck',
                    'transferClosedToWaitWork',
                    'transferCompletedToAny',
                    'transferCompletedToClosed',
                    'transferCompletedToDeclined',
                    'transferCompletedToInCheck',
                    'transferCompletedToInWork',
                    'transferCompletedToOnHold',
                    'transferCompletedToPartialComplete',
                    'transferCompletedToRequireChange',
                    'transferCompletedToWaitCheck',
                    'transferCompletedToWaitWork',
                    'transferDeclinedToAny',
                    'transferDeclinedToClosed',
                    'transferDeclinedToCompleted',
                    'transferDeclinedToInCheck',
                    'transferDeclinedToInWork',
                    'transferDeclinedToOnHold',
                    'transferDeclinedToPartialComplete',
                    'transferDeclinedToRequireChange',
                    'transferDeclinedToWaitCheck',
                    'transferDeclinedToWaitWork',
                    'transferInCheckToAny',
                    'transferInCheckToClosed',
                    'transferInCheckToCompleted',
                    'transferInCheckToDeclined',
                    'transferInCheckToInWork',
                    'transferInCheckToOnHold',
                    'transferInCheckToPartialComplete',
                    'transferInCheckToRequireChange',
                    'transferInCheckToWaitCheck',
                    'transferInCheckToWaitWork',
                    'transferInWorkToAny',
                    'transferInWorkToClosed',
                    'transferInWorkToCompleted',
                    'transferInWorkToDeclined',
                    'transferInWorkToInCheck',
                    'transferInWorkToOnHold',
                    'transferInWorkToPartialComplete',
                    'transferInWorkToRequireChange',
                    'transferInWorkToWaitCheck',
                    'transferInWorkToWaitWork',
                    'transferOnHoldToAny',
                    'transferOnHoldToClosed',
                    'transferOnHoldToCompleted',
                    'transferOnHoldToDeclined',
                    'transferOnHoldToInCheck',
                    'transferOnHoldToInWork',
                    'transferOnHoldToPartialComplete',
                    'transferOnHoldToRequireChange',
                    'transferOnHoldToWaitCheck',
                    'transferOnHoldToWaitWork',
                    'transferPartialCompleteToAny',
                    'transferPartialCompleteToClosed',
                    'transferPartialCompleteToCompleted',
                    'transferPartialCompleteToDeclined',
                    'transferPartialCompleteToInCheck',
                    'transferPartialCompleteToInWork',
                    'transferPartialCompleteToOnHold',
                    'transferPartialCompleteToRequireChange',
                    'transferPartialCompleteToWaitCheck',
                    'transferPartialCompleteToWaitWork',
                    'transferRequireChangeToAny',
                    'transferRequireChangeToClosed',
                    'transferRequireChangeToCompleted',
                    'transferRequireChangeToDeclined',
                    'transferRequireChangeToInWork',
                    'transferRequireChangeToOnHold',
                    'transferRequireChangeToPartialComplete',
                    'transferRequireChangeToWaitCheck',
                    'transferRequireChangeToWaitWork',
                    'transferWaitCheckToAny',
                    'transferWaitCheckToClosed',
                    'transferWaitCheckToCompleted',
                    'transferWaitCheckToDeclined',
                    'transferWaitCheckToInCheck',
                    'transferWaitCheckToInWork',
                    'transferWaitCheckToOnHold',
                    'transferWaitCheckToPartialComplete',
                    'transferWaitCheckToRequireChange',
                    'transferWaitCheckToWaitWork',
                    'transferWaitWorkToAny',
                    'transferWaitWorkToClosed',
                    'transferWaitWorkToCompleted',
                    'transferWaitWorkToDeclined',
                    'transferWaitWorkToInCheck',
                    'transferWaitWorkToInWork',
                    'transferWaitWorkToOnHold',
                    'transferWaitWorkToPartialComplete',
                    'transferWaitWorkToRequireChange',
                    'transferWaitWorkToWaitCheck',
                    'updateTemplates',
                    'updateUser',
                    'viewAllDashboards',
                    'viewDashboardsByCommand',
                    'viewDashboardsByDirection',
                    'viewOwnDashboards',
                    'viewSplitterModerationRequests',
                    'viewUser',
                    'commentRequestMrk',
                    'createFilterMrk',
                    'createRequestMrk',
                    'createSubRequestMrk',
                    'updateRequestMrk',
                    'viewAllRequestsMrk',
                    'viewOwnRequestsMrk',
                    'viewTeamRequestsMrk',
                    'seeHiddenCrossCheckFields',
                ],
            ],
            'responseBody' => [
                'model' => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 17,
                    'teamName' => 'Административная команда',
                    'parent_id' => 1,
                    'position' => 'admin',
                    'positions' => '["admin"]',
                    'positionName' => 'Администратор (Все)',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date >=' => date('Y-m-d'),
                    'drfo' => '\'000000004',
                    'parent' => '1.Система',
                ],
                'newSplitterRole' => 'adminBPM',
                'oldSplitterRole' => NULL,
                'reassignRequired' => true,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['auth.users'][0],
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['auth.users'][1],
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['auth.users'][2],
                        [
                            'id' => 4,
                            'name' => 'Константин Куцан',
                            'login' => 'kutsan.k',
                            'email' => 'kutsan.k@rozetka.com.ua',
                            'team' => 17,
                            'parent_id' => 1,
                            'position' => 'admin',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000004",
                            'positions' => '["admin"]',
                        ],
                        (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['auth.users'][4],
                    ],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case5.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 4,
                            'changed_user_login' => 'kutsan.k',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'status',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":4,"name":"Константин Куцан","login":"kutsan.k","email":"kutsan.k@rozetka.com.ua","team":17,"parent_id":1,"position":"admin","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"\'000000004","positions":"[\"admin\"]"},"changed_fields_names":["status","change_date"]}'
                    ]
                ],
            ],
        ],
    ],

    'case6' => [
        'setting' => [
            'description' => 'Невозможность изменить роль на проект Маркетинг при команде проекта Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000004',
                'positions' => [
                    0 => NULL,
                    1 => NULL,
                    2 => 'marketolog',
                ],
                'permissions' => [
                    'viewOwnRequestsMrk',
                    'viewTeamRequestsMrk',
                    'viewAllRequestsMrk',
                    'createFilterMrk',
                    'createRequestMrk',
                    'createSubRequestMrk',
                    'updateRequestMrk',
                    'commentRequestMrk',
                ],
                'disabledProjects' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'positions' => [
                        0 => 'Необходимо заполнить либо роль, относящуюся к проекту команды, либо роль Все',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => [],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ],
    ],

    'case7' => [
        'setting' => [
            'description' => 'Невозможность изменить роль на проект Контент при команде проекта Все',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'id' => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 17,
                'parent_id' => 1,
                'position' => 'admin',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000004',
                'positions' => [
                    0 => NULL,
                    1 => 'contentManager',
                ],
                'permissions' => [
                    'transferInWorkToCompleted',
                    'transferInWorkToOnHold',
                    'transferInWorkToDeclined',
                    'transferInWorkToPartialComplete',
                    'transferCompletedToInWork',
                    'transferWaitWorkToInWork',
                    'viewOwnDashboards',
                    'reportView',
                    'requestViewOwnRequests',
                    'transferPartialCompleteToInWork',
                ],
                'disabledProjects' => [
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'positions' => [
                        0 => 'Необходимо заполнить либо роль, относящуюся к проекту команды, либо роль Все',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => [],
                ]
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [],
            ],
        ],
    ],

];
