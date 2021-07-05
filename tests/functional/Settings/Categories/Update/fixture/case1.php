<?php

return [
    "lisa_fixtures" => [
        "categories" => array_merge_recursive(
            include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/categories.php',
            [
                [
                    "id" => 474,
                    'title' => 'Распределить категорию в Lisa',
                    'difficulty' => 1,
                    'supervisor_id' => 6,
                    'status' => 1
                ]
            ]
        ),
        'rozetka_categories' => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
    ],
];