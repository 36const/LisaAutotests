<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
            [
                [],
                [],
                [],
                [
//                    "id" => 4,
                    'name' => 'Константин Куцан',
                    'login' => 'kutsan.k',
                    'email' => 'kutsan.k@rozetka.com.ua',
                    'team' => 17,
                    'parent_id' => 1,
                    'position' => 'supervisor',
                    'status' => 1,
                    'create_ts' => '2020-05-19 13:36:22',
                    'created_by' => 1,
                    'change_date' => '2020-05-19 16:36:22',
                    'drfo' => "'000000004"
                ],
            ],
        ),
        'auth.auth_assignment' => [
            [
                'item_name' => 'massEdit',
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
                'item_name' => 'requestViewDirectionRequests',
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
                'item_name' => 'transferAnyToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferAnyToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferClosedToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferCompletedToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferDeclinedToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInCheckToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToClosed',
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
                'item_name' => 'transferInWorkToInCheck',
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
                'item_name' => 'transferInWorkToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferInWorkToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferOnHoldToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferPartialCompleteToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferRequireChangeToWaitWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToCompleted',
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
                'item_name' => 'transferWaitCheckToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitCheckToPartialComplete',
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
                'item_name' => 'transferWaitWorkToAny',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToClosed',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToCompleted',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToDeclined',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToInCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToInWork',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToOnHold',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToPartialComplete',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToRequireChange',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'transferWaitWorkToWaitCheck',
                'user_id' => 4,
                'created_at' => null
            ],
            [
                'item_name' => 'viewDashboardsByCommand',
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
            ]
        ],
        'requests' => [
            [
//                "id" => 1,
                'author_id' => 4,
                'type_id' => 3,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 2,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Маркетплейса)',
                'description' => 'Описание',
                'category_id' => null,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 2,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                "id" => 2,
                'author_id' => 4,
                'type_id' => 5,
                'supervisor_id' => 6,
                'manager_id' => null,
                'status' => 3,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Заливка фото с фотостудии (Работа с товарами Розетки)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 5,
                'recommendations' => null,
                'reason' => 'Затребовать изменения',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 1,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                "id" => 3,
                'author_id' => 4,
                'type_id' => 7,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 5,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление нового портала/раздела фат-меню/категории товаров (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 2,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                "id" => 4,
                'author_id' => 4,
                'type_id' => 15,
                'supervisor_id' => 35,
                'manager_id' => 11,
                'status' => 6,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение тегов (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
            ],
            [
//                "id" => 5,
                'author_id' => 4,
                'type_id' => 10,
                'supervisor_id' => 37,
                'manager_id' => 11,
                'status' => 7,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Изменение существующих параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => 'Ожидать',
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                "id" => 6,
                'author_id' => 4,
                'type_id' => 13,
                'supervisor_id' => 38,
                'manager_id' => 11,
                'status' => 8,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение видео (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => '2020-01-01 00:00:04',
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => 'Комментарий к результату задачи',
                'supervisor_comment' => 'Комментарий',
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 6,
                'report_period_id' => 1,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                "id" => 7,
                'author_id' => 4,
                'type_id' => 9,
                'supervisor_id' => 34,
                'manager_id' => 11,
                'status' => 11,
                'direction' => 0,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:00',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление параметров/значений (Определяется типом задачи)',
                'description' => 'Описание',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => '2020-01-01 00:00:03',
                'actual_finish_date' => null,
                'supervisor_process_date' => '2020-01-01 00:00:02',
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 5,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => null,
                'employee_code_1c' => null,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 5,
                'supplier_cabinet_id' => null,
                'payload' => '[]',
            ],
            [
//                'id' => 8,
                'author_id' => 4,
                'type_id' => 1,
                'supervisor_id' => 10,
                'manager_id' => 4,
                'status' => 4,
                'direction' => 1,
                'priority' => NULL,
                'awaiting_correction' => 0,
                'created_at' => '2021-08-01 21:27:03',
                'correction_comment' => NULL,
                'amount_to_work' => 10,
                'subject' => 'Добавление новых товаров (Работа с товарами Розетки)',
                'description' => 'description',
                'category_id' => 2,
                'seller_id' => -2,
                'recommendations' => NULL,
                'reason' => NULL,
                'parent_id' => NULL,
                'planned_start_date' => NULL,
                'planned_finish_date' => NULL,
                'actual_start_date' => '2021-08-01 21:28:26',
                'actual_finish_date' => '2021-08-01 21:29:32',
                'supervisor_process_date' => '2021-08-01 21:29:32',
                'supervisor_check_date' => '2021-08-01 21:30:19',
                'result_comment' => 'http://gomer.local/lisa/#/request/list/in-work',
                'supervisor_comment' => NULL,
                'last_change_status_date' => '2021-08-01 21:30:19',
                'team_direction' => 3,
                'report_period_id' => NULL,
                'sync_source_id' => NULL,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => NULL,
                'employee_code_1c' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 9,
                'supplier_cabinet_id' => NULL,
                'payload' => '[]',
            ],
            [
//                'id' => 9,
                'author_id' => 4,
                'type_id' => 2,
                'supervisor_id' => 5,
                'manager_id' => 4,
                'status' => 11,
                'direction' => 2,
                'priority' => 2,
                'awaiting_correction' => 1,
                'created_at' => '2021-08-01 21:27:59',
                'correction_comment' => NULL,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Маркетплейса)',
                'description' => 'description',
                'category_id' => NULL,
                'seller_id' => 0,
                'recommendations' => NULL,
                'reason' => 'Отменить',
                'parent_id' => NULL,
                'planned_start_date' => NULL,
                'planned_finish_date' => NULL,
                'actual_start_date' => '2021-08-01 21:28:26',
                'actual_finish_date' => '2021-08-01 21:28:54',
                'supervisor_process_date' => '2021-08-01 21:28:54',
                'supervisor_check_date' => '2021-08-01 21:30:51',
                'result_comment' => 'http://gomer.local/lisa/#/request/list/in-work',
                'supervisor_comment' => NULL,
                'last_change_status_date' => '2021-08-01 21:31:06',
                'team_direction' => 2,
                'report_period_id' => NULL,
                'sync_source_id' => NULL,
                'sv_report_periods' => '{"1": 1}',
                'cross_check_status' => 0,
                'cross_check_manager_id' => NULL,
                'employee_code_1c' => NULL,
                'child_count' => 0,
                'photo_load_status' => 0,
                'previous_status' => 6,
                'supplier_cabinet_id' => NULL,
                'payload' => '[]',
            ],
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 3,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 8,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 15,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 19,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 67,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 72,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 73,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 74,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 75,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 93,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 94,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 114,
                'value' => 3,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 3,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 52,
                'value' => 2,
            ],
            [
                'request_id' => 2,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 2,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 2,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 67,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 68,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 69,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 70,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 71,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 76,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 77,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 88,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 93,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 94,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 111,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 2,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 3,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 6,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 7,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 29,
                'value' => 36,
            ],
            [
                'request_id' => 3,
                'field_id' => 30,
                'value' => 47,
            ],
            [
                'request_id' => 3,
                'field_id' => 53,
                'value' => 3,
            ],
            [
                'request_id' => 3,
                'field_id' => 54,
                'value' => 1,
            ],
            [
                'request_id' => 3,
                'field_id' => 55,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 81,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 85,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 90,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 107,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 109,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 112,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 115,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 152,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 154,
                'value' => 0,
            ],
            [
                'request_id' => 3,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 1,
                'value' => 1,
            ],
            [
                'request_id' => 7,
                'field_id' => 20,
                'value' => 65,
            ],
            [
                'request_id' => 7,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 7,
                'field_id' => 30,
                'value' => 39,
            ],
            [
                'request_id' => 7,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 7,
                'field_id' => 54,
                'value' => 1.5,
            ],
            [
                'request_id' => 7,
                'field_id' => 59,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 91,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 7,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 5,
                'field_id' => 20,
                'value' => 65,
            ],
            [
                'request_id' => 5,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 5,
                'field_id' => 30,
                'value' => 30,
            ],
            [
                'request_id' => 5,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 5,
                'field_id' => 54,
                'value' => 1.5,
            ],
            [
                'request_id' => 5,
                'field_id' => 59,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 79,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 80,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 84,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 5,
                'field_id' => 91,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 97,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 98,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 99,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 104,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 105,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 106,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 113,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 149,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 150,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 151,
                'value' => 0,
            ],
            [
                'request_id' => 5,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 6,
                'field_id' => 20,
                'value' => 66,
            ],
            [
                'request_id' => 6,
                'field_id' => 27,
                'value' => 24,
            ],
            [
                'request_id' => 6,
                'field_id' => 29,
                'value' => 30,
            ],
            [
                'request_id' => 6,
                'field_id' => 30,
                'value' => 39,
            ],
            [
                'request_id' => 6,
                'field_id' => 47,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 48,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 6,
                'field_id' => 54,
                'value' => 2,
            ],
            [
                'request_id' => 6,
                'field_id' => 56,
                'value' => 80,
            ],
            [
                'request_id' => 6,
                'field_id' => 62,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 63,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 86,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 87,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 88,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 6,
                'field_id' => 100,
                'value' => 10,
            ],
            [
                'request_id' => 6,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 102,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 147,
                'value' => 0,
            ],
            [
                'request_id' => 6,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 4,
                'field_id' => 20,
                'value' => 66,
            ],
            [
                'request_id' => 4,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 4,
                'field_id' => 54,
                'value' => 2,
            ],
            [
                'request_id' => 4,
                'field_id' => 58,
                'value' => 120,
            ],
            [
                'request_id' => 4,
                'field_id' => 65,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 83,
                'value' => 10,
            ],
            [
                'request_id' => 4,
                'field_id' => 89,
                'value' => 3,
            ],
            [
                'request_id' => 4,
                'field_id' => 92,
                'value' => 10,
            ],
            [
                'request_id' => 4,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 110,
                'value' => 10,
            ],
            [
                'request_id' => 4,
                'field_id' => 117,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 144,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 155,
                'value' => 0,
            ],
            [
                'request_id' => 4,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 2,
                'value' => 1,
            ],
            [
                'request_id' => 8,
                'field_id' => 20,
                'value' => 65,
            ],
            [
                'request_id' => 8,
                'field_id' => 21,
                'value' => 4,
            ],
            [
                'request_id' => 8,
                'field_id' => 22,
                'value' => 7,
            ],
            [
                'request_id' => 8,
                'field_id' => 23,
                'value' => 11,
            ],
            [
                'request_id' => 8,
                'field_id' => 26,
                'value' => 22,
            ],
            [
                'request_id' => 8,
                'field_id' => 49,
                'value' => 90.1,
            ],
            [
                'request_id' => 8,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 52,
                'value' => 3,
            ],
            [
                'request_id' => 8,
                'field_id' => 53,
                'value' => 2,
            ],
            [
                'request_id' => 8,
                'field_id' => 54,
                'value' => 1.5,
            ],
            [
                'request_id' => 8,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 64,
                'value' => 90.1,
            ],
            [
                'request_id' => 8,
                'field_id' => 66,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 68,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 69,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 71,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 76,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 77,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 88,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 89,
                'value' => 4,
            ],
            [
                'request_id' => 8,
                'field_id' => 93,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 94,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 101,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 111,
                'value' => 10,
            ],
            [
                'request_id' => 8,
                'field_id' => 122,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 8,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 49,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 50,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 51,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 53,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 60,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 64,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 65,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 67,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 72,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 73,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 74,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 75,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 89,
                'value' => 2,
            ],
            [
                'request_id' => 9,
                'field_id' => 93,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 94,
                'value' => 5,
            ],
            [
                'request_id' => 9,
                'field_id' => 101,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 114,
                'value' => 3,
            ],
            [
                'request_id' => 9,
                'field_id' => 121,
                'value' => 'http://gomer.local/lisa/#/request/to-correction/9',
            ],
            [
                'request_id' => 9,
                'field_id' => 122,
                'value' => 10,
            ],
            [
                'request_id' => 9,
                'field_id' => 142,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 143,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 158,
                'value' => 0,
            ],
            [
                'request_id' => 9,
                'field_id' => 160,
                'value' => 1,
            ],
        ],
        'report_periods' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/report_periods.php',
        'exceptions' => [],
    ],
];