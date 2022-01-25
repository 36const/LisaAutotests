<?php

use Codeception\Module\TestHelper;

return [
    'splitter_fixtures' => [
        'auth_assignment' => [
            [
                'item_name' => 'userViewerBPM',
                'user_id' => '1',
                'created_at' => 1634895953,
            ],
        ],
        'auth_item_child' => [
            [
                'parent' => 'userViewerBPM',
                'child' => 'bpmUserAccess',
            ],
            [
                'parent' => 'userViewerBPM',
                'child' => 'bpmUserViewAccess',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessLogisticsReference',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessReasonsDeactivate',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessSyncSourceGroups',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessTasksManagement',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToElasticChangeStatuses',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToGomerViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToGoodsVideo',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToGrouping',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToGroupingContent',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToGroupingImport',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRichContentAllCache',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRichContentCache',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRichContentMD',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRichContentSystemLog',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRichContentUA',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaSeller',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaTemplates',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaTemplatesComments',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaTemplatesCommentsCross',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaTemplatesFieldsCross',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToRozetkaTemplatesValidate',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessToSmartFolders',
            ],
            [
                'parent' => 'administrator',
                'child' => 'accessUsePromoPriceRules',
            ],
            [
                'parent' => 'administrator',
                'child' => 'addingSource',
            ],
            [
                'parent' => 'administrator',
                'child' => 'addVirtualSource',
            ],
            [
                'parent' => 'administrator',
                'child' => 'allowCopy',
            ],
            [
                'parent' => 'administrator',
                'child' => 'allowMarkdown',
            ],
            [
                'parent' => 'administrator',
                'child' => 'attributesBinding',
            ],
            [
                'parent' => 'administrator',
                'child' => 'attributesFindHints',
            ],
            [
                'parent' => 'administrator',
                'child' => 'autoModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'backToModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'bpmAdminAccess',
            ],
            [
                'parent' => 'administrator',
                'child' => 'bpmUserAccess',
            ],
            [
                'parent' => 'administrator',
                'child' => 'bpmUserViewAccess',
            ],
            [
                'parent' => 'administrator',
                'child' => 'catalogBunchFields',
            ],
            [
                'parent' => 'administrator',
                'child' => 'catalogManagementSettings',
            ],
            [
                'parent' => 'administrator',
                'child' => 'catalogUpdating',
            ],
            [
                'parent' => 'administrator',
                'child' => 'catalogViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'categoriesBindingAndHints',
            ],
            [
                'parent' => 'administrator',
                'child' => 'changeCategoryButtonRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'configEdit',
            ],
            [
                'parent' => 'administrator',
                'child' => 'contentManagersReportAccess',
            ],
            [
                'parent' => 'administrator',
                'child' => 'copyButtonAttachmentsRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'copyButtonRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'copyImportItemsFromRZ',
            ],
            [
                'parent' => 'administrator',
                'child' => 'createGroupButtonRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'createUsersComplaints',
            ],
            [
                'parent' => 'administrator',
                'child' => 'deleteDictionaries',
            ],
            [
                'parent' => 'administrator',
                'child' => 'deleteRule',
            ],
            [
                'parent' => 'administrator',
                'child' => 'downloadReport',
            ],
            [
                'parent' => 'administrator',
                'child' => 'editHoldRule',
            ],
            [
                'parent' => 'administrator',
                'child' => 'EditImportSystemConfig',
            ],
            [
                'parent' => 'administrator',
                'child' => 'editSource',
            ],
            [
                'parent' => 'administrator',
                'child' => 'EditSystemConfig',
            ],
            [
                'parent' => 'administrator',
                'child' => 'filesourceAllowUploadPhoto',
            ],
            [
                'parent' => 'administrator',
                'child' => 'fromActiveToNotPassedModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'fullSync',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessFixersPage',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessItemFfSet',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessItemsTranslate',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessRabbitMQ',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessSupervisor',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerAccessSystemSetting',
            ],
            [
                'parent' => 'administrator',
                'child' => 'gomerManageRabbitMQ',
            ],
            [
                'parent' => 'administrator',
                'child' => 'goodsGroupEditButtonRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'goodsRefsPermSupervisor',
            ],
            [
                'parent' => 'administrator',
                'child' => 'goodsSizechartsPermSupervisor',
            ],
            [
                'parent' => 'administrator',
                'child' => 'handSync',
            ],
            [
                'parent' => 'administrator',
                'child' => 'healthCheckerRun',
            ],
            [
                'parent' => 'administrator',
                'child' => 'healthCheckerView',
            ],
            [
                'parent' => 'administrator',
                'child' => 'hiddenBackToModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'hideGoodsAndNotPassModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'historyChangingStatusView',
            ],
            [
                'parent' => 'administrator',
                'child' => 'logsViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageAllModules',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageCronScheduler',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageLinkedModule',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageModuleDispatcher',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageModuleRbac',
            ],
            [
                'parent' => 'administrator',
                'child' => 'manageVirtualSources',
            ],
            [
                'parent' => 'administrator',
                'child' => 'merchantViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'newToPrepared',
            ],
            [
                'parent' => 'administrator',
                'child' => 'notInPriceManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'notPassModerationBackToModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'owoxAPI',
            ],
            [
                'parent' => 'administrator',
                'child' => 'preparedToModeration',
            ],
            [
                'parent' => 'administrator',
                'child' => 'priceValidatorManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'recoverRule',
            ],
            [
                'parent' => 'administrator',
                'child' => 'resendPhoto',
            ],
            [
                'parent' => 'administrator',
                'child' => 'rolesEdit',
            ],
            [
                'parent' => 'administrator',
                'child' => 'rolesView',
            ],
            [
                'parent' => 'administrator',
                'child' => 'seriesBinding',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopBrandsManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopBrandsViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopCategoriesManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopCategoriesViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopWordsManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'stopWordsViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'systemMaintenanceMode',
            ],
            [
                'parent' => 'administrator',
                'child' => 'systemViewRunningProcesses',
            ],
            [
                'parent' => 'administrator',
                'child' => 'tasksManagement',
            ],
            [
                'parent' => 'administrator',
                'child' => 'toActivateGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'toDiscardGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateAliasRozetkaGoods',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateBpm',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateCategoryFf',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateCategoryGrouping',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateCategoryInOwox',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateCountryCode',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updatedAttributesAndValues',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateGoodsManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateGoodsMdFields',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateGoodsViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updateGroupName',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updatePriceManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updatePriceViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'updatePrioritySource',
            ],
            [
                'parent' => 'administrator',
                'child' => 'uploadPhotoManaging',
            ],
            [
                'parent' => 'administrator',
                'child' => 'uploadPhotoViewing',
            ],
            [
                'parent' => 'administrator',
                'child' => 'userEdit',
            ],
            [
                'parent' => 'administrator',
                'child' => 'userEditName',
            ],
            [
                'parent' => 'administrator',
                'child' => 'userView',
            ],
            [
                'parent' => 'administrator',
                'child' => 'vendorsBinding',
            ],
            [
                'parent' => 'administrator',
                'child' => 'viewSitemap',
            ],
            [
                'parent' => 'administrator',
                'child' => 'viewSourceHistory',
            ],
            [
                'parent' => 'administrator',
                'child' => 'xmlGeneratorAccess',
            ],
        ],
    ]
];