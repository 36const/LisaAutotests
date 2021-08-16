<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
        'auth.user_changing_history' => [],
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[3],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[4],
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
            ]
        ]
    ],
    'gomer_fixtures' => [
        'users' => (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
    ]
];