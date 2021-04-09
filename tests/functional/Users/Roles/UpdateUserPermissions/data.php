<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'После добавления пермишенов должности, они добавились и у всех пользователей этой должности',
            //и индивидуально удалённые не проставились
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'AuthItem[description]' => 'Контент-менеджер',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '0',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '1',
                'AuthItem[rolePermissions][requestCheckHidden]' => '0',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '0',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '1',
                'AuthItem[rolePermissions][categoryUpdate]' => '0',
                'AuthItem[rolePermissions][teamUpdate]' => '0',
                'AuthItem[rolePermissions][teamUpdate]' => '1',
                'AuthItem[rolePermissions][coefUpdate]' => '0',
                'AuthItem[rolePermissions][fieldsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '1',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '0',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '0',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '1',
                'AuthItem[rolePermissions][errorsUpdate]' => '0',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '0',
                'AuthItem[rolePermissions][takeToWork]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '0',
                'AuthItem[rolePermissions][requestStructureDesign]' => '0',
                'AuthItem[rolePermissions][viewAllDashboards]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '1',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '0',
                'AuthItem[rolePermissions][createUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '0',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '1',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '0',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '1',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '1',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '0',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '1',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '1',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '0',
                'AuthItem[rolePermissions][updateUser]' => '0',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '0',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '1',
                'AuthItem[rolePermissions][requestCreate]' => '0',
                'AuthItem[rolePermissions][requestCreate]' => '1',
                'AuthItem[rolePermissions][requestUpdate]' => '0',
                'AuthItem[rolePermissions][requestCreateRelated]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '1',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '0',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '0',
                'AuthItem[rolePermissions][blockUser]' => '0',
                'AuthItem[rolePermissions][reportView]' => '0',
                'AuthItem[rolePermissions][reportView]' => '1',
                'AuthItem[rolePermissions][massEdit]' => '0',
                'AuthItem[rolePermissions][massEdit]' => '1',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '0',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '1',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '0',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '0',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '1',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '1',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '0',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '0',
                'AuthItem[rolePermissions][requestUpdateItems]' => '0',
                'AuthItem[rolePermissions][requestTransferItems]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '1',
                'AuthItem[rolePermissions][requestGroupItems]' => '0',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    "auth.auth_assignment" => [
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
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
                            'item_name' => 'blockUser',
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
                            'item_name' => 'seeAllTemplates',
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
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 11,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 12,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 13,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'massEdit',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferWaitCheckToWaitWork',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferCompletedToClosed',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reasonsUpdate',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'sellerUpdate',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'teamUpdate',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'transferRequireChangeToWaitCheck',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'viewUser',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'reportLoadYourTeam',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestCreate',
                            'user_id' => 14,
                            'created_at' => null
                        ],
                        [
                            'item_name' => 'requestViewTeamRequests',
                            'user_id' => 14,
                            'created_at' => null
                        ]
                    ],
                    "auth.auth_item_child" => [
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
                            'parent' => 'admin',
                            'child' => 'errorsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'excludedFieldsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'fieldsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'priorityUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reasonsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadAllUsers'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestDeleteAttachments'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewDirectionRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeAllTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'sellerUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'teamUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'updateUser'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewAllDashboards'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewDashboardsByCommand'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewDashboardsByDirection'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewOwnDashboards'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'reasonsUpdate'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'sellerUpdate'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'teamUpdate'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'viewOwnDashboards'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'createUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestDeleteAttachments'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'updateUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewDashboardsByDirection'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewSplitterModerationRequests'
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
                            'parent' => 'photoManager',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestViewDirectionRequests'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewDashboardsByCommand'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeAllTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'viewSplitterModerationRequests'
                        ]
                    ]
                ],
            ]
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'После снятия пермишенов должности, они снялись и у всех пользователей этой должности',
            //и индивидуально удалённые не проставились
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'requestBody' => [
                'AuthItem[description]' => 'Контент-менеджер',
                'AuthItem[rolePermissions][transferCompletedToInWork]' => '0',
                'AuthItem[rolePermissions][requestCheckHidden]' => '0',
                'AuthItem[rolePermissions][requestAddFatPortalCat]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToClosed]' => '0',
                'AuthItem[rolePermissions][requestUpdateFatPortalCat]' => '0',
                'AuthItem[rolePermissions][requestAddAttrOrValues]' => '0',
                'AuthItem[rolePermissions][sellerUpdate]' => '0',
                'AuthItem[rolePermissions][categoryUpdate]' => '0',
                'AuthItem[rolePermissions][teamUpdate]' => '0',
                'AuthItem[rolePermissions][coefUpdate]' => '0',
                'AuthItem[rolePermissions][fieldsUpdate]' => '0',
                'AuthItem[rolePermissions][reasonsUpdate]' => '0',
                'AuthItem[rolePermissions][excludedFieldsUpdate]' => '0',
                'AuthItem[rolePermissions][requestUpdateAttrOrValues]' => '0',
                'AuthItem[rolePermissions][reportLoadAllUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadMarketUsers]' => '0',
                'AuthItem[rolePermissions][reportLoadYourTeam]' => '0',
                'AuthItem[rolePermissions][errorsUpdate]' => '0',
                'AuthItem[rolePermissions][viewSplitterModerationRequests]' => '0',
                'AuthItem[rolePermissions][takeToWork]' => '0',
                'AuthItem[rolePermissions][priorityUpdate]' => '0',
                'AuthItem[rolePermissions][requestStructureDesign]' => '0',
                'AuthItem[rolePermissions][viewAllDashboards]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByDirection]' => '0',
                'AuthItem[rolePermissions][viewDashboardsByCommand]' => '0',
                'AuthItem[rolePermissions][viewOwnDashboards]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSC]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateVideo]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateSizeGrid]' => '0',
                'AuthItem[rolePermissions][requestAddUpdateTags]' => '0',
                'AuthItem[rolePermissions][createUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToInCheck]' => '0',
                'AuthItem[rolePermissions][transferInCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferInCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToInWork]' => '0',
                'AuthItem[rolePermissions][transferInWorkToOnHold]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '0',
                'AuthItem[rolePermissions][transferInWorkToPartialComplete]' => '1',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '0',
                'AuthItem[rolePermissions][transferInWorkToCompleted]' => '1',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][transferInWorkToDeclined]' => '1',
                'AuthItem[rolePermissions][transferOnHoldToInWork]' => '0',
                'AuthItem[rolePermissions][updateUser]' => '0',
                'AuthItem[rolePermissions][transferCompletedToClosed]' => '0',
                'AuthItem[rolePermissions][requestCreate]' => '0',
                'AuthItem[rolePermissions][requestUpdate]' => '0',
                'AuthItem[rolePermissions][requestCreateRelated]' => '0',
                'AuthItem[rolePermissions][requestViewOwnRequests]' => '0',
                'AuthItem[rolePermissions][requestViewDirectionRequests]' => '0',
                'AuthItem[rolePermissions][requestViewAllRequests]' => '0',
                'AuthItem[rolePermissions][blockUser]' => '0',
                'AuthItem[rolePermissions][reportView]' => '0',
                'AuthItem[rolePermissions][reportView]' => '1',
                'AuthItem[rolePermissions][massEdit]' => '0',
                'AuthItem[rolePermissions][requestViewTeamRequests]' => '0',
                'AuthItem[rolePermissions][requestDeleteAttachments]' => '0',
                'AuthItem[rolePermissions][transferRequireChangeToWaitCheck]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToRequireChange]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToDeclined]' => '0',
                'AuthItem[rolePermissions][viewUser]' => '0',
                'AuthItem[rolePermissions][transferWaitCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferInCheckToWaitWork]' => '0',
                'AuthItem[rolePermissions][transferWaitWorkToDeclined]' => '0',
                'AuthItem[rolePermissions][requestAddNewItems]' => '0',
                'AuthItem[rolePermissions][transferInWorkToWaitWork]' => '0',
                'AuthItem[rolePermissions][requestUpdateItems]' => '0',
                'AuthItem[rolePermissions][requestTransferItems]' => '0',
                'AuthItem[rolePermissions][transferPartialCompleteToInWork]' => '0',
                'AuthItem[rolePermissions][requestGroupItems]' => '0',
                'AuthItem[rolePermissions][requestUploadPhoto]' => '0'
            ],
            'db' => [
                "lisa_fixtures" => [
                    'auth.auth_assignment' => [
                        [
                            'item_name' => 'requestUpdateAttrOrValues',
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
                            'item_name' => 'blockUser',
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
                            'item_name' => 'seeAllTemplates',
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
                    ],
                    "auth.auth_item_child" => [
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
                            'parent' => 'admin',
                            'child' => 'errorsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'excludedFieldsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'fieldsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'priorityUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reasonsUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadAllUsers'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestDeleteAttachments'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewDirectionRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeAllTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'sellerUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'teamUpdate'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'updateUser'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewAllDashboards'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewDashboardsByCommand'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewDashboardsByDirection'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewOwnDashboards'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'admin',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'contentManager',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'blockUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'createUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'reportLoadMarketUsers'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestDeleteAttachments'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdate'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'updateUser'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewDashboardsByDirection'
                        ],
                        [
                            'parent' => 'headSupervisor',
                            'child' => 'viewSplitterModerationRequests'
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
                            'parent' => 'photoManager',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'photoManager',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'productManager',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestViewOwnRequests'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'seo',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'massEdit'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'reportLoadYourTeam'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'reportView'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddAttrOrValues'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateAttrOrValues'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'requestViewDirectionRequests'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'takeToWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferCompletedToClosed'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferCompletedToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToRequireChange'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInCheckToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToCompleted'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToOnHold'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferInWorkToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferPartialCompleteToClosed'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToInCheck'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToRequireChange'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitCheckToWaitWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitWorkToDeclined'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewDashboardsByCommand'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewSplitterModerationRequests'
                        ],
                        [
                            'parent' => 'supervisor',
                            'child' => 'viewUser'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeAllTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeDirectionTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'seeTeamTemplates'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'transferOnHoldToCompleted'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'transferOnHoldToPartialComplete'
                        ],
                        [
                            'parent' => 'system',
                            'child' => 'updateTemplates'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddFatPortalCat'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddNewItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateSC'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateSizeGrid'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateTags'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestAddUpdateVideo'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCheckHidden'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCreate'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestCreateRelated'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestGroupItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestStructureDesign'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestTransferItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUpdateFatPortalCat'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUpdateItems'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestUploadPhoto'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestViewAllRequests'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'requestViewTeamRequests'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferOnHoldToInWork'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferRequireChangeToInCheck'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'transferRequireChangeToWaitCheck'
                        ],
                        [
                            'parent' => 'teamLead',
                            'child' => 'viewSplitterModerationRequests'
                        ]
                    ]
                ],
            ]
        ]
    ],

];
