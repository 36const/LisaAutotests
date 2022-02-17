<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
        'rozetka_categories' => [
            [
                'id' => 80022,
                'title' => 'Диктофоны',
                'mpath' => '.4627949.80257.4627865.',
                'status' => 'active',
                'deleted' => null,
                'parent_id' => 4627865,
                'lisa_category_id' => 474,
                'children' => 0,
                'dept_management_sv_id' => 2,
                'market_sv_id' => 10,
                'rz_sv_id' => 31,
                'groups_sv_id' => 33,
                'filters_and_cat_structures_sv_id' => 34,
                'cat_and_portal_changes_sv_id' => 35,
            ]
        ],
        'notification_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
        'user_notifications' => [],
    ],
];