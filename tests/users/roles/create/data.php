<?php

use Codeception\Module\TestHelper;
use lisa\Constants;

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
                'project_id' => 0,
                'projects' => Constants::PROJECTS,
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
            'description' => 'Невозможность создания роли без названия',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'name' => NULL,
                'type' => 1,
                'description' => 'Описание описания',
                'group' => NULL,
                'rule_name' => NULL,
                'data' => NULL,
                'created_at' => '2020-03-10 12:07:48',
                'updated_at' => NULL,
                'project_id' => 0,
                'projects' => Constants::PROJECTS,
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
                        0 => 'Необходимо заполнить «Name».',
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

    'case3' => [
        'setting' => [
            'description' => 'Создание роли без описания, проект Все',
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
                'project_id' => 0,
                'projects' => Constants::PROJECTS,
                'permissions' => [
                    'blockUser',
                    'takeToWork',
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
                    'transferWaitWorkToDeclined',
                    'transferOnHoldToCompleted',
                    'transferOnHoldToInWork',
                    'transferOnHoldToPartialComplete',
                    'massEdit',
                    'requestTransferItems',
                    'requestCheckHidden',
                    'requestStructureDesign',
                    'requestViewAllRequests',
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
                    'project_id' => 'Все',
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
                    'common_log' => [
                        [
                            //'id' => 1,
                            'entity' => 'auth.auth_item',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"data": null, "name": "role", "type": 1, "group": null, "rule_name": null, "created_at": "2020-03-10 12:07:48", "project_id": 0, "updated_at": null, "description": null}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 2,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "blockUser", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 3,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "updateUser", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 4,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadAllUsers", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 5,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadMarketUsers", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 6,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadYourTeam", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 7,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddAttrOrValues", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 8,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddFatPortalCat", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 9,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddNewItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 11,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateSizeGrid", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 12,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateTags", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 13,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateVideo", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 14,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestCheckHidden", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 15,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestGroupItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 16,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestStructureDesign", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 17,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestTransferItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 18,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateAttrOrValues", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 19,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateFatPortalCat", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 20,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 21,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUploadPhoto", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 22,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "massEdit", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 23,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdate", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 24,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestViewAllRequests", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 25,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "takeToWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 26,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferCompletedToClosed", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 27,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferCompletedToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 28,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 29,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToRequireChange", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 30,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 31,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToCompleted", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 32,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 33,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToOnHold", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 34,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToPartialComplete", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 35,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 36,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToCompleted", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 37,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 38,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToPartialComplete", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 39,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferRequireChangeToWaitCheck", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 40,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 41,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToInCheck", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 42,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToRequireChange", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 43,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 44,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitWorkToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 45,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitWorkToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ]
            ]
        ],
    ],

    'case4' => [
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
                'project_id' => 0,
                'projects' => Constants::PROJECTS,
                'permissions' => [
                    'blockUser',
                    'takeToWork',
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
                    'transferWaitWorkToDeclined',
                    'transferOnHoldToCompleted',
                    'transferOnHoldToInWork',
                    'transferOnHoldToPartialComplete',
                    'massEdit',
                    'requestTransferItems',
                    'requestCheckHidden',
                    'requestStructureDesign',
                    'requestViewAllRequests',
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
                    'project_id' => 'Все',
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
                    'common_log' => [
                        [
                            //'id' => 1,
                            'entity' => 'auth.auth_item',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"data": null, "name": "role", "type": 1, "group": null, "rule_name": null, "created_at": "2020-03-10 12:07:48", "project_id": 0, "updated_at": null, "description": "=~}!@#$%^&*()_+`-]\'/[;.,}\"?{:>\\\|<1011234567890>абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОП"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 2,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "blockUser", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 3,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "updateUser", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 4,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadAllUsers", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 5,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadMarketUsers", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 6,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "reportLoadYourTeam", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 7,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddAttrOrValues", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 8,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddFatPortalCat", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 9,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddNewItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 11,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateSizeGrid", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 12,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateTags", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 13,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestAddUpdateVideo", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 14,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestCheckHidden", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 15,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestGroupItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 16,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestStructureDesign", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 17,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestTransferItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 18,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateAttrOrValues", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 19,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateFatPortalCat", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 20,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdateItems", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 21,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUploadPhoto", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 22,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "massEdit", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 23,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestUpdate", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 24,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "requestViewAllRequests", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 25,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "takeToWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 26,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferCompletedToClosed", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 27,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferCompletedToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 28,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 29,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToRequireChange", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 30,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInCheckToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 31,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToCompleted", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 32,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 33,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToOnHold", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 34,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToPartialComplete", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 35,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferInWorkToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 36,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToCompleted", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 37,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 38,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferOnHoldToPartialComplete", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 39,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferRequireChangeToWaitCheck", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 40,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 41,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToInCheck", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 42,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToRequireChange", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 43,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitCheckToWaitWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 44,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitWorkToDeclined", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                        [
                            //'id' => 45,
                            'entity' => 'auth.auth_item_child',
                            'entity_id' => 'role',
                            'old_value' => '[]',
                            'new_value' => '{"child": "transferWaitWorkToInWork", "parent": "role"}',
                            'user_id' => 4,
                            'created_at >=' => date('Y-m-d'),
                            'event' => 1,
                        ],
                    ],
                ]
            ]
        ],
    ],

];
