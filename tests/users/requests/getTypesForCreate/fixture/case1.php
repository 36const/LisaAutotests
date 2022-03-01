<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [],
        'requests_fields' => [],
        'request_attachments' => [],        
        'request_status_history' => [],
        'observers' => [],
        'auth.api_users' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.api_users.php',
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'auth.auth_item' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item.php',
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
                'change_date' => '2021-10-22 09:57:21',
                'drfo' => '\'000000004',
                'positions' => '["supervisor"]',
            ],
        ],
        'auth.user_access' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.user_access.php',
        'auth.auth_assignment' => [
            [
                'item_name' => 'updateUser',
                'user_id' => 4,
                'created_at' => NULL,
            ],
            [
                'item_name' => 'requestCreate',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:14:36',
            ],
            [
                'item_name' => 'viewUser',
                'user_id' => 4,
                'created_at' => NULL,
            ],
            [
                'item_name' => 'requestAddAttrOrValues',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestAddFatPortalCat',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestAddNewItems',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestAddUpdateSizeGrid',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestAddUpdateTags',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestAddUpdateVideo',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestCheckHidden',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestGroupItems',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestStructureDesign',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestTransferItems',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestUpdateAttrOrValues',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestUpdateFatPortalCat',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestUpdateItems',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
            [
                'item_name' => 'requestUploadPhoto',
                'user_id' => 4,
                'created_at' => '2021-10-22 10:15:05',
            ],
        ],
    ],
];