<?php

use Codeception\Module\TestHelper;

return [
    'case1' => [
        'setting' => [
            'description' => 'Групповое изменение роли Контента у нескольких пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'managers_2',
                'managers_17',
                'user_permissions_9',
                'user_permissions_6',
                'supervisors',
                'allowed_types_8',
            ],
            'requestBody' => [
                'users' => [6, 8, 9],
                'itemId' => 'contentManager'
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        [
                            'id' => 1,
                            'name' => 'Система',
                            'login' => 'systemBPM',
                            'email' => 'system@rozetka.com.ua',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'system',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 2,
                            'name' => 'Администратор',
                            'login' => 'adminBPM',
                            'email' => 'admin@admin.com',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'admin',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 3,
                            'name' => 'Гость',
                            'login' => 'guestBPM',
                            'email' => 'guest@guest.com',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'guest',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
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
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => "'000000004"
                        ],
                        [
                            'id' => 5,
                            'name' => 'Супервайзер Руководько 1',
                            'login' => 'bpm_headSupervisor_1',
                            'email' => 'bpm_headSupervisor_1@rozetka.com.ua',
                            'team' => 17,
                            'parent_id' => 4,
                            'position' => 'headSupervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => "'000000005",
                            'positions' => '["headSupervisor"]',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Супервайзер Начальникович 1',
                            'login' => 'bpm_supervisor_1',
                            'email' => 'bpm_supervisor_1@rozetka.com.ua',
                            'team' => 1,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000006",
                            'positions' => '["contentManager"]',
                        ],
                        [
                            'id' => 7,
                            'name' => 'Splitter.Moderation',
                            'login' => 'splitter_moderation',
                            'email' => 'splitter_moderation@rozetka.com.ua',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'system',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date' => '2020-04-13 13:17:20',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 8,
                            'name' => 'Супервайзер Групповушкин 13',
                            'login' => 'bpm_supervisor_13',
                            'email' => 'bpm_supervisor_13@rozetka.com.ua',
                            'team' => 14,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => '0',
                            'positions' => '["contentManager"]',
                        ],
                        [
                            'id' => 9,
                            'name' => 'Супервайзер Групповушкин 16',
                            'login' => 'bpm_supervisor_16',
                            'email' => 'bpm_supervisor_16@rozetka.com.ua',
                            'team' => 14,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => '0',
                            'positions' => '["contentManager"]',
                        ],
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
                            'item_name' => 'viewUser',
                            'created_at' => '2021-04-04 13:27:59',
                            'user_id' => 2
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
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'requestViewOwnRequests'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'reportView'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'viewOwnDashboards'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 6,
                            'item_name' => 'contentManager'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'requestViewOwnRequests'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'reportView'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'viewOwnDashboards'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'contentManager'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 8,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferWaitWorkToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferInWorkToOnHold'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferInWorkToPartialComplete'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferInWorkToCompleted'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferInWorkToDeclined'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'requestViewOwnRequests'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'reportView'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferPartialCompleteToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferCompletedToInWork'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'viewOwnDashboards'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'contentManager'
                        ],
                        [
                            'created_at >=' => date('Y-m-d'),
                            'user_id' => 9,
                            'item_name' => 'transferOnHoldToInWork'
                        ],
                    ],
                    'auth.user_changing_history' => [
                        [
                            //'id' => 14,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnDashboards',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 15,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 16,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewOwnRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 17,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 18,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 19,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 20,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 21,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 22,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 23,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 24,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 25,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'contentManager',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 26,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["contentManager"]',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 27,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnDashboards',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 28,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 29,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewOwnRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 30,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 31,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 32,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 33,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 34,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 35,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 36,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 37,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 38,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'contentManager',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 39,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["contentManager"]',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 27,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'contentManager',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 28,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 29,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewOwnRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 30,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 31,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 32,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 33,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 34,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 35,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 36,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 37,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 38,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnDashboards',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d')
                        ],
                        [
                            //'id' => 39,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["contentManager"]',
                            'date >=' => date('Y-m-d')
                        ],
                    ],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"users","fields_data":{"id":6,"name":"Супервайзер Начальникович 1","login":"bpm_supervisor_1","email":"bpm_supervisor_1@rozetka.com.ua","team":1,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                    '{"action":"update","entity":"users","fields_data":{"id":8,"name":"Супервайзер Групповушкин 13","login":"bpm_supervisor_13","email":"bpm_supervisor_13@rozetka.com.ua","team":14,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-04-13 13:17:20","created_by":1,"change_date":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":9,"name":"Супервайзер Групповушкин 16","login":"bpm_supervisor_16","email":"bpm_supervisor_16@rozetka.com.ua","team":14,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-04-13 13:17:20","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"0","positions":"[\\"contentManager\\"]"},"changed_fields_names":["change_date","positions"]}'
                    ]
                ],
            ],
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Групповое добавление роли Маркета у нескольких пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'managers_2',
                'managers_17',
                'user_permissions_9',
                'user_permissions_6',
                'supervisors',
                'allowed_types_8',
            ],
            'requestBody' => [
                'users' => [6, 8, 9],
                'itemId' => 'marketolog'
            ],
            'responseBody' => [
                'status' => 200,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.users' => [
                        [
                            'id' => 1,
                            'name' => 'Система',
                            'login' => 'systemBPM',
                            'email' => 'system@rozetka.com.ua',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'system',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 2,
                            'name' => 'Администратор',
                            'login' => 'adminBPM',
                            'email' => 'admin@admin.com',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'admin',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 3,
                            'name' => 'Гость',
                            'login' => 'guestBPM',
                            'email' => 'guest@guest.com',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'guest',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 0,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => '0'
                        ],
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
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => "'000000004"
                        ],
                        [
                            'id' => 5,
                            'name' => 'Супервайзер Руководько 1',
                            'login' => 'bpm_headSupervisor_1',
                            'email' => 'bpm_headSupervisor_1@rozetka.com.ua',
                            'team' => 17,
                            'parent_id' => 4,
                            'position' => 'headSupervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date' => '2020-05-19 16:36:22',
                            'drfo' => "'000000005",
                            'positions' => '["headSupervisor"]',
                        ],
                        [
                            'id' => 6,
                            'name' => 'Супервайзер Начальникович 1',
                            'login' => 'bpm_supervisor_1',
                            'email' => 'bpm_supervisor_1@rozetka.com.ua',
                            'team' => 1,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-05-19 13:36:22',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => "'000000006",
                            'positions' => '["supervisor","marketolog"]',
                        ],
                        [
                            'id' => 7,
                            'name' => 'Splitter.Moderation',
                            'login' => 'splitter_moderation',
                            'email' => 'splitter_moderation@rozetka.com.ua',
                            'team' => null,
                            'parent_id' => 0,
                            'position' => 'system',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date' => '2020-04-13 13:17:20',
                            'drfo' => '0'
                        ],
                        [
                            'id' => 8,
                            'name' => 'Супервайзер Групповушкин 13',
                            'login' => 'bpm_supervisor_13',
                            'email' => 'bpm_supervisor_13@rozetka.com.ua',
                            'team' => 14,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => '0',
                            'positions' => '["supervisor","marketolog"]',
                        ],
                        [
                            'id' => 9,
                            'name' => 'Супервайзер Групповушкин 16',
                            'login' => 'bpm_supervisor_16',
                            'email' => 'bpm_supervisor_16@rozetka.com.ua',
                            'team' => 14,
                            'parent_id' => 5,
                            'position' => 'supervisor',
                            'status' => 1,
                            'create_ts' => '2020-04-13 13:17:20',
                            'created_by' => 1,
                            'change_date >=' => date('Y-m-d'),
                            'drfo' => '0',
                            'positions' => '["supervisor","marketolog"]',
                        ],
                    ],
                    'auth.auth_assignment' => array_merge_recursive(
                        (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                        [
                            [
                                'item_name' => 'commentRequestMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createFilterMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createRequestMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createSubRequestMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'marketolog',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'massEdit',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportLoadYourTeam',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportView',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddAttrOrValues',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddNewItems',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateAttrOrValues',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestViewDirectionRequests',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'seeTeamTemplates',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'supervisor',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'takeToWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToClosed',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToInWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToDeclined',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToRequireChange',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToWaitWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToCompleted',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToDeclined',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToOnHold',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToPartialComplete',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToWaitWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToClosed',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToInWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToDeclined',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToDeclined',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToInCheck',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToRequireChange',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToWaitWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToDeclined',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToInWork',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'updateRequestMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewAllRequestsMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewDashboardsByCommand',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewOwnRequestsMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewSplitterModerationRequests',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewTeamRequestsMrk',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewUser',
                                'user_id' => 6,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'commentRequestMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createFilterMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createRequestMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createSubRequestMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'marketolog',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'massEdit',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportLoadYourTeam',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportView',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddAttrOrValues',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddNewItems',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateAttrOrValues',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestViewDirectionRequests',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'seeTeamTemplates',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'supervisor',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'takeToWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToClosed',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToInWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToDeclined',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToRequireChange',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToWaitWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToCompleted',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToDeclined',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToOnHold',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToPartialComplete',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToWaitWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToClosed',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToInWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToDeclined',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToDeclined',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToInCheck',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToRequireChange',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToWaitWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToDeclined',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToInWork',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'updateRequestMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewAllRequestsMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewDashboardsByCommand',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewOwnRequestsMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewSplitterModerationRequests',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewTeamRequestsMrk',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewUser',
                                'user_id' => 8,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'commentRequestMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createFilterMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createRequestMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'createSubRequestMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'marketolog',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'massEdit',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportLoadYourTeam',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'reportView',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddAttrOrValues',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddFatPortalCat',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddNewItems',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSC',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateSizeGrid',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateTags',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestAddUpdateVideo',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCheckHidden',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreate',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestCreateRelated',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestGroupItems',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestStructureDesign',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestTransferItems',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateAttrOrValues',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateFatPortalCat',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUpdateItems',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestUploadPhoto',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'requestViewDirectionRequests',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'seeTeamTemplates',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'supervisor',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'takeToWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToClosed',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferCompletedToInWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToDeclined',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToRequireChange',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInCheckToWaitWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToCompleted',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToDeclined',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToOnHold',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToPartialComplete',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferInWorkToWaitWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferOnHoldToInWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToClosed',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferPartialCompleteToInWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToDeclined',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToInCheck',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferRequireChangeToWaitCheck',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToDeclined',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToInCheck',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToRequireChange',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitCheckToWaitWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToDeclined',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'transferWaitWorkToInWork',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'updateRequestMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewAllRequestsMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewDashboardsByCommand',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewOwnRequestsMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewSplitterModerationRequests',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewTeamRequestsMrk',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                            [
                                'item_name' => 'viewUser',
                                'user_id' => 9,
                                'created_at >=' => date('Y-m-d'),
                            ],
                        ]
                    ),
                    'auth.user_changing_history' => [
                        [
                            'id' => 1,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'supervisor',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 2,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'massEdit',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 3,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadYourTeam',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        3 => [
                            'id' => 4,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 5,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 6,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 7,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddNewItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 8,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSC',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 9,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSizeGrid',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 10,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateTags',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 11,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateVideo',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 12,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCheckHidden',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 13,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreate',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 14,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 15,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestGroupItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 16,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestStructureDesign',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 17,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestTransferItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 18,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 19,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 20,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 21,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUploadPhoto',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 22,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 23,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeTeamTemplates',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 24,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 25,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 26,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 27,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 28,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 29,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 30,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 31,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 32,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 33,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 34,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 35,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 36,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 37,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 38,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 39,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToWaitCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 40,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 41,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 42,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 43,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 44,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 45,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 46,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 47,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByCommand',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 48,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewSplitterModerationRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 49,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 50,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'marketolog',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 51,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 52,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewTeamRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 53,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewAllRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 54,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createFilterMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 55,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 56,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createSubRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 57,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 58,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'commentRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 59,
                            'changed_user_id' => 6,
                            'changed_user_login' => 'bpm_supervisor_1',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["supervisor","marketolog"]',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 60,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'supervisor',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 61,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'massEdit',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 62,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadYourTeam',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 63,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 64,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 65,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 66,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddNewItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 67,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSC',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 68,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSizeGrid',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 69,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateTags',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 70,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateVideo',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 71,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCheckHidden',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 72,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreate',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 73,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 74,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestGroupItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 75,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestStructureDesign',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 76,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestTransferItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 77,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 78,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 79,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 80,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUploadPhoto',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 81,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 82,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeTeamTemplates',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 83,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 84,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 85,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 86,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 87,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 88,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 89,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 90,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 91,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 92,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 93,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 94,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 95,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 96,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 97,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 98,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToWaitCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 99,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 100,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 101,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 102,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 103,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 104,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 105,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 106,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByCommand',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 107,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewSplitterModerationRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 108,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 109,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'marketolog',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 110,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 111,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewTeamRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 112,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewAllRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 113,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createFilterMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 114,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 115,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createSubRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 116,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 117,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'commentRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 118,
                            'changed_user_id' => 8,
                            'changed_user_login' => 'bpm_supervisor_13',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["supervisor","marketolog"]',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 119,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'supervisor',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 120,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'massEdit',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 121,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportLoadYourTeam',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 122,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'reportView',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 123,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 124,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 125,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddNewItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 126,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSC',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 127,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateSizeGrid',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 128,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateTags',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 129,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestAddUpdateVideo',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 130,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCheckHidden',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 131,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreate',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 132,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestCreateRelated',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 133,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestGroupItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 134,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestStructureDesign',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 135,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestTransferItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 136,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateAttrOrValues',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 137,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateFatPortalCat',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 138,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUpdateItems',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 139,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestUploadPhoto',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 140,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'requestViewDirectionRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 141,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'seeTeamTemplates',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 142,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'takeToWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 143,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 144,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferCompletedToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 145,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 146,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 147,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 148,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToCompleted',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 149,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 150,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToOnHold',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 151,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToPartialComplete',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 152,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferInWorkToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 153,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferOnHoldToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 154,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToClosed',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 155,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferPartialCompleteToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 156,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 157,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToWaitCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 158,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferRequireChangeToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 159,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 160,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToInCheck',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 161,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToRequireChange',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 162,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitCheckToWaitWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 163,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToDeclined',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 164,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'transferWaitWorkToInWork',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 165,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewDashboardsByCommand',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 166,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewSplitterModerationRequests',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 167,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewUser',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 168,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'marketolog',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 169,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewOwnRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 170,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewTeamRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 171,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'viewAllRequestsMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 172,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createFilterMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 173,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 174,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'createSubRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 175,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'updateRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 176,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'commentRequestMrk',
                            'old_value' => '0',
                            'new_value' => '1',
                            'date >=' => date('Y-m-d'),
                        ],
                        [
                            'id' => 177,
                            'changed_user_id' => 9,
                            'changed_user_login' => 'bpm_supervisor_16',
                            'changer_id' => 4,
                            'changer_login' => 'kutsan.k',
                            'changed_field' => 'positions',
                            'old_value' => '["supervisor"]',
                            'new_value' => '["supervisor","marketolog"]',
                            'date >=' => date('Y-m-d'),
                        ],
                    ],
                ],
            ],
            'RabbitMQ' => [
                'lisa_common' => [
                    '{"action":"update","entity":"users","fields_data":{"id":6,"name":"Супервайзер Начальникович 1","login":"bpm_supervisor_1","email":"bpm_supervisor_1@rozetka.com.ua","team":1,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-05-19 13:36:22","created_by":1,"change_date":"' . date('Y-m-d'),
                    '{"action":"update","entity":"users","fields_data":{"id":8,"name":"Супервайзер Групповушкин 13","login":"bpm_supervisor_13","email":"bpm_supervisor_13@rozetka.com.ua","team":14,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-04-13 13:17:20","created_by":1,"change_date":"' . date('Y-m-d'),
                ],
            ],
            'RabbitMQWithRoutingKey' => [
                'lisa_common' => [
                    'update.users.all' => [
                        '{"action":"update","entity":"users","fields_data":{"id":9,"name":"Супервайзер Групповушкин 16","login":"bpm_supervisor_16","email":"bpm_supervisor_16@rozetka.com.ua","team":14,"parent_id":5,"position":"supervisor","status":1,"create_ts":"2020-04-13 13:17:20","created_by":1,"change_date":"' . date('Y-m-d'),
                        '","drfo":"0","positions":"[\\"supervisor\\",\\"marketolog\\"]"},"changed_fields_names":["change_date","positions"]}'
                    ]
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Невозможность группового изменения роли без указания пользователей',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'users' => [],
                'itemId' => 'contentManager'
            ],
            'responseBody' => [
                'error' => 'Не все поля заполнены.',
                'status' => 500,
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.auth_item' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.user_changing_history'],
                ],
            ],
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Невозможность группового изменения роли при проставлении роли проекта 1/2 в команде проекта 0',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'excludedRedisKeys' => [
                'managers_2',
                'managers_17',
            ],
            'requestBody' => [
                'users' => [5, 6, 8],
                'itemId' => 'contentManager'
            ],
            'responseBody' => [
                'status' => 500,
                'error' => 'Array
(
    [positions] => Array
        (
            [0] => Необходимо заполнить либо роль, относящуюся к проекту команды, либо роль Все
        )

)
',
            ],
            'db' => [
                'lisa_fixtures' => [
                    'auth.auth_item' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_item'],
                    'auth.auth_assignment' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.auth_assignment'],
                    'auth.user_changing_history' => (include __DIR__ . '/fixture/case1.php')['lisa_fixtures']['auth.user_changing_history'],
                ],
            ],
        ]
    ],

];
