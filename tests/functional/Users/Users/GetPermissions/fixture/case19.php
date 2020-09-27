<?php

return [
    "lisa_fixtures" => [
        'requests' => [
            [
                "id" => 1,
                "author_id" => 4,
                "type_id" => 1,
                "supervisor_id" => 6,
                "manager_id" => 11,
                "status" => 6,
                "direction" => 1,
                "priority" => 2,
                "awaiting_correction" => 1,
                "created_at" => '2020-01-01 00:00:00',
                "correction_comment" => '',
                "amount_to_work" => 10,
                "subject" => "Добавление новых товаров (Работа с товарами Розетки)",
                "description" => 'description',
                "attachments" => '[]',
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => '',
                "reason_id" => 15,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => '2020-01-01 00:00:03',
                "actual_finish_date" => '2020-01-01 00:00:04',
                "supervisor_process_date" => '2020-01-01 00:00:02',
                //"supervisor_check_date" => null,
                "difficulty" => null,
                "result_comment" => 'Комментарий к результату задачи',
                "supervisor_comment" => '',
                //"last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => '{"1": 1}',
                "cross_check_status" => '1',
                "cross_check_manager_id" => 12,
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
                'field_id' => 21,
                'value' => 1,
            ],
            [
                'request_id' => 1,
                'field_id' => 22,
                'value' => 6,
            ],
            [
                'request_id' => 1,
                'field_id' => 23,
                'value' => 11,
            ],
            [
                'request_id' => 1,
                'field_id' => 24,
                'value' => 15,
            ],
            [
                'request_id' => 1,
                'field_id' => 25,
                'value' => 18,
            ],
            [
                'request_id' => 1,
                'field_id' => 26,
                'value' => 22,
            ],
            [
                'request_id' => 1,
                'field_id' => 27,
                'value' => 24,
            ],
            [
                'request_id' => 1,
                'field_id' => 31,
                'value' => 48,
            ],
            [
                'request_id' => 1,
                'field_id' => 49,
                'value' => 10.1,
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
                'value' => 10.1,
            ],
            [
                'request_id' => 1,
                'field_id' => 66,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 68,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 69,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 70,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 71,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 76,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 77,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 88,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 93,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 94,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 101,
                'value' => null,
            ],
            [
                'request_id' => 1,
                'field_id' => 111,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 122,
                'value' => null,
            ],
            [
                'request_id' => 1,
                'field_id' => 142,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 143,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 144,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 146,
                'value' => 10,
            ],
            [
                'request_id' => 1,
                'field_id' => 157,
                'value' => 'http://gomer.local/bpm/request/to-correction?id=1',
            ],
            [
                'request_id' => 1,
                'field_id' => 158,
                'value' => 10,
            ],
        ],
        'request_errors' => [
            [
                'id' => 1,
                'request_id' => 1,
                'manager_id' => 11,
                'errors_count' => 10,
                'items_with_errors' => 10,
                'field_value_id' => 142,
                'comment' => 'comment',
                'status' => 0,
                //'create_ts' => null,
                'correction_date' => null
            ]
        ],
        "report_periods" => [[]],
        "categories" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/categories.php',
        "field_values" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/difficulty_coefs.php',
        "reasons" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/reasons.php',
        "teams" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/teams.php',
        "priorities" => include \rzk\FixtureController::getFixtureDir() . 'lisa_fixtures/priorities.php',
        "user_permissions" => [
            [
                //"id" => 1048,
                "user_id" => 4,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 1049,
                "user_id" => 4,
                "permission_name" => "reportLoadMarketUsers"
            ],
            [
                //"id" => 1050,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 1051,
//                "user_id" => 4,
//                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 1052,
                "user_id" => 4,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 1053,
                "user_id" => 4,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 1054,
                "user_id" => 4,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 1055,
                "user_id" => 4,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 1056,
                "user_id" => 4,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 1057,
                "user_id" => 4,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 1058,
                "user_id" => 4,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 1059,
                "user_id" => 4,
                "permission_name" => "requestViewOwnRequests"
            ],
            [
                //"id" => 1060,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 1061,
                "user_id" => 4,
                "permission_name" => "requestViewTeamRequests"
            ],
            [
                //"id" => 1062,
                "user_id" => 4,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 1333,
                "user_id" => 4,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 1334,
                "user_id" => 4,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 1335,
                "user_id" => 4,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 1336,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 1337,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 1338,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 1339,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 1340,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 1341,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 1342,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 1343,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 1344,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 1345,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 1346,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 1347,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 1348,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 1349,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 1350,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 1351,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 1352,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 1353,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 1354,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 1355,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 1356,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 1357,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 1358,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 1359,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 1360,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 1361,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 1362,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 1363,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 1364,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 1365,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 1366,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 1369,
                "user_id" => 4,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 1370,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 1371,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 2223,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 2328,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 2563,
                "user_id" => 4,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 3010,
                "user_id" => 4,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 3015,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByDirection"
            ],
            [
                //"id" => 3037,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ],
            [
                //"id" => 3044,
                "user_id" => 4,
                "permission_name" => "viewOwnDashboards"
            ],
        ]
    ],
];