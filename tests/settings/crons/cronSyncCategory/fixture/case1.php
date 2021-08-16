<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'categories' => array_merge_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
            [
                [
                    'id' => 474,
                    'title' => 'Распределить категорию в Lisa',
                    'difficulty' => 1,
                    'supervisor_id' => 4,
                    'status' => 1
                ]
            ]
        ),
        'rozetka_categories' => [
            [
                'id' => 80022,
                'title' => 'Диктофоны',
                'mpath' => '.4627949.80257.4627865.',
                'status' => 'active',
                'deleted' => null,
                'parent_id' => 4627865,
                'lisa_category_id' => null,
            ]
        ],
        'notification_settings' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/notification_settings.php',
        'user_notifications' => [],
    ],
];