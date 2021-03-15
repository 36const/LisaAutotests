<?php
return [
    "lisa_fixtures" => [
        "requests" => [
            [
                "status" => 2,
                "reason" => 'так нада'
            ],
            [
                "status" => 3,
                "reason" => 'так ни нада'
            ],
        ],
        "requests_fields" => [
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
        "user_notifications" => [],
        "request_status_history" => [],
        "observers" => [
            [
                "request_id" => 1,
                "user_id" => 15
            ],
            [
                "request_id" => 1,
                "user_id" => 17
            ],
        ],
        "user_bpm" => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/user_bpm.php',
        "user_permissions" => [
            [
                //"id" => 1,
                "user_id" => 1,
                "permission_name" => "createUser"
            ],
            [
                //"id" => 2,
                "user_id" => 1,
                "permission_name" => "updateUser"
            ],
            [
                //"id" => 3,
                "user_id" => 1,
                "permission_name" => "blockUser"
            ],
            [
                //"id" => 4,
                "user_id" => 1,
                "permission_name" => "viewUser"
            ],
            [
                //"id" => 5,
                "user_id" => 1,
                "permission_name" => "requestAddNewItems"
            ],
            [
                //"id" => 6,
                "user_id" => 1,
                "permission_name" => "requestUpdateItems"
            ],
            [
                //"id" => 7,
                "user_id" => 1,
                "permission_name" => "requestTransferItems"
            ],
            [
                //"id" => 8,
                "user_id" => 1,
                "permission_name" => "requestGroupItems"
            ],
            [
                //"id" => 9,
                "user_id" => 1,
                "permission_name" => "requestUploadPhoto"
            ],
            [
                //"id" => 10,
                "user_id" => 1,
                "permission_name" => "requestCheckHidden"
            ],
            [
                //"id" => 11,
                "user_id" => 1,
                "permission_name" => "requestAddFatPortalCat"
            ],
            [
                //"id" => 12,
                "user_id" => 1,
                "permission_name" => "requestUpdateFatPortalCat"
            ],
            [
                //"id" => 13,
                "user_id" => 1,
                "permission_name" => "requestAddAttrOrValues"
            ],
            [
                //"id" => 14,
                "user_id" => 1,
                "permission_name" => "requestUpdateAttrOrValues"
            ],
            [
                //"id" => 15,
                "user_id" => 1,
                "permission_name" => "requestStructureDesign"
            ],
            [
                //"id" => 16,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateSC"
            ],
            [
                //"id" => 17,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateVideo"
            ],
            [
                //"id" => 18,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateSizeGrid"
            ],
            [
                //"id" => 19,
                "user_id" => 1,
                "permission_name" => "requestAddUpdateTags"
            ],
            [
                //"id" => 20,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToInCheck"
            ],
            [
                //"id" => 21,
                "user_id" => 1,
                "permission_name" => "transferInCheckToRequireChange"
            ],
            [
                //"id" => 22,
                "user_id" => 1,
                "permission_name" => "transferInCheckToDeclined"
            ],
            [
                //"id" => 23,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToInCheck"
            ],
            [
                //"id" => 24,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToInWork"
            ],
            [
                //"id" => 25,
                "user_id" => 1,
                "permission_name" => "transferInWorkToOnHold"
            ],
            [
                //"id" => 26,
                "user_id" => 1,
                "permission_name" => "transferInWorkToPartialComplete"
            ],
            [
                //"id" => 27,
                "user_id" => 1,
                "permission_name" => "transferInWorkToCompleted"
            ],
            [
                //"id" => 28,
                "user_id" => 1,
                "permission_name" => "transferInWorkToDeclined"
            ],
            [
                //"id" => 29,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToInWork"
            ],
            [
                //"id" => 30,
                "user_id" => 1,
                "permission_name" => "transferCompletedToRequireFix"
            ],
            [
                //"id" => 31,
                "user_id" => 1,
                "permission_name" => "transferCompletedToClosed"
            ],
            [
                //"id" => 32,
                "user_id" => 1,
                "permission_name" => "requestAppointManager"
            ],
            [
                //"id" => 33,
                "user_id" => 1,
                "permission_name" => "requestAppointSupervisor"
            ],
            [
                //"id" => 34,
                "user_id" => 1,
                "permission_name" => "requestCreate"
            ],
            [
                //"id" => 35,
                "user_id" => 1,
                "permission_name" => "requestUpdate"
            ],
            [
                //"id" => 36,
                "user_id" => 1,
                "permission_name" => "requestCreateRelated"
            ],
            [
                //"id" => 37,
                "user_id" => 1,
                "permission_name" => "requestViewAllRequests"
            ],
            [
                //"id" => 38,
                "user_id" => 1,
                "permission_name" => "reportView"
            ],
            [
                //"id" => 39,
                "user_id" => 1,
                "permission_name" => "massEdit"
            ],
            [
                //"id" => 40,
                "user_id" => 1,
                "permission_name" => "requestDeleteAttachments"
            ],
            [
                //"id" => 41,
                "user_id" => 1,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 42,
                "user_id" => 1,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 43,
                "user_id" => 1,
                "permission_name" => "sellerUpdate"
            ],
            [
                //"id" => 44,
                "user_id" => 1,
                "permission_name" => "categoryUpdate"
            ],
            [
                //"id" => 45,
                "user_id" => 1,
                "permission_name" => "teamUpdate"
            ],
            [
                //"id" => 46,
                "user_id" => 1,
                "permission_name" => "coefUpdate"
            ],
            [
                //"id" => 47,
                "user_id" => 1,
                "permission_name" => "fieldsUpdate"
            ],
            [
                //"id" => 48,
                "user_id" => 1,
                "permission_name" => "reasonsUpdate"
            ],
            [
                //"id" => 49,
                "user_id" => 1,
                "permission_name" => "excludedFieldsUpdate"
            ],
            [
                //"id" => 50,
                "user_id" => 1,
                "permission_name" => "errorsUpdate"
            ],
            [
                //"id" => 51,
                "user_id" => 1,
                "permission_name" => "viewSplitterModerationRequests"
            ],
            [
                //"id" => 52,
                "user_id" => 1,
                "permission_name" => "takeToWork"
            ],
            [
                //"id" => 53,
                "user_id" => 1,
                "permission_name" => "priorityUpdate"
            ],
            [
                //"id" => 54,
                "user_id" => 1,
                "permission_name" => "viewAllDashboards"
            ],
            [
                //"id" => 8807,
                "user_id" => 1,
                "permission_name" => "reportLoadAllUsers"
            ],
            [
                //"id" => 17093,
                "user_id" => 1,
                "permission_name" => "transferInCheckToWaitCheck"
            ],
            [
                //"id" => 17134,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 17175,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToRequireChange"
            ],
            [
                //"id" => 17216,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToWaitCheck"
            ],
            [
                //"id" => 17257,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToDeclined"
            ],
            [
                //"id" => 17298,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToInCheck"
            ],
            [
                //"id" => 17339,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToRequireChange"
            ],
            [
                //"id" => 17380,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToDeclined"
            ],
            [
                //"id" => 17421,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToWaitCheck"
            ],
            [
                //"id" => 17462,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToWaitWork"
            ],
            [
                //"id" => 17503,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToInCheck"
            ],
            [
                //"id" => 17544,
                "user_id" => 1,
                "permission_name" => "transferInCheckToWaitWork"
            ],
            [
                //"id" => 17585,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToRequireChange"
            ],
            [
                //"id" => 17626,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToWaitWork"
            ],
            [
                //"id" => 17667,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToDeclined"
            ],
            [
                //"id" => 17708,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToWaitWork"
            ],
            [
                //"id" => 17749,
                "user_id" => 1,
                "permission_name" => "transferInWorkToWaitCheck"
            ],
            [
                //"id" => 17790,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToInWork"
            ],
            [
                //"id" => 17831,
                "user_id" => 1,
                "permission_name" => "transferInWorkToInCheck"
            ],
            [
                //"id" => 17872,
                "user_id" => 1,
                "permission_name" => "transferInCheckToInWork"
            ],
            [
                //"id" => 17913,
                "user_id" => 1,
                "permission_name" => "transferInWorkToRequireChange"
            ],
            [
                //"id" => 17954,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToInWork"
            ],
            [
                //"id" => 17995,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToInWork"
            ],
            [
                //"id" => 18036,
                "user_id" => 1,
                "permission_name" => "transferInWorkToWaitWork"
            ],
            [
                //"id" => 18077,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToWaitCheck"
            ],
            [
                //"id" => 18118,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToOnHold"
            ],
            [
                //"id" => 18159,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToInCheck"
            ],
            [
                //"id" => 18200,
                "user_id" => 1,
                "permission_name" => "transferInCheckToOnHold"
            ],
            [
                //"id" => 18241,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToRequireChange"
            ],
            [
                //"id" => 18282,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToOnHold"
            ],
            [
                //"id" => 18323,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToDeclined"
            ],
            [
                //"id" => 18364,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToOnHold"
            ],
            [
                //"id" => 18405,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToWaitWork"
            ],
            [
                //"id" => 18446,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToOnHold"
            ],
            [
                //"id" => 18487,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToWaitCheck"
            ],
            [
                //"id" => 18528,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToPartialComplete"
            ],
            [
                //"id" => 18569,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToInCheck"
            ],
            [
                //"id" => 18610,
                "user_id" => 1,
                "permission_name" => "transferInCheckToPartialComplete"
            ],
            [
                //"id" => 18651,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToRequireChange"
            ],
            [
                //"id" => 18692,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToPartialComplete"
            ],
            [
                //"id" => 18733,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToDeclined"
            ],
            [
                //"id" => 18774,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToPartialComplete"
            ],
            [
                //"id" => 18815,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToWaitWork"
            ],
            [
                //"id" => 18856,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToPartialComplete"
            ],
            [
                //"id" => 18897,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToInWork"
            ],
            [
                //"id" => 18938,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToOnHold"
            ],
            [
                //"id" => 19020,
                "user_id" => 1,
                "permission_name" => "transferCompletedToWaitCheck"
            ],
            [
                //"id" => 19061,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToCompleted"
            ],
            [
                //"id" => 19102,
                "user_id" => 1,
                "permission_name" => "transferCompletedToInCheck"
            ],
            [
                //"id" => 19143,
                "user_id" => 1,
                "permission_name" => "transferInCheckToCompleted"
            ],
            [
                //"id" => 19184,
                "user_id" => 1,
                "permission_name" => "transferCompletedToRequireChange"
            ],
            [
                //"id" => 19225,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToCompleted"
            ],
            [
                //"id" => 19266,
                "user_id" => 1,
                "permission_name" => "transferCompletedToDeclined"
            ],
            [
                //"id" => 19307,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToCompleted"
            ],
            [
                //"id" => 19348,
                "user_id" => 1,
                "permission_name" => "transferCompletedToWaitWork"
            ],
            [
                //"id" => 19389,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToCompleted"
            ],
            [
                //"id" => 19430,
                "user_id" => 1,
                "permission_name" => "transferCompletedToInWork"
            ],
            [
                //"id" => 19471,
                "user_id" => 1,
                "permission_name" => "transferCompletedToOnHold"
            ],
            [
                //"id" => 19553,
                "user_id" => 1,
                "permission_name" => "transferCompletedToPartialComplete"
            ],
            [
                //"id" => 19594,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToCompleted"
            ],
            [
                //"id" => 19635,
                "user_id" => 1,
                "permission_name" => "transferClosedToWaitCheck"
            ],
            [
                //"id" => 19676,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToClosed"
            ],
            [
                //"id" => 19717,
                "user_id" => 1,
                "permission_name" => "transferClosedToInCheck"
            ],
            [
                //"id" => 19758,
                "user_id" => 1,
                "permission_name" => "transferInCheckToClosed"
            ],
            [
                //"id" => 19799,
                "user_id" => 1,
                "permission_name" => "transferClosedToRequireChange"
            ],
            [
                //"id" => 19840,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToClosed"
            ],
            [
                //"id" => 19881,
                "user_id" => 1,
                "permission_name" => "transferClosedToDeclined"
            ],
            [
                //"id" => 19922,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToClosed"
            ],
            [
                //"id" => 19963,
                "user_id" => 1,
                "permission_name" => "transferClosedToWaitWork"
            ],
            [
                //"id" => 20004,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToClosed"
            ],
            [
                //"id" => 20045,
                "user_id" => 1,
                "permission_name" => "transferClosedToInWork"
            ],
            [
                //"id" => 20086,
                "user_id" => 1,
                "permission_name" => "transferInWorkToClosed"
            ],
            [
                //"id" => 20127,
                "user_id" => 1,
                "permission_name" => "transferClosedToOnHold"
            ],
            [
                //"id" => 20168,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToClosed"
            ],
            [
                //"id" => 20209,
                "user_id" => 1,
                "permission_name" => "transferClosedToPartialComplete"
            ],
            [
                //"id" => 20250,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToClosed"
            ],
            [
                //"id" => 20291,
                "user_id" => 1,
                "permission_name" => "transferClosedToCompleted"
            ],
            [
                //"id" => 20332,
                "user_id" => 1,
                "permission_name" => "transferAnyToWaitCheck"
            ],
            [
                //"id" => 20373,
                "user_id" => 1,
                "permission_name" => "transferWaitCheckToAny"
            ],
            [
                //"id" => 20414,
                "user_id" => 1,
                "permission_name" => "transferAnyToInCheck"
            ],
            [
                //"id" => 20455,
                "user_id" => 1,
                "permission_name" => "transferInCheckToAny"
            ],
            [
                //"id" => 20496,
                "user_id" => 1,
                "permission_name" => "transferAnyToRequireChange"
            ],
            [
                //"id" => 20537,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToAny"
            ],
            [
                //"id" => 20578,
                "user_id" => 1,
                "permission_name" => "transferAnyToDeclined"
            ],
            [
                //"id" => 20619,
                "user_id" => 1,
                "permission_name" => "transferDeclinedToAny"
            ],
            [
                //"id" => 20660,
                "user_id" => 1,
                "permission_name" => "transferAnyToWaitWork"
            ],
            [
                //"id" => 20701,
                "user_id" => 1,
                "permission_name" => "transferWaitWorkToAny"
            ],
            [
                //"id" => 20742,
                "user_id" => 1,
                "permission_name" => "transferAnyToInWork"
            ],
            [
                //"id" => 20783,
                "user_id" => 1,
                "permission_name" => "transferInWorkToAny"
            ],
            [
                //"id" => 20824,
                "user_id" => 1,
                "permission_name" => "transferAnyToOnHold"
            ],
            [
                //"id" => 20865,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToAny"
            ],
            [
                //"id" => 20906,
                "user_id" => 1,
                "permission_name" => "transferAnyToPartialComplete"
            ],
            [
                //"id" => 20947,
                "user_id" => 1,
                "permission_name" => "transferPartialCompleteToAny"
            ],
            [
                //"id" => 20988,
                "user_id" => 1,
                "permission_name" => "transferAnyToCompleted"
            ],
            [
                //"id" => 21029,
                "user_id" => 1,
                "permission_name" => "transferCompletedToAny"
            ],
            [
                //"id" => 21070,
                "user_id" => 1,
                "permission_name" => "transferAnyToClosed"
            ],
            [
                //"id" => 21111,
                "user_id" => 1,
                "permission_name" => "transferClosedToAny"
            ],
            [
                //"id" => 21152,
                "user_id" => 1,
                "permission_name" => "transferRequireChangeToWaitCheck"
            ],
            [
                //"id" => 23326,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToPartialComplete"
            ],
            [
                //"id" => 23347,
                "user_id" => 1,
                "permission_name" => "transferOnHoldToCompleted"
            ],
        ],
    ],
];