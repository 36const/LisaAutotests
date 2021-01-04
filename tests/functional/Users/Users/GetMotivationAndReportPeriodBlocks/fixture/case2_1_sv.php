<?php
return [
    "lisa_fixtures" => [
        'requests' => [
            [
                "id" => 1,
                "author_id" => 1,
                "type_id" => 2,
                "supervisor_id" => 4,
                "manager_id" => null,
                "status" => 1,
                "direction" => 1,
                "priority" => 2,
                "awaiting_correction" => 0,
                "created_at" => '2020-01-01 00:00:01',
                "correction_comment" => null,
                "amount_to_work" => 10,
                "subject" => "Добавление/изменение информации в существующих товарах (Работа с товарами Розетки)",
                "description" => '!@#$%^&*()_+`-]\'/[;.,}"?{:>\|',
                "category_id" => 1,
                "seller_id" => 83,
                "recommendations" => null,
                //"reason_id" => null,
                "reason" => null,
                "parent_id" => null,
                "planned_start_date" => null,
                "planned_finish_date" => null,
                "actual_start_date" => null,
                "actual_finish_date" => null,
                "supervisor_process_date" => null,
                "supervisor_check_date" => null,
                "result_comment" => null,
                "supervisor_comment" => null,
                "last_change_status_date" => "2020-01-01 00:00:01",
                "team_direction" => 3,
                "report_period_id" => null,
                "sync_source_id" => null,
                "sv_report_periods" => null,
                "cross_check_status" => '0',
                "cross_check_manager_id" => null,
                "employee_code_1c" => null,
                "child_count" => 0
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
        "observers" => [],
        "categories" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        "field_values" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/field_values.php',
        "difficulty_coefs" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/difficulty_coefs.php',
        "teams" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/teams.php',
        "roles" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/roles.php',
        "user_bpm" => [
            [
//        "id" => 1,
                "name" => "Система",
                "login" => "systemBPM",
                "email" => "system@rozetka.com.ua",
                "team" => null,
                "parent_id" => 0,
                "position" => "system",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 2,
                "name" => "Администратор",
                "login" => "adminBPM",
                "email" => "admin@admin.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "admin",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 3,
                "name" => "Гость",
                "login" => "guestBPM",
                "email" => "guest@guest.com",
                "team" => null,
                "parent_id" => 0,
                "position" => "guest",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 0,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "0"
            ],
            [
//        "id" => 4,
                "name" => "Константин Куцан",
                "login" => "kutsan.k",
                "email" => "kutsan.k@rozetka.com.ua",
                "team" => 17,
                "parent_id" => 1,
                "position" => "supervisor",
                "status" => 1,
                "create_ts" => "2020-05-19 13:36:22",
                "created_by" => 1,
                "change_date" => "2020-05-19 16:36:22",
                "drfo" => "'000000004"
            ],
        ],
        "user_permissions" => [
            [
                //"id" => 219,
                "user_id" => 4,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 220,
                "user_id" => 4,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 221,
                "user_id" => 4,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 222,
                "user_id" => 4,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 223,
                "user_id" => 4,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 224,
                "user_id" => 4,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 225,
                "user_id" => 4,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 226,
                "user_id" => 4,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 227,
                "user_id" => 4,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 228,
                "user_id" => 4,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 229,
                "user_id" => 4,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 230,
                "user_id" => 4,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 231,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 232,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 233,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 234,
                "user_id" => 4,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 235,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 236,
                "user_id" => 4,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 237,
                "user_id" => 4,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 238,
                "user_id" => 4,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 239,
                "user_id" => 4,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 240,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 241,
                "user_id" => 4,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 242,
                "user_id" => 4,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 243,
                "user_id" => 4,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 244,
                "user_id" => 4,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 245,
                "user_id" => 4,
                "permission_name" => "requestViewDirectionRequests"
            ],
            [
                //"id" => 246,
                "user_id" => 4,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 247,
                "user_id" => 4,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 248,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 249,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitCheck"
            ],
            [
                //"id" => 250,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 251,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 252,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitCheck"
            ],
            [
                //"id" => 253,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 254,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInCheck"
            ],
            [
                //"id" => 255,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToRequireChange"
            ],
            [
                //"id" => 256,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToDeclined"
            ],
            [
                //"id" => 257,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                //"id" => 258,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 259,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToInCheck"
            ],
            [
                //"id" => 260,
                "user_id" => 4,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 261,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToRequireChange"
            ],
            [
                //"id" => 262,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToWaitWork"
            ],
            [
                //"id" => 263,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 264,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToWaitWork"
            ],
            [
                //"id" => 265,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 266,
                "user_id" => 4,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 267,
                "user_id" => 4,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 268,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitCheck"
            ],
            [
                //"id" => 269,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToInWork"
            ],
            [
                //"id" => 270,
                "user_id" => 4,
                "permission_name" => "transferInWorkToInCheck"
            ],
            [
                //"id" => 271,
                "user_id" => 4,
                "permission_name" => "transferInCheckToInWork"
            ],
            [
                //"id" => 272,
                "user_id" => 4,
                "permission_name" => "transferInWorkToRequireChange"
            ],
            [
                //"id" => 273,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInWork"
            ],
            [
                //"id" => 274,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToInWork"
            ],
            [
                //"id" => 275,
                "user_id" => 4,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 276,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitCheck"
            ],
            [
                //"id" => 277,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToOnHold"
            ],
            [
                //"id" => 278,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToInCheck"
            ],
            [
                //"id" => 279,
                "user_id" => 4,
                "permission_name" => "transferInCheckToOnHold"
            ],
            [
                //"id" => 280,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToRequireChange"
            ],
            [
                //"id" => 281,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToOnHold"
            ],
            [
                //"id" => 282,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToDeclined"
            ],
            [
                //"id" => 283,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToOnHold"
            ],
            [
                //"id" => 284,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToWaitWork"
            ],
            [
                //"id" => 285,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToOnHold"
            ],
            [
                //"id" => 286,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                //"id" => 287,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                //"id" => 288,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInCheck"
            ],
            [
                //"id" => 289,
                "user_id" => 4,
                "permission_name" => "transferInCheckToPartialComplete"
            ],
            [
                //"id" => 290,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                //"id" => 291,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                //"id" => 292,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToDeclined"
            ],
            [
                //"id" => 293,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToPartialComplete"
            ],
            [
                //"id" => 294,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                //"id" => 295,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                //"id" => 296,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 297,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToOnHold"
            ],
            [
                //"id" => 298,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 299,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitCheck"
            ],
            [
                //"id" => 300,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToCompleted"
            ],
            [
                //"id" => 301,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInCheck"
            ],
            [
                //"id" => 302,
                "user_id" => 4,
                "permission_name" => "transferInCheckToCompleted"
            ],
            [
                //"id" => 303,
                "user_id" => 4,
                "permission_name" => "transferCompletedToRequireChange"
            ],
            [
                //"id" => 304,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToCompleted"
            ],
            [
                //"id" => 305,
                "user_id" => 4,
                "permission_name" => "transferCompletedToDeclined"
            ],
            [
                //"id" => 306,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToCompleted"
            ],
            [
                //"id" => 307,
                "user_id" => 4,
                "permission_name" => "transferCompletedToWaitWork"
            ],
            [
                //"id" => 308,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToCompleted"
            ],
            [
                //"id" => 309,
                "user_id" => 4,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 310,
                "user_id" => 4,
                "permission_name" => "transferCompletedToOnHold"
            ],
            [
                //"id" => 311,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToCompleted"
            ],
            [
                //"id" => 312,
                "user_id" => 4,
                "permission_name" => "transferCompletedToPartialComplete"
            ],
            [
                //"id" => 313,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToCompleted"
            ],
            [
                //"id" => 314,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitCheck"
            ],
            [
                //"id" => 315,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToClosed"
            ],
            [
                //"id" => 316,
                "user_id" => 4,
                "permission_name" => "transferClosedToInCheck"
            ],
            [
                //"id" => 317,
                "user_id" => 4,
                "permission_name" => "transferInCheckToClosed"
            ],
            [
                //"id" => 318,
                "user_id" => 4,
                "permission_name" => "transferClosedToRequireChange"
            ],
            [
                //"id" => 319,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToClosed"
            ],
            [
                //"id" => 320,
                "user_id" => 4,
                "permission_name" => "transferClosedToDeclined"
            ],
            [
                //"id" => 321,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToClosed"
            ],
            [
                //"id" => 322,
                "user_id" => 4,
                "permission_name" => "transferClosedToWaitWork"
            ],
            [
                //"id" => 323,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToClosed"
            ],
            [
                //"id" => 324,
                "user_id" => 4,
                "permission_name" => "transferClosedToInWork"
            ],
            [
                //"id" => 325,
                "user_id" => 4,
                "permission_name" => "transferInWorkToClosed"
            ],
            [
                //"id" => 326,
                "user_id" => 4,
                "permission_name" => "transferClosedToOnHold"
            ],
            [
                //"id" => 327,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToClosed"
            ],
            [
                //"id" => 328,
                "user_id" => 4,
                "permission_name" => "transferClosedToPartialComplete"
            ],
            [
                //"id" => 329,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 330,
                "user_id" => 4,
                "permission_name" => "transferClosedToCompleted"
            ],
            [
                //"id" => 331,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitCheck"
            ],
            [
                //"id" => 332,
                "user_id" => 4,
                "permission_name" => "transferWaitCheckToAny"
            ],
            [
                //"id" => 333,
                "user_id" => 4,
                "permission_name" => "transferAnyToInCheck"
            ],
            [
                //"id" => 334,
                "user_id" => 4,
                "permission_name" => "transferInCheckToAny"
            ],
            [
                //"id" => 335,
                "user_id" => 4,
                "permission_name" => "transferAnyToRequireChange"
            ],
            [
                //"id" => 336,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToAny"
            ],
            [
                //"id" => 337,
                "user_id" => 4,
                "permission_name" => "transferAnyToDeclined"
            ],
            [
                //"id" => 338,
                "user_id" => 4,
                "permission_name" => "transferDeclinedToAny"
            ],
            [
                //"id" => 339,
                "user_id" => 4,
                "permission_name" => "transferAnyToWaitWork"
            ],
            [
                //"id" => 340,
                "user_id" => 4,
                "permission_name" => "transferWaitWorkToAny"
            ],
            [
                //"id" => 341,
                "user_id" => 4,
                "permission_name" => "transferAnyToInWork"
            ],
            [
                //"id" => 342,
                "user_id" => 4,
                "permission_name" => "transferInWorkToAny"
            ],
            [
                //"id" => 343,
                "user_id" => 4,
                "permission_name" => "transferAnyToOnHold"
            ],
            [
                //"id" => 344,
                "user_id" => 4,
                "permission_name" => "transferOnHoldToAny"
            ],
            [
                //"id" => 345,
                "user_id" => 4,
                "permission_name" => "transferAnyToPartialComplete"
            ],
            [
                //"id" => 346,
                "user_id" => 4,
                "permission_name" => "transferPartialCompleteToAny"
            ],
            [
                //"id" => 347,
                "user_id" => 4,
                "permission_name" => "transferAnyToCompleted"
            ],
            [
                //"id" => 348,
                "user_id" => 4,
                "permission_name" => "transferCompletedToAny"
            ],
            [
                //"id" => 349,
                "user_id" => 4,
                "permission_name" => "transferAnyToClosed"
            ],
            [
                //"id" => 350,
                "user_id" => 4,
                "permission_name" => "transferClosedToAny"
            ],
            [
                //"id" => 351,
                "user_id" => 4,
                "permission_name" => "reportLoadYourTeam"
            ],
            [
                //"id" => 352,
                "user_id" => 4,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 353,
                "user_id" => 4,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 354,
                "user_id" => 4,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 355,
                "user_id" => 4,
                "permission_name" => "viewDashboardsByCommand"
            ]
        ]
    ],
    "cooper_fixtures" => [
        "market" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'cooper_fixtures/market.php',
    ],
    "gomer_fixtures" => [
        "users" => [
            [
                "id" => 1,
                "username" => "kutsan.k",
                "auth_key" => "WXkN0YPJ3zjiyIptDy4NzCYQnSn4Qejo",
                "password_hash" => '$2y$13$C9087r6ipKg6Q9Q.2ykXHuHFsBriKMGAbpGCqs6ezLpNWatKnTxPi',
                "password_reset_token" => null,
                "email" => "kutsan.k@rozetka.com.ua",
                "created_at" => 1584396309,
                "updated_at" => 1584475046,
                "status" => 1,
                "color" => null,
                "first_name" => "",
                "second_name" => "",
                "avatar_image" => null,
                "reason_for_edit" => "kutsan.k kutsan.k kutsan.k kutsan.k kutsan.k",
                "ldap_sync_code" => null,
                "site_theme" => null
            ],
        ],
    ]
];