<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'rozetka_categories' => [
            [
                'id' => 4326656,
                'title' => 'Учебники',
                'mpath' => '.4627949.80257.4627865.80022.',
                'status' => 'active',
                'deleted' => null,
                'parent_id' => 80022,
                'lisa_category_id' => 474,
                'children' => 0,
                'dept_management_sv_id' => 5,
                'market_sv_id' => 10,
                'rz_sv_id' => 31,
                'groups_sv_id' => 36,
                'filters_and_cat_structures_sv_id' => 37,
                'cat_and_portal_changes_sv_id' => 35,
            ],
            [
                'id' => 80022,
                'title' => 'Диктофоны',
                'mpath' => '.4627949.80257.4627865.',
                'status' => 'active',
                'deleted' => null,
                'parent_id' => 4627865,
                'lisa_category_id' => 474,
                'children' => 1,
                'dept_management_sv_id' => 2,
                'market_sv_id' => 10,
                'rz_sv_id' => 31,
                'groups_sv_id' => 33,
                'filters_and_cat_structures_sv_id' => 34,
                'cat_and_portal_changes_sv_id' => 35,
            ],
            [
                'id' => 4655272,
                'title' => 'Досточки для оттиска',
                'mpath' => '.4625734.2460392.2460402.',
                'status' => 'active',
                'deleted' => null,
                'parent_id' => 2460402,
                'lisa_category_id' => 474,
                'children' => 0,
                'dept_management_sv_id' => 2,
                'market_sv_id' => 10,
                'rz_sv_id' => 31,
                'groups_sv_id' => 36,
                'filters_and_cat_structures_sv_id' => 34,
                'cat_and_portal_changes_sv_id' => 35,
            ],
        ],
        'notification_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
        'user_notifications' => [],
    ],
];