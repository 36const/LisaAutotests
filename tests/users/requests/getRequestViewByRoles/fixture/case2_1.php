<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 4,
                'type_id' => 2,
                'supervisor_id' => 2,
                'manager_id' => null,
                'status' => 1,
                'direction' => 1,
                'priority' => 2,
                'awaiting_correction' => 0,
                'created_at' => '2020-01-01 00:00:01',
                'correction_comment' => null,
                'amount_to_work' => 10,
                'subject' => 'Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)',
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
                'team' => 18,
                'parent_id' => 1,
                'position' => 'productManager',
                'status' => 1,
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => "'000000004",
                'positions' => '["productManager"]',
            ],
        ],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => [
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
                'item_name' => 'transferOnHoldToInWork'
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
                'item_name' => 'requestViewOwnRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'requestViewTeamRequests'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToInCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'transferRequireChangeToWaitCheck'
            ],
            [
                'created_at' => null,
                'user_id' => 4,
                'item_name' => 'seeHiddenCrossCheckFields'
            ],
        ]
    ],
];