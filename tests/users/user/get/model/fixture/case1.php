<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.teams' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.teams.php',
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'markets_supervisors' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/markets_supervisors.php',
        'sv_distribution' => array_merge(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/sv_distribution.php',
            [
                [
                    //'id' => 6,
                    'request_direction' => 0,
                    'request_type_ids' => '["9", "10", "11"]',
                    'field_ids' => '[]',
                    'seller_ids' => '[]',
                    'user_positions' => '["supervisor"]',
                    'added_users' => '["26"]',
                    'removed_users' => '[]',
                    'lisa_category_ids' => '[]',
                    'rz_category_ids' => '[]',
                    'author_id' => null,
                    'team_ids' => '[]',
                    'status' => 1,
                    'is_system_rule' => true,
                    'distribute_by' => 4,
                    'weight' => 1,
                    'select_order' => 0,
                    'statuses_for_order' => '["2", "7", "1", "9", "8"]',
                    'observers' => '[]',
                ]
            ]
        ),
        'rozetka_categories' => [
            [
                'id' => 4626923,
                'title' => 'Алкогольные напитки и продукты питания',
                'mpath' => '.',
                'status' => 'active',
                'deleted' => NULL,
                'parent_id' => 0,
                'lisa_category_id' => 1,
                'children' => 2,
                'dept_management_sv_id' => 2,
                'market_sv_id' => 24,
                'rz_sv_id' => 32,
                'groups_sv_id' => 36,
                'filters_and_cat_structures_sv_id' => 34,
                'cat_and_portal_changes_sv_id' => 38,
            ],
            [
                'id' => 80025,
                'title' => 'Бытовая техника, интерьер',
                'mpath' => '.',
                'status' => 'active',
                'deleted' => NULL,
                'parent_id' => 0,
                'lisa_category_id' => 474,
                'children' => 0,
                'dept_management_sv_id' => 2,
                'market_sv_id' => 23,
                'rz_sv_id' => 31,
                'groups_sv_id' => 36,
                'filters_and_cat_structures_sv_id' => 37,
                'cat_and_portal_changes_sv_id' => 38,
            ],
        ],
        'requests' => [
            [
                'status' => 1,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 2,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 3,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 4,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 8,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 9,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 11,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 6,
            ],
            [
                'status' => 5,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 11,
            ],
            [
                'status' => 6,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 12,
            ],
            [
                'status' => 7,
                'author_id' => 6,
                'supervisor_id' => 6,
                'manager_id' => 13,
            ],
        ],
    ],
];