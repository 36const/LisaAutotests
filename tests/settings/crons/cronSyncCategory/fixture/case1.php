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
            ]
        ],
        'notification_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
        'user_notifications' => [],
    ],
];