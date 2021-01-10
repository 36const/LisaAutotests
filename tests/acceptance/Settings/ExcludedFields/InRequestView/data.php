<?php

use lisa\Page\Requests\RequestView;

return [
    'case1' => [
        'setting' => [
            'description' => 'Взаимоисключающие чек-боксы при редактировании заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects_1" => [
                "canSee" => [
                    RequestView::findCheckbox(' Ручная загрузка'),
                ],
                "cantSee" => [
                    RequestView::findCheckbox(' Добавление товаров в новую категорию'),
                    RequestView::findCheckbox(' Лоты'),
                    RequestView::findCheckbox(' На основе отзыва клиента на сайте'),
                    RequestView::findCheckbox(' Пакетная загрузка'),
                    RequestView::findCheckbox(' Промо-описание'),
                    RequestView::findCheckbox(' С видео'),
                    RequestView::findCheckbox(' С размерной сеткой'),
                    RequestView::findCheckbox(' С тегами к товарам'),
                    RequestView::findCheckbox(' С фотосъемкой'),
                    RequestView::findCheckbox(' Уценка'),
                    RequestView::findCheckbox(' Уценка 2'),
                ],
            ],
            "pageObjects_2" => [
                "canSee" => [
                    RequestView::findCheckbox(' Пакетная загрузка'),
                ],
                "cantSee" => [
                    RequestView::findCheckbox(' Добавление товаров в новую категорию'),
                    RequestView::findCheckbox(' Лоты'),
                    RequestView::findCheckbox(' На основе отзыва клиента на сайте'),
                    RequestView::findCheckbox(' Промо-описание'),
                    RequestView::findCheckbox(' Ручная загрузка'),
                    RequestView::findCheckbox(' С видео'),
                    RequestView::findCheckbox(' С размерной сеткой'),
                    RequestView::findCheckbox(' С тегами к товарам'),
                    RequestView::findCheckbox(' С фотосъемкой'),
                    RequestView::findCheckbox(' Уценка'),
                    RequestView::findCheckbox(' Уценка 2'),
                ],
            ],
            "pageObjects_3" => [
                "canSee" => [
                    RequestView::findCheckbox(' Пакетная загрузка'),
                    RequestView::findCheckbox(' С размерной сеткой'),
                    RequestView::findCheckbox(' С тегами к товарам'),
                    RequestView::findCheckbox(' С фотосъемкой'),
                ],
                "cantSee" => [
                    RequestView::findCheckbox(' Добавление товаров в новую категорию'),
                    RequestView::findCheckbox(' Лоты'),
                    RequestView::findCheckbox(' На основе отзыва клиента на сайте'),
                    RequestView::findCheckbox(' Ручная загрузка'),
                    RequestView::findCheckbox(' Промо-описание'),
                    RequestView::findCheckbox(' С видео'),
                    RequestView::findCheckbox(' Уценка'),
                    RequestView::findCheckbox(' Уценка 2'),
                ],
            ],
            "pageObjects_4" => [
                "canSee" => [
                    RequestView::findCheckbox(' Ручная загрузка'),
                    RequestView::findCheckbox(' С тегами к товарам'),
                    RequestView::findCheckbox(' Промо-описание'),
                ],
                "cantSee" => [
                    RequestView::findCheckbox(' Добавление товаров в новую категорию'),
                    RequestView::findCheckbox(' Лоты'),
                    RequestView::findCheckbox(' На основе отзыва клиента на сайте'),
                    RequestView::findCheckbox(' Пакетная загрузка'),
                    RequestView::findCheckbox(' С видео'),
                    RequestView::findCheckbox(' С размерной сеткой'),
                    RequestView::findCheckbox(' С фотосъемкой'),
                    RequestView::findCheckbox(' Уценка'),
                    RequestView::findCheckbox(' Уценка 2'),
                ],
            ],
            "pageObjects_5" => [
                "canSee" => [
                    RequestView::findCheckbox(' Пакетная загрузка'),
                    RequestView::findCheckbox(' С тегами к товарам'),
                ],
                "cantSee" => [
                    RequestView::findCheckbox(' Добавление товаров в новую категорию'),
                    RequestView::findCheckbox(' Лоты'),
                    RequestView::findCheckbox(' На основе отзыва клиента на сайте'),
                    RequestView::findCheckbox(' Промо-описание'),
                    RequestView::findCheckbox(' Ручная загрузка'),
                    RequestView::findCheckbox(' С видео'),
                    RequestView::findCheckbox(' С размерной сеткой'),
                    RequestView::findCheckbox(' С фотосъемкой'),
                    RequestView::findCheckbox(' Уценка'),
                    RequestView::findCheckbox(' Уценка 2'),
                ],
            ],
        ]
    ],
];
