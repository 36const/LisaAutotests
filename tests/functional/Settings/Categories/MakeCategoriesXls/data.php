<?php

use lisa\Page\Other\Export;

return [
    'case1' => [
        'setting' => [
            'description' => 'Выгрузка заявки с заблокированными значениями',
            'rows' => 2
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'db' => [
                'lisa_fixtures' => [
                    'rozetka_categories' => include \Codeception\Module\TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/rozetka_categories.php',
                ]
            ],
            'RabbitMQ' => [
                'lisa_rz_categories_export' => []
            ],
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => '//a[@class="btn btn-success"][@href="/bpm/category/export"][@title="Выгрузить категории"]'
                        ]
                    ]
                ],
            ],
            'fileContent' => [
                "1" => [
                    "A" => "Категория Lisa",
                    "B" => "Категория 1 уровня",
                    "C" => "Категория 2 уровня",
                    "D" => "Категория 3 уровня",
                    "E" => "Категория 4 уровня",
                    "F" => "Категория 5 уровня",
                ]
            ]
        ]
    ],


];
