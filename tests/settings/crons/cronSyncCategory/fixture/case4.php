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
            ],
        ],
        'notification_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
        'user_notifications' => [],
    ],
];