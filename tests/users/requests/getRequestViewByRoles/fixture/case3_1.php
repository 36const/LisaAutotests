<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 1,
                'type_id' => 3,
                'supervisor_id' => 4,
                'manager_id' => null,
                'status' => 2,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:01',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Перенос товаров (Работа с товарами Розетки)',
                'description' => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                'category_id' => 1,
                'seller_id' => 83,
                'recommendations' => null,
                'reason' => null,
                'parent_id' => null,
                'planned_start_date' => null,
                'planned_finish_date' => null,
                'actual_start_date' => null,
                'actual_finish_date' => null,
                'supervisor_process_date' => null,
                'supervisor_check_date' => null,
                'result_comment' => null,
                'supervisor_comment' => null,
                'last_change_status_date' => '2020-01-01 00:00:01',
                'team_direction' => 3,
                'report_period_id' => null,
                'sync_source_id' => null,
                'sv_report_periods' => null,
                'cross_check_status' => 0,
                'cross_check_manager_id' => 0,
                'employee_code_1c' => null,
                'photo_load_status' => 0,
                'previous_status' => 5,
                'supplier_cabinet_id' => NULL,
                'child_count' => 0,
                'payload' => '[]',
                'rz_category_id' => null,
                'author_team' => null,
                'supervisor_team' => null,
                'manager_team' => null,
            ]
        ],
        'requests_fields' => [
            [
                'request_id' => 1,
                'field_id' => 1,
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
                'field_id' => 52,
                'value' => 2,
            ],
            [
                'request_id' => 1,
                'field_id' => 53,
                'value' => 0.5,
            ],
            [
                'request_id' => 1,
                'field_id' => 54,
                'value' => 1,
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
                'field_id' => 101,
                'value' => 0,
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
                'field_id' => 146,
                'value' => 0,
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 0,
            ],
        ],
        'request_attachments' => [
            [
                'id' => 1,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2021-10-09 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_194psdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdpsdp.psd',
                'size' => 60424,
            ],
            [
                'id' => 2,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'doc .doc',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2021-10-09 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_doc.doc',
                'size' => 34304,
            ],
            [
                'id' => 3,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => 'pptx_абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїі.pptx',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2021-10-09 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_pptx_abvgdeezzijklmnoprstufhccssyeuaegii.pptx',
                'size' => 97152,
            ],
            [
                'id' => 4,
                'request_id' => 1,
                'file_name_old' => '',
                'alias' => '!@#$%^&*()_+`-=][\';.|}{:?><.jpg',
                'status' => 3,
                'uploaded_by' => 'Константин Куцан',
                'uploaded_at' => '2021-10-09 00:00:00',
                'deleted_by' => NULL,
                'deleted_at' => NULL,
                'file_name' => '803902_~!@#$%^&*()_+`-=][;.|}{:?><.jpg',
                'size' => 34304,
            ],
        ],        
        'request_status_history' => [],
        'request_errors' => [],
        'requests_reasons' => [],
        'observers' => [],
        'auth.users' => [
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[0],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[1],
            (include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php')[2],
            [
//        "id" => 4,
                'name' => 'Константин Куцан',
                'login' => 'kutsan.k',
                'email' => 'kutsan.k@rozetka.com.ua',
                'team' => 1,
                'parent_id' => 1,
                'position' => 'supervisor',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000004",
                'positions' => '["supervisor"]',
            ],
        ],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => [
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewUser'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddNewItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestTransferItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestGroupItems'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUploadPhoto'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCheckHidden'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateFatPortalCat'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddAttrOrValues'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestUpdateAttrOrValues'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestStructureDesign'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSC'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateVideo'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateSizeGrid'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestAddUpdateTags'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreate'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestCreateRelated'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewDirectionRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportView'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'massEdit'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitCheckToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInCheckToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToRequireChange'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToDeclined'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferDeclinedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToWaitWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferWaitWorkToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToInWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferInWorkToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToOnHold'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferOnHoldToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToPartialComplete'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferPartialCompleteToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToCompleted'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferCompletedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferAnyToClosed'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferClosedToAny'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'reportLoadYourTeam'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewSplitterModerationRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'takeToWork'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'viewDashboardsByCommand'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'seeHiddenCrossCheckFields'
            ],
        ]
    ],
];