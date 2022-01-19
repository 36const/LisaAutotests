<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Получить список менеджеров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'url' => 'managers',
            'responseBody' => [
                0 => [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                    'team' => 17,
                ],
                1 => [
                    'id' => 13,
                    'name' => 'Менеджер Контентович 2А',
                    'team' => 17,
                ],
                2 => [
                    'id' => 14,
                    'name' => 'Менеджер Контентович 2Б',
                    'team' => 17,
                ],
                3 => [
                    'id' => 11,
                    'name' => 'Менеджер Контентович 1А',
                    'team' => 1,
                ],
                4 => [
                    'id' => 12,
                    'name' => 'Менеджер Контентович 1Б',
                    'team' => 1,
                ],
            ],
        ]
    ],

    'case2' => [
        'setting' => [
            'description' => 'Получить список супервайзеров',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'supervisors',
            'responseBody' => [
                [
                    'id' => 4,
                    'name' => 'Константин Куцан',
                ],
                [
                    'id' => 33,
                    'name' => 'Супервайзер Групповушкин 13',
                ],
                [
                    'id' => 36,
                    'name' => 'Супервайзер Групповушкин 16',
                ],
                [
                    'id' => 35,
                    'name' => 'Супервайзер Категоркин 15',
                ],
                [
                    'id' => 38,
                    'name' => 'Супервайзер Категоркин 18',
                ],
                [
                    'id' => 6,
                    'name' => 'Супервайзер Начальникович 1',
                ],
                [
                    'id' => 30,
                    'name' => 'Супервайзер Начальникович 10',
                ],
                [
                    'id' => 31,
                    'name' => 'Супервайзер Начальникович 11',
                ],
                [
                    'id' => 32,
                    'name' => 'Супервайзер Начальникович 12',
                ],
                [
                    'id' => 10,
                    'name' => 'Супервайзер Начальникович 2',
                ],
                [
                    'id' => 23,
                    'name' => 'Супервайзер Начальникович 3',
                ],
                [
                    'id' => 24,
                    'name' => 'Супервайзер Начальникович 4',
                ],
                [
                    'id' => 25,
                    'name' => 'Супервайзер Начальникович 5',
                ],
                [
                    'id' => 26,
                    'name' => 'Супервайзер Начальникович 6',
                ],
                [
                    'id' => 27,
                    'name' => 'Супервайзер Начальникович 7',
                ],
                [
                    'id' => 28,
                    'name' => 'Супервайзер Начальникович 8',
                ],
                [
                    'id' => 29,
                    'name' => 'Супервайзер Начальникович 9',
                ],
                [
                    'id' => 34,
                    'name' => 'Супервайзер Проектенко 14',
                ],
                [
                    'id' => 37,
                    'name' => 'Супервайзер Проектенко 17',
                ],
                [
                    'id' => 5,
                    'name' => 'Супервайзер Руководько 1',
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Получить список пермишенов текущего пользователя',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'get-user-permissions',
            'responseBody' => [
                'updateUser',
                'reportView',
                'viewUser',
                'requestViewOwnRequests',
                'transferWaitWorkToInWork',
                'transferInWorkToOnHold',
                'transferInWorkToPartialComplete',
                'transferInWorkToCompleted',
                'transferInWorkToDeclined',
                'viewOwnDashboards',
                'reportLoadAllUsers',
                'reportLoadMarketUsers',
                'reportLoadYourTeam',
                'viewAllDashboards',
                'viewDashboardsByDirection',
                'viewDashboardsByCommand',
                'createUser',
                'blockUser',
                'errorsUpdate',
                'sellerUpdate',
                'categoryUpdate',
                'teamUpdate',
                'coefUpdate',
                'fieldsUpdate',
                'reasonsUpdate',
                'excludedFieldsUpdate',
                'priorityUpdate',
                'requestCreate',
                'requestCreateRelated',
                'requestViewDirectionRequests',
                'requestViewAllRequests',
                'massEdit',
                'requestViewTeamRequests',
                'requestDeleteAttachments',
                'viewSplitterModerationRequests',
                'takeToWork',
                'transferOnHoldToInWork',
                'transferCompletedToClosed',
                'transferWaitCheckToInCheck',
                'transferInCheckToRequireChange',
                'transferInCheckToDeclined',
                'requestAddNewItems',
                'requestUpdateItems',
                'requestTransferItems',
                'requestGroupItems',
                'requestUploadPhoto',
                'requestCheckHidden',
                'requestAddFatPortalCat',
                'requestUpdateFatPortalCat',
                'requestAddAttrOrValues',
                'requestUpdateAttrOrValues',
                'requestStructureDesign',
                'requestAddUpdateSC',
                'requestAddUpdateVideo',
                'requestAddUpdateSizeGrid',
                'requestAddUpdateTags',
                'transferInCheckToWaitCheck',
                'transferRequireChangeToWaitCheck',
                'transferWaitCheckToRequireChange',
                'transferDeclinedToWaitCheck',
                'transferWaitCheckToDeclined',
                'transferDeclinedToInCheck',
                'transferDeclinedToRequireChange',
                'transferRequireChangeToDeclined',
                'transferWaitWorkToWaitCheck',
                'transferWaitCheckToWaitWork',
                'transferWaitWorkToInCheck',
                'transferInCheckToWaitWork',
                'transferWaitWorkToRequireChange',
                'transferRequireChangeToWaitWork',
                'transferWaitWorkToDeclined',
                'transferDeclinedToWaitWork',
                'transferInWorkToWaitCheck',
                'transferWaitCheckToInWork',
                'transferInWorkToInCheck',
                'transferInCheckToInWork',
                'transferInWorkToRequireChange',
                'transferRequireChangeToInWork',
                'transferDeclinedToInWork',
                'transferInWorkToWaitWork',
                'transferOnHoldToWaitCheck',
                'transferWaitCheckToOnHold',
                'transferOnHoldToInCheck',
                'transferInCheckToOnHold',
                'transferOnHoldToRequireChange',
                'transferRequireChangeToOnHold',
                'transferOnHoldToDeclined',
                'transferDeclinedToOnHold',
                'transferOnHoldToWaitWork',
                'transferWaitWorkToOnHold',
                'transferPartialCompleteToWaitCheck',
                'transferWaitCheckToPartialComplete',
                'transferPartialCompleteToInCheck',
                'transferInCheckToPartialComplete',
                'transferPartialCompleteToRequireChange',
                'transferRequireChangeToPartialComplete',
                'transferPartialCompleteToDeclined',
                'transferDeclinedToPartialComplete',
                'transferPartialCompleteToWaitWork',
                'transferWaitWorkToPartialComplete',
                'transferPartialCompleteToInWork',
                'transferPartialCompleteToOnHold',
                'transferOnHoldToPartialComplete',
                'transferCompletedToWaitCheck',
                'transferWaitCheckToCompleted',
                'transferCompletedToInCheck',
                'transferInCheckToCompleted',
                'transferCompletedToRequireChange',
                'transferRequireChangeToCompleted',
                'transferCompletedToDeclined',
                'transferDeclinedToCompleted',
                'transferCompletedToWaitWork',
                'transferWaitWorkToCompleted',
                'transferCompletedToInWork',
                'transferCompletedToOnHold',
                'transferOnHoldToCompleted',
                'transferCompletedToPartialComplete',
                'transferPartialCompleteToCompleted',
                'transferClosedToWaitCheck',
                'transferWaitCheckToClosed',
                'transferClosedToInCheck',
                'transferInCheckToClosed',
                'transferClosedToRequireChange',
                'transferRequireChangeToClosed',
                'transferClosedToDeclined',
                'transferDeclinedToClosed',
                'transferClosedToWaitWork',
                'transferWaitWorkToClosed',
                'transferClosedToInWork',
                'transferInWorkToClosed',
                'transferClosedToOnHold',
                'transferOnHoldToClosed',
                'transferClosedToPartialComplete',
                'transferPartialCompleteToClosed',
                'transferClosedToCompleted',
                'transferAnyToWaitCheck',
                'transferWaitCheckToAny',
                'transferAnyToInCheck',
                'transferInCheckToAny',
                'transferAnyToRequireChange',
                'transferRequireChangeToAny',
                'transferAnyToDeclined',
                'transferDeclinedToAny',
                'transferAnyToWaitWork',
                'transferWaitWorkToAny',
                'transferAnyToInWork',
                'transferInWorkToAny',
                'transferAnyToOnHold',
                'transferOnHoldToAny',
                'transferAnyToPartialComplete',
                'transferPartialCompleteToAny',
                'transferAnyToCompleted',
                'transferCompletedToAny',
                'transferAnyToClosed',
                'transferClosedToAny',
                'updateTemplates',
                'seeAllTemplates',
                'seeDirectionTemplates',
                'seeTeamTemplates',
                'viewOwnRequestsMrk',
                'viewTeamRequestsMrk',
                'viewAllRequestsMrk',
                'createFilterMrk',
                'createRequestMrk',
                'createSubRequestMrk',
                'updateRequestMrk',
                'commentRequestMrk',
                'seeHiddenCrossCheckFields',
                '50kReports',
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Получить список супервайзеров отдельной команды (Маркетплейс)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'get-supervisors-by-team-direction?teamDirection=2',
            'responseBody' => [
                0 => [
                    'id' => 6,
                    'name' => 'Супервайзер Начальникович 1',
                ],
                1 => [
                    'id' => 10,
                    'name' => 'Супервайзер Начальникович 2',
                ],
                2 => [
                    'id' => 24,
                    'name' => 'Супервайзер Начальникович 4',
                ],
                3 => [
                    'id' => 25,
                    'name' => 'Супервайзер Начальникович 5',
                ],
                4 => [
                    'id' => 26,
                    'name' => 'Супервайзер Начальникович 6',
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Получить список супервайзеров отдельной команды (Розетка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'get-supervisors-by-team-direction?teamDirection=3',
            'responseBody' => [
                0 => [
                    'id' => 30,
                    'name' => 'Супервайзер Начальникович 10',
                ],
                1 => [
                    'id' => 31,
                    'name' => 'Супервайзер Начальникович 11',
                ],
                2 => [
                    'id' => 32,
                    'name' => 'Супервайзер Начальникович 12',
                ],
                3 => [
                    'id' => 23,
                    'name' => 'Супервайзер Начальникович 3',
                ],
                4 => [
                    'id' => 27,
                    'name' => 'Супервайзер Начальникович 7',
                ],
                5 => [
                    'id' => 28,
                    'name' => 'Супервайзер Начальникович 8',
                ],
                6 => [
                    'id' => 29,
                    'name' => 'Супервайзер Начальникович 9',
                ],
            ]
        ]
    ],

    'case6' => [
        'setting' => [
            'description' => 'Получить список супервайзеров отдельной команды (Группировка)',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case2.php',
        'provider_data' => [
            'url' => 'get-supervisors-by-team-direction?teamDirection=4',
            'responseBody' => [
                0 => [
                    'id' => 33,
                    'name' => 'Супервайзер Групповушкин 13',
                ],
                1 => [
                    'id' => 36,
                    'name' => 'Супервайзер Групповушкин 16',
                ],
            ]
        ]
    ],

];
