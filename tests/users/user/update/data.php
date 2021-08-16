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
                'position' => 'contentManager',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000099',
                'permissions' => [
                    'blockUser' => false,
                    'takeToWork' => false,
                    'transferInWorkToCompleted' => true,
                    'transferInWorkToWaitWork' => false,
                    'transferInWorkToOnHold' => true,
                    'transferInWorkToDeclined' => true,
                    'transferInWorkToPartialComplete' => true,
                    'reportLoadAllUsers' => false,
                    'reportLoadMarketUsers' => false,
                    'reportLoadYourTeam' => false,
                    'transferCompletedToInWork' => true,
                    'transferCompletedToClosed' => false,
                    'transferInCheckToRequireChange' => false,
                    'transferInCheckToWaitWork' => false,
                    'transferInCheckToDeclined' => false,
                    'requestGroupItems' => false,
                    'requestAddUpdateVideo' => false,
                    'requestUpdateFatPortalCat' => false,
                    'requestUpdateItems' => false,
                    'requestAddUpdateSizeGrid' => false,
                    'requestAddUpdateTags' => false,
                    'requestAddFatPortalCat' => false,
                    'requestAddUpdateSC' => false,
                    'requestAddNewItems' => false,
                    'requestAddAttrOrValues' => false,
                    'requestUploadPhoto' => false,
                    'updateUser' => false,
                    'requestUpdateAttrOrValues' => false,
                    'transferRequireChangeToWaitCheck' => false,
                    'transferWaitCheckToRequireChange' => false,
                    'transferWaitCheckToWaitWork' => false,
                    'transferWaitCheckToDeclined' => false,
                    'transferWaitCheckToInCheck' => false,
                    'requestUpdate' => false,
                    'updateTemplates' => false,
                    'transferWaitWorkToInWork' => true,
                    'transferWaitWorkToDeclined' => false,
                    'transferOnHoldToCompleted' => false,
                    'transferOnHoldToInWork' => false,
                    'transferOnHoldToPartialComplete' => false,
                    'massEdit' => false,
                    'requestTransferItems' => false,
                    'requestCheckHidden' => false,
                    'requestStructureDesign' => false,
                    'requestViewAllRequests' => false,
                    'seeAllTemplates' => false,
                    'viewDashboardsByCommand' => false,
                    'viewDashboardsByDirection' => false,
                    'viewOwnDashboards' => true,
                    'viewAllDashboards' => false,
                    'requestViewTeamRequests' => false,
                    'viewSplitterModerationRequests' => false,
                    'requestViewDirectionRequests' => false,
                    'reportView' => true,
                    'viewUser' => false,
                    'requestViewOwnRequests' => true,
                    'seeTeamTemplates' => false,
                    'seeDirectionTemplates' => false,
                    'excludedFieldsUpdate' => false,
                    'errorsUpdate' => false,
                    'categoryUpdate' => false,
                    'teamUpdate' => false,
                    'coefUpdate' => false,
                    'sellerUpdate' => false,
                    'fieldsUpdate' => false,
                    'priorityUpdate' => false,
                    'reasonsUpdate' => false,
                    'requestCreate' => false,
                    'requestCreateRelated' => false,
                    'createUser' => false,
                    'requestDeleteAttachments' => false,
                    'transferPartialCompleteToInWork' => true,
                    'transferPartialCompleteToClosed' => false,
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
                    'positionName' => 'Контент-менеджер',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    //'change_date >=' => date('Y-m-d'),
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
                            'drfo' => "'000000099"
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
                            'id' => 1,
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
                            'id' => 2,
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
                            'id' => 3,
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
                            'id' => 4,
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
                            'id' => 5,
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
                            'id' => 6,
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
                            'id' => 7,
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
                            'id' => 8,
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
                            'id' => 9,
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
                            'id' => 10,
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
                            'id' => 11,
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
                            'id' => 12,
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
                            'id' => 13,
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
                            'id' => 14,
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
                            'id' => 15,
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
                            'id' => 16,
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
                            'id' => 17,
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
                            'id' => 18,
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
                            'id' => 19,
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
                            'id' => 20,
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
                            'id' => 21,
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
                            'id' => 22,
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
                            'id' => 23,
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
                            'id' => 24,
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
                            'id' => 25,
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
                            'id' => 26,
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
                            'id' => 27,
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
                            'id' => 28,
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
                            'id' => 29,
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
                            'id' => 30,
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
                            'id' => 31,
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
                            'id' => 32,
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
                            'id' => 33,
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
                            'id' => 34,
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
                            'id' => 35,
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
                            'id' => 36,
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
                            'id' => 37,
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
                            'id' => 38,
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
                            'id' => 39,
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
                            'id' => 40,
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
                            'id' => 41,
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
                            'id' => 42,
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
                            'id' => 43,
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
                            'id' => 44,
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
                            'id' => 45,
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
                            'id' => 46,
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
                            'id' => 47,
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
                            'id' => 48,
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
                            'id' => 49,
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
                            'id' => 50,
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
                            'id' => 51,
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
                            'id' => 52,
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
                            'id' => 53,
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
                            'id' => 54,
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
                            'id' => 55,
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
                            'id' => 56,
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
                            'id' => 57,
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
                            'id' => 58,
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
                            'id' => 59,
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
                            'id' => 60,
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
                            'id' => 61,
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
                            'id' => 62,
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
                            'id' => 63,
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
                            'id' => 64,
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
                            'id' => 65,
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
                        '","drfo":"\'000000099"},"changed_fields_names":["team","parent_id","position","change_date","drfo"]}'
                    ]
                ],
            ],
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменить команду, ДРФО, руководителя и роль без изменения роли сплиттера',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'managers_2',
                'managers_17',
                'supervisors',
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
                'position' => 'headSupervisor',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000099',
                'permissions' => [
                    'blockUser' => true,
                    'takeToWork' => true,
                    'transferInWorkToCompleted' => true,
                    'transferInWorkToWaitWork' => true,
                    'transferInWorkToOnHold' => true,
                    'transferInWorkToDeclined' => true,
                    'transferInWorkToPartialComplete' => true,
                    'reportLoadAllUsers' => false,
                    'reportLoadMarketUsers' => true,
                    'reportLoadYourTeam' => false,
                    'transferCompletedToInWork' => true,
                    'transferCompletedToClosed' => true,
                    'transferInCheckToRequireChange' => true,
                    'transferInCheckToWaitWork' => true,
                    'transferInCheckToDeclined' => true,
                    'requestGroupItems' => true,
                    'requestAddUpdateVideo' => true,
                    'requestUpdateFatPortalCat' => true,
                    'requestUpdateItems' => true,
                    'requestAddUpdateSizeGrid' => true,
                    'requestAddUpdateTags' => true,
                    'requestAddFatPortalCat' => true,
                    'requestAddUpdateSC' => true,
                    'requestAddNewItems' => true,
                    'requestAddAttrOrValues' => true,
                    'requestUploadPhoto' => true,
                    'updateUser' => true,
                    'requestUpdateAttrOrValues' => true,
                    'transferRequireChangeToWaitCheck' => true,
                    'transferWaitCheckToRequireChange' => true,
                    'transferWaitCheckToWaitWork' => true,
                    'transferWaitCheckToDeclined' => true,
                    'transferWaitCheckToInCheck' => true,
                    'requestUpdate' => true,
                    'updateTemplates' => true,
                    'transferWaitWorkToInWork' => true,
                    'transferWaitWorkToDeclined' => true,
                    'transferOnHoldToCompleted' => false,
                    'transferOnHoldToInWork' => true,
                    'transferOnHoldToPartialComplete' => false,
                    'massEdit' => true,
                    'requestTransferItems' => true,
                    'requestCheckHidden' => true,
                    'requestStructureDesign' => true,
                    'requestViewAllRequests' => true,
                    'seeAllTemplates' => false,
                    'viewDashboardsByCommand' => false,
                    'viewDashboardsByDirection' => true,
                    'viewOwnDashboards' => false,
                    'viewAllDashboards' => false,
                    'requestViewTeamRequests' => false,
                    'viewSplitterModerationRequests' => true,
                    'requestViewDirectionRequests' => false,
                    'reportView' => true,
                    'viewUser' => true,
                    'requestViewOwnRequests' => false,
                    'seeTeamTemplates' => true,
                    'seeDirectionTemplates' => true,
                    'excludedFieldsUpdate' => false,
                    'errorsUpdate' => false,
                    'categoryUpdate' => false,
                    'teamUpdate' => false,
                    'coefUpdate' => false,
                    'sellerUpdate' => false,
                    'fieldsUpdate' => false,
                    'priorityUpdate' => false,
                    'reasonsUpdate' => false,
                    'requestCreate' => true,
                    'requestCreateRelated' => true,
                    'createUser' => true,
                    'requestDeleteAttachments' => false,
                    'transferPartialCompleteToInWork' => true,
                    'transferPartialCompleteToClosed' => true,
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
                    'position' => 'headSupervisor',
                    'positionName' => 'Руководитель супервайзеров',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    //'change_date >=' => date('Y-m-d'),
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
                            'team' => 1,
                            'parent_id' => 5,
                            'position' => 'headSupervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000099"
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
                            'id' => 1,
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
                            'id' => 2,
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
                            'id' => 3,
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
                            'id' => 4,
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
                            'id' => 5,
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
                            'id' => 6,
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
                            'id' => 7,
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
                            'id' => 8,
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
                            'id' => 9,
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
                            'id' => 10,
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
                            'id' => 11,
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
                            'id' => 12,
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
                            'id' => 13,
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
                            'id' => 14,
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
                            'id' => 15,
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
                            'id' => 16,
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
                            'id' => 17,
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
                            'id' => 18,
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
                            'id' => 19,
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
                            'id' => 20,
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
                            'id' => 21,
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
                            'id' => 22,
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
                            'id' => 23,
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
                            'id' => 24,
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
                            'id' => 25,
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
                        '{"action":"update","entity":"users","fields_data":{"id":4,"name":"Константин Куцан","login":"kutsan.k","email":"kutsan.k@rozetka.com.ua","team":1,"parent_id":5,"position":"headSupervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"\'000000099"},"changed_fields_names":["team","parent_id","position","change_date","drfo"]}'
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
                'permissions' => [
                    'blockUser' => false,
                    'takeToWork' => false,
                    'transferInWorkToCompleted' => true,
                    'transferInWorkToWaitWork' => true,
                    'transferInWorkToOnHold' => true,
                    'transferInWorkToDeclined' => true,
                    'transferInWorkToPartialComplete' => true,
                    'reportLoadAllUsers' => true,
                    'reportLoadMarketUsers' => true,
                    'reportLoadYourTeam' => true,
                    'transferCompletedToInWork' => true,
                    'transferCompletedToClosed' => true,
                    'transferInCheckToRequireChange' => true,
                    'transferInCheckToWaitWork' => true,
                    'transferInCheckToDeclined' => true,
                    'requestGroupItems' => true,
                    'requestAddUpdateVideo' => true,
                    'requestUpdateFatPortalCat' => true,
                    'requestUpdateItems' => true,
                    'requestAddUpdateSizeGrid' => true,
                    'requestAddUpdateTags' => true,
                    'requestAddFatPortalCat' => true,
                    'requestAddUpdateSC' => true,
                    'requestAddNewItems' => true,
                    'requestAddAttrOrValues' => true,
                    'requestUploadPhoto' => true,
                    'updateUser' => true,
                    'requestUpdateAttrOrValues' => true,
                    'transferRequireChangeToWaitCheck' => true,
                    'transferWaitCheckToRequireChange' => true,
                    'transferWaitCheckToWaitWork' => true,
                    'transferWaitCheckToDeclined' => true,
                    'transferWaitCheckToInCheck' => true,
                    'requestUpdate' => true,
                    'updateTemplates' => false,
                    'transferWaitWorkToInWork' => true,
                    'transferWaitWorkToDeclined' => false,
                    'transferOnHoldToCompleted' => false,
                    'transferOnHoldToInWork' => true,
                    'transferOnHoldToPartialComplete' => false,
                    'massEdit' => true,
                    'requestTransferItems' => true,
                    'requestCheckHidden' => true,
                    'requestStructureDesign' => true,
                    'requestViewAllRequests' => true,
                    'seeAllTemplates' => false,
                    'viewDashboardsByCommand' => true,
                    'viewDashboardsByDirection' => true,
                    'viewOwnDashboards' => true,
                    'viewAllDashboards' => true,
                    'requestViewTeamRequests' => true,
                    'viewSplitterModerationRequests' => true,
                    'requestViewDirectionRequests' => true,
                    'reportView' => true,
                    'viewUser' => true,
                    'requestViewOwnRequests' => true,
                    'seeTeamTemplates' => true,
                    'seeDirectionTemplates' => false,
                    'excludedFieldsUpdate' => true,
                    'errorsUpdate' => true,
                    'categoryUpdate' => true,
                    'teamUpdate' => true,
                    'coefUpdate' => true,
                    'sellerUpdate' => true,
                    'fieldsUpdate' => true,
                    'priorityUpdate' => true,
                    'reasonsUpdate' => true,
                    'requestCreate' => true,
                    'requestCreateRelated' => true,
                    'createUser' => true,
                    'requestDeleteAttachments' => true,
                    'transferPartialCompleteToInWork' => false,
                    'transferPartialCompleteToClosed' => true,
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
                    'positionName' => 'Администратор',
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
                            'id' => 1,
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
                            'id' => 2,
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
                            'id' => 3,
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
                            'id' => 4,
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
                            'id' => 5,
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
                            'id' => 6,
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
                            'id' => 7,
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
                            'id' => 8,
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
                            'id' => 9,
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
                'permissions' => [
                    'blockUser' => true,
                    'takeToWork' => true,
                    'transferInWorkToCompleted' => true,
                    'transferInWorkToWaitWork' => true,
                    'transferInWorkToOnHold' => true,
                    'transferInWorkToDeclined' => true,
                    'transferInWorkToPartialComplete' => true,
                    'reportLoadAllUsers' => true,
                    'reportLoadMarketUsers' => true,
                    'reportLoadYourTeam' => true,
                    'transferCompletedToInWork' => true,
                    'transferCompletedToClosed' => true,
                    'transferInCheckToRequireChange' => true,
                    'transferInCheckToWaitWork' => true,
                    'transferInCheckToDeclined' => true,
                    'requestGroupItems' => true,
                    'requestAddUpdateVideo' => true,
                    'requestUpdateFatPortalCat' => true,
                    'requestUpdateItems' => true,
                    'requestAddUpdateSizeGrid' => true,
                    'requestAddUpdateTags' => true,
                    'requestAddFatPortalCat' => true,
                    'requestAddUpdateSC' => true,
                    'requestAddNewItems' => true,
                    'requestAddAttrOrValues' => true,
                    'requestUploadPhoto' => true,
                    'updateUser' => true,
                    'requestUpdateAttrOrValues' => true,
                    'transferRequireChangeToWaitCheck' => true,
                    'transferWaitCheckToRequireChange' => true,
                    'transferWaitCheckToWaitWork' => true,
                    'transferWaitCheckToDeclined' => true,
                    'transferWaitCheckToInCheck' => true,
                    'requestUpdate' => false,
                    'updateTemplates' => true,
                    'transferWaitWorkToInWork' => true,
                    'transferWaitWorkToDeclined' => true,
                    'transferOnHoldToCompleted' => true,
                    'transferOnHoldToInWork' => true,
                    'transferOnHoldToPartialComplete' => true,
                    'massEdit' => true,
                    'requestTransferItems' => true,
                    'requestCheckHidden' => true,
                    'requestStructureDesign' => true,
                    'requestViewAllRequests' => true,
                    'seeAllTemplates' => true,
                    'viewDashboardsByCommand' => true,
                    'viewDashboardsByDirection' => true,
                    'viewOwnDashboards' => true,
                    'viewAllDashboards' => true,
                    'requestViewTeamRequests' => true,
                    'viewSplitterModerationRequests' => true,
                    'requestViewDirectionRequests' => true,
                    'reportView' => true,
                    'viewUser' => true,
                    'requestViewOwnRequests' => true,
                    'seeTeamTemplates' => true,
                    'seeDirectionTemplates' => true,
                    'excludedFieldsUpdate' => true,
                    'errorsUpdate' => true,
                    'categoryUpdate' => true,
                    'teamUpdate' => true,
                    'coefUpdate' => true,
                    'sellerUpdate' => true,
                    'fieldsUpdate' => true,
                    'priorityUpdate' => true,
                    'reasonsUpdate' => true,
                    'requestCreate' => true,
                    'requestCreateRelated' => true,
                    'createUser' => true,
                    'requestDeleteAttachments' => true,
                    'transferPartialCompleteToInWork' => true,
                    'transferPartialCompleteToClosed' => true,
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
                    'positionName' => 'Администратор',
                    'status' => 'Заблокированный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    //'change_date >=' => date('Y-m-d'),
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
                            'drfo' => "'000000004"
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
                        '","drfo":"\'000000004"},"changed_fields_names":["status","change_date"]}'
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
                'permissions' => [
                    'blockUser' => true,
                    'takeToWork' => true,
                    'transferInWorkToCompleted' => true,
                    'transferInWorkToWaitWork' => true,
                    'transferInWorkToOnHold' => true,
                    'transferInWorkToDeclined' => true,
                    'transferInWorkToPartialComplete' => true,
                    'reportLoadAllUsers' => true,
                    'reportLoadMarketUsers' => true,
                    'reportLoadYourTeam' => true,
                    'transferCompletedToInWork' => true,
                    'transferCompletedToClosed' => true,
                    'transferInCheckToRequireChange' => true,
                    'transferInCheckToWaitWork' => true,
                    'transferInCheckToDeclined' => true,
                    'requestGroupItems' => true,
                    'requestAddUpdateVideo' => true,
                    'requestUpdateFatPortalCat' => true,
                    'requestUpdateItems' => true,
                    'requestAddUpdateSizeGrid' => true,
                    'requestAddUpdateTags' => true,
                    'requestAddFatPortalCat' => true,
                    'requestAddUpdateSC' => true,
                    'requestAddNewItems' => true,
                    'requestAddAttrOrValues' => true,
                    'requestUploadPhoto' => true,
                    'updateUser' => true,
                    'requestUpdateAttrOrValues' => true,
                    'transferRequireChangeToWaitCheck' => true,
                    'transferWaitCheckToRequireChange' => true,
                    'transferWaitCheckToWaitWork' => true,
                    'transferWaitCheckToDeclined' => true,
                    'transferWaitCheckToInCheck' => true,
                    'requestUpdate' => false,
                    'updateTemplates' => true,
                    'transferWaitWorkToInWork' => true,
                    'transferWaitWorkToDeclined' => true,
                    'transferOnHoldToCompleted' => true,
                    'transferOnHoldToInWork' => true,
                    'transferOnHoldToPartialComplete' => true,
                    'massEdit' => true,
                    'requestTransferItems' => true,
                    'requestCheckHidden' => true,
                    'requestStructureDesign' => true,
                    'requestViewAllRequests' => true,
                    'seeAllTemplates' => true,
                    'viewDashboardsByCommand' => true,
                    'viewDashboardsByDirection' => true,
                    'viewOwnDashboards' => true,
                    'viewAllDashboards' => true,
                    'requestViewTeamRequests' => true,
                    'viewSplitterModerationRequests' => true,
                    'requestViewDirectionRequests' => true,
                    'reportView' => true,
                    'viewUser' => true,
                    'requestViewOwnRequests' => true,
                    'seeTeamTemplates' => true,
                    'seeDirectionTemplates' => true,
                    'excludedFieldsUpdate' => true,
                    'errorsUpdate' => true,
                    'categoryUpdate' => true,
                    'teamUpdate' => true,
                    'coefUpdate' => true,
                    'sellerUpdate' => true,
                    'fieldsUpdate' => true,
                    'priorityUpdate' => true,
                    'reasonsUpdate' => true,
                    'requestCreate' => true,
                    'requestCreateRelated' => true,
                    'createUser' => true,
                    'requestDeleteAttachments' => true,
                    'transferPartialCompleteToInWork' => true,
                    'transferPartialCompleteToClosed' => true,
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
                    'positionName' => 'Администратор',
                    'status' => 'Активный',
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    //'change_date >=' => date('Y-m-d'),
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
                            'drfo' => "'000000004"
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
                        '","drfo":"\'000000004"},"changed_fields_names":["status","change_date"]}'
                    ]
                ],
            ],
        ],
    ],
];
