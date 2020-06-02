<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Изменение всех полей во всех статусах',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'for_all_statuses' => '1',
                'members' => ['author_id', 'manager_id', 'supervisor_id'],
                'positions' => ['supervisor', 'contentManager', 'productManager'],
                'users' => ['5', '6', '11', '19'],
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "request_editing" => [
                        [
                            "id" => 1,
                            "request_field" => "author_id",
                            "request_status" => 1,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 2,
                            "request_field" => "author_id",
                            "request_status" => 2,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 3,
                            "request_field" => "author_id",
                            "request_status" => 3,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 4,
                            "request_field" => "author_id",
                            "request_status" => 5,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 5,
                            "request_field" => "author_id",
                            "request_status" => 6,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 6,
                            "request_field" => "author_id",
                            "request_status" => 7,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 7,
                            "request_field" => "author_id",
                            "request_status" => 8,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 8,
                            "request_field" => "author_id",
                            "request_status" => 9,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 9,
                            "request_field" => "author_id",
                            "request_status" => 11,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 10,
                            "request_field" => "author_id",
                            "request_status" => 4,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 11,
                            "request_field" => "subject",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 12,
                            "request_field" => "subject",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 13,
                            "request_field" => "subject",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 14,
                            "request_field" => "subject",
                            "request_status" => 5,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 15,
                            "request_field" => "subject",
                            "request_status" => 6,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 16,
                            "request_field" => "subject",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 17,
                            "request_field" => "subject",
                            "request_status" => 8,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 18,
                            "request_field" => "subject",
                            "request_status" => 9,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 19,
                            "request_field" => "subject",
                            "request_status" => 11,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 20,
                            "request_field" => "subject",
                            "request_status" => 4,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                    ],
                ]
            ]
        ],
    ],

    'case2' => [
        'setting' => [
            'description' => 'Изменение всех полей в одном статусе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'members' => ['author_id', 'manager_id', 'supervisor_id'],
                'positions' => ['supervisor', 'contentManager', 'productManager'],
                'users' => ['5', '6', '11', '19'],
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "request_editing" => [
                        [
                            "id" => 1,
                            "request_field" => "author_id",
                            "request_status" => 1,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 2,
                            "request_field" => "author_id",
                            "request_status" => 2,
                            "permission_list" => '{"users": ["5", "6", "11", "19"], "members": ["author_id", "manager_id", "supervisor_id"], "positions": ["supervisor", "contentManager", "productManager"]}'
                        ],
                        [
                            "id" => 3,
                            "request_field" => "author_id",
                            "request_status" => 3,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 4,
                            "request_field" => "author_id",
                            "request_status" => 5,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 5,
                            "request_field" => "author_id",
                            "request_status" => 6,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 6,
                            "request_field" => "author_id",
                            "request_status" => 7,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 7,
                            "request_field" => "author_id",
                            "request_status" => 8,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 8,
                            "request_field" => "author_id",
                            "request_status" => 9,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 9,
                            "request_field" => "author_id",
                            "request_status" => 11,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 10,
                            "request_field" => "author_id",
                            "request_status" => 4,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 11,
                            "request_field" => "subject",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 12,
                            "request_field" => "subject",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 13,
                            "request_field" => "subject",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 14,
                            "request_field" => "subject",
                            "request_status" => 5,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 15,
                            "request_field" => "subject",
                            "request_status" => 6,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 16,
                            "request_field" => "subject",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 17,
                            "request_field" => "subject",
                            "request_status" => 8,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 18,
                            "request_field" => "subject",
                            "request_status" => 9,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 19,
                            "request_field" => "subject",
                            "request_status" => 11,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 20,
                            "request_field" => "subject",
                            "request_status" => 4,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case3' => [
        'setting' => [
            'description' => 'Изменение автора во всех статусах',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'for_all_statuses' => '1',
                'members' => ['author_id'],
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "request_editing" => [
                        [
                            "id" => 1,
                            "request_field" => "author_id",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 2,
                            "request_field" => "author_id",
                            "request_status" => 2,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 3,
                            "request_field" => "author_id",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 4,
                            "request_field" => "author_id",
                            "request_status" => 5,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 5,
                            "request_field" => "author_id",
                            "request_status" => 6,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 6,
                            "request_field" => "author_id",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 7,
                            "request_field" => "author_id",
                            "request_status" => 8,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 8,
                            "request_field" => "author_id",
                            "request_status" => 9,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 9,
                            "request_field" => "author_id",
                            "request_status" => 11,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 10,
                            "request_field" => "author_id",
                            "request_status" => 4,
                            "permission_list" => '{"members": ["author_id"]}'
                        ],
                        [
                            "id" => 11,
                            "request_field" => "subject",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 12,
                            "request_field" => "subject",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 13,
                            "request_field" => "subject",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 14,
                            "request_field" => "subject",
                            "request_status" => 5,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 15,
                            "request_field" => "subject",
                            "request_status" => 6,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 16,
                            "request_field" => "subject",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 17,
                            "request_field" => "subject",
                            "request_status" => 8,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 18,
                            "request_field" => "subject",
                            "request_status" => 9,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 19,
                            "request_field" => "subject",
                            "request_status" => 11,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 20,
                            "request_field" => "subject",
                            "request_status" => 4,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case4' => [
        'setting' => [
            'description' => 'Изменение должности в одном статусе',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'positions' => ['system', 'admin', 'headSupervisor', 'supervisor', 'contentManager', 'teamLead', 'productManager', 'photoManager', 'seo', 'moderator'],
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "request_editing" => [
                        [
                            "id" => 1,
                            "request_field" => "author_id",
                            "request_status" => 1,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 2,
                            "request_field" => "author_id",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["system", "admin", "headSupervisor", "supervisor", "contentManager", "teamLead", "productManager", "photoManager", "seo", "moderator"]}'
                        ],
                        [
                            "id" => 3,
                            "request_field" => "author_id",
                            "request_status" => 3,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 4,
                            "request_field" => "author_id",
                            "request_status" => 5,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 5,
                            "request_field" => "author_id",
                            "request_status" => 6,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 6,
                            "request_field" => "author_id",
                            "request_status" => 7,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 7,
                            "request_field" => "author_id",
                            "request_status" => 8,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 8,
                            "request_field" => "author_id",
                            "request_status" => 9,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 9,
                            "request_field" => "author_id",
                            "request_status" => 11,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 10,
                            "request_field" => "author_id",
                            "request_status" => 4,
                            "permission_list" => "[]"
                        ],
                        [
                            "id" => 11,
                            "request_field" => "subject",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 12,
                            "request_field" => "subject",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 13,
                            "request_field" => "subject",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 14,
                            "request_field" => "subject",
                            "request_status" => 5,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 15,
                            "request_field" => "subject",
                            "request_status" => 6,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 16,
                            "request_field" => "subject",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 17,
                            "request_field" => "subject",
                            "request_status" => 8,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 18,
                            "request_field" => "subject",
                            "request_status" => 9,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 19,
                            "request_field" => "subject",
                            "request_status" => 11,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 20,
                            "request_field" => "subject",
                            "request_status" => 4,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                    ],
                ],
            ]
        ]
    ],

    'case5' => [
        'setting' => [
            'description' => 'Изменение пользователя во всех статусах',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'requestBody' => [
                'for_all_statuses' => '1',
                'users[]' => '19',
                '_csrf-backend' => null
            ],
            'db' => [
                "lisa_fixtures" => [
                    "request_editing" => [
                        [
                            "id" => 1,
                            "request_field" => "author_id",
                            "request_status" => 1,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 2,
                            "request_field" => "author_id",
                            "request_status" => 2,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 3,
                            "request_field" => "author_id",
                            "request_status" => 3,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 4,
                            "request_field" => "author_id",
                            "request_status" => 5,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 5,
                            "request_field" => "author_id",
                            "request_status" => 6,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 6,
                            "request_field" => "author_id",
                            "request_status" => 7,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 7,
                            "request_field" => "author_id",
                            "request_status" => 8,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 8,
                            "request_field" => "author_id",
                            "request_status" => 9,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 9,
                            "request_field" => "author_id",
                            "request_status" => 11,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 10,
                            "request_field" => "author_id",
                            "request_status" => 4,
                            "permission_list" => '{"users": ["19"]}'
                        ],
                        [
                            "id" => 11,
                            "request_field" => "subject",
                            "request_status" => 1,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 12,
                            "request_field" => "subject",
                            "request_status" => 2,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 13,
                            "request_field" => "subject",
                            "request_status" => 3,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 14,
                            "request_field" => "subject",
                            "request_status" => 5,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 15,
                            "request_field" => "subject",
                            "request_status" => 6,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 16,
                            "request_field" => "subject",
                            "request_status" => 7,
                            "permission_list" => '{"members": ["author_id"], "positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 17,
                            "request_field" => "subject",
                            "request_status" => 8,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 18,
                            "request_field" => "subject",
                            "request_status" => 9,
                            "permission_list" => '{"positions": ["supervisor", "headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 19,
                            "request_field" => "subject",
                            "request_status" => 11,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                        [
                            "id" => 20,
                            "request_field" => "subject",
                            "request_status" => 4,
                            "permission_list" => '{"positions": ["headSupervisor", "admin"]}'
                        ],
                    ],
                ],
            ]
        ]
    ],
];
