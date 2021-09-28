<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => [
            [
                //'id' => 1,
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
                'drfo' => '0',
                'positions' => '["system"]',
            ],
            [
                //'id' => 2,
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
                'drfo' => '0',
                'positions' => '["admin"]',
            ],
            [
                //'id' => 3,
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
                'drfo' => '0',
                'positions' => '["guest"]',
            ],
            [
                //'id' => 4,
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
                'drfo' => "'000000004",
                'positions' => '["admin"]',
            ],
            [
                //'id' => 5,
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
                //'id' => 6,
                'name' => 'Супервайзер Начальникович 1',
                'login' => 'bpm_supervisor_1',
                'email' => 'bpm_supervisor_1@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000006",
                'positions' => '["supervisor"]',
            ],
            [
                //'id' => 7,
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
                'drfo' => '0',
                'positions' => '["system"]',
            ],
            [
                //'id' => 8,
                'name' => 'Супервайзер Групповушкин 13',
                'login' => 'bpm_supervisor_13',
                'email' => 'bpm_supervisor_13@rozetka.com.ua',
                'team' => 14,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:17:20',
                'created_by' => 1,
                'change_date' => '2020-04-13 13:17:20',
                'drfo' => '0',
                'positions' => '["supervisor"]',
            ],
            [
                //'id' => 9,
                'name' => 'Супервайзер Групповушкин 16',
                'login' => 'bpm_supervisor_16',
                'email' => 'bpm_supervisor_16@rozetka.com.ua',
                'team' => 14,
                'parent_id' => 5,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-04-13 13:17:20',
                'created_by' => 1,
                'change_date' => '2020-04-13 13:17:20',
                'drfo' => '0',
                'positions' => '["supervisor"]',
            ],
        ],
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
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
            ]
        ],
        'auth.user_changing_history' => [],
    ],
];