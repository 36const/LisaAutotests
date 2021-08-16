<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Невозможность создания роли с кириллицей/цифрами/пробелом в названии',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'name' => 'Должность 987',
                'type' => 1,
                'description' => 'Описание описания',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
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
                    'requestUpdate' => true,
                    'updateTemplates' => false,
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
                    'seeTeamTemplates' => false,
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
                    'transferPartialCompleteToInWork' => true,
                    'transferPartialCompleteToClosed' => true,
                ],
            ],
            'responseBody' => [
                'errors' => [
                    'name' => [
                        0 => 'Название роли должно быть написано латинскими буквами и не содержать никаких других символов',
                    ],
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.auth_item' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    'auth.auth_item_child' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item_child'],
                ]
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Создание роли без описания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'role',
                'type' => 1,
                'description' => NULL,
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
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
                    'requestUpdate' => true,
                    'updateTemplates' => false,
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
                    'seeAllTemplates' => false,
                    'viewDashboardsByCommand' => false,
                    'viewDashboardsByDirection' => false,
                    'viewOwnDashboards' => false,
                    'viewAllDashboards' => false,
                    'requestViewTeamRequests' => false,
                    'viewSplitterModerationRequests' => false,
                    'requestViewDirectionRequests' => false,
                    'reportView' => false,
                    'viewUser' => false,
                    'requestViewOwnRequests' => false,
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
                    'transferPartialCompleteToInWork' => false,
                    'transferPartialCompleteToClosed' => false,
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'role',
                    'type' => 1,
                    'description' => NULL,
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => [
                        'expression' => 'NOW()',
                        'params' => [
                        ],
                    ],
                    'updated_at' => NULL,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => [
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

                    ],
                    'auth.auth_item' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                        [
                            [
                                'name' => 'role',
                                'type' => 1,
                                'description' => null,
                                'group' => null,
                                'rule_name' => null,
                                'data' => null,
                                'created_at >=' => date('Y-m-d'),
                                'updated_at' => null
                            ],
                        ]
                    ),
                    'auth.auth_item_child' => [
                        [
                            'parent' => 'admin',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'categoryUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'coefUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'createUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'moderator',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadAllUsers'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'updateUser'
                        ]
                    ],
                ]
            ]
        ],
    ],

    'case3' => [
        'setting' => [
            'description' => 'Создание роли c описанием',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'allowed_types_4',
                'available_perms',
                'perms_names',
                'user_permissions_4',
                'user_permissions_11',
            ],
            'requestBody' => [
                'name' => 'role',
                'type' => 1,
                'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1011234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОП',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
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
                    'requestUpdate' => true,
                    'updateTemplates' => false,
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
                    'seeAllTemplates' => false,
                    'viewDashboardsByCommand' => false,
                    'viewDashboardsByDirection' => false,
                    'viewOwnDashboards' => false,
                    'viewAllDashboards' => false,
                    'requestViewTeamRequests' => false,
                    'viewSplitterModerationRequests' => false,
                    'requestViewDirectionRequests' => false,
                    'reportView' => false,
                    'viewUser' => false,
                    'requestViewOwnRequests' => false,
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
                    'transferPartialCompleteToInWork' => false,
                    'transferPartialCompleteToClosed' => false,
                ],
            ],
            'responseBody' => [
                'model' => [
                    'name' => 'role',
                    'type' => 1,
                    'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1011234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОП',
                    'group' => NULL,
                    'rule_name' => NULL,
                    'data' => NULL,
                    'created_at' => [
                        'expression' => 'NOW()',
                        'params' => [
                        ],
                    ],
                    'updated_at' => NULL,
                ],
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.users'],
                    'auth.auth_assignment' => [
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
                    ],
                    'auth.auth_item' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                        [
                            [
                                'name' => 'role',
                                'type' => 1,
                                'description' => '=~}!@#$%^&*()_+`-]\'/[;.,}"?{:>\|<1011234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОП',
                                'group' => null,
                                'rule_name' => null,
                                'data' => null,
                                'created_at >=' => date('Y-m-d'),
                                'updated_at' => null
                            ],
                        ]
                    ),
                    'auth.auth_item_child' => [
                        [
                            'parent' => 'admin',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'categoryUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'coefUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'createUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'moderator',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadAllUsers'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'role',
                            'child' => 'updateUser'
                        ]
                    ],
                ]
            ]
        ],
    ],

];
