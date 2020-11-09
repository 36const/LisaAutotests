<?php

use lisa\Page\Functional\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Взаимоисключающие чек-боксы при создании заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects_1" => [
                "canSee" => [],
                "cantSee" => [
                    RequestCreate::findCheckbox(' Автомодерация'),
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' По заявке с MobileCourier'),
                    RequestCreate::findCheckbox(' С видео'),
                    RequestCreate::findCheckbox(' С палитрой'),
                    RequestCreate::findCheckbox(' С размерной сеткой'),
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
            ],
            "pageObjects_2" => [
                "canSee" => [
                    RequestCreate::findCheckbox(' Автомодерация'),
                ],
                "cantSee" => [
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' По заявке с MobileCourier'),
                    RequestCreate::findCheckbox(' С видео'),
                    RequestCreate::findCheckbox(' С палитрой'),
                    RequestCreate::findCheckbox(' С размерной сеткой'),
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
            ],
            "pageObjects_3" => [
                "canSee" => [
                    RequestCreate::findCheckbox(' Автомодерация'),
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' С палитрой'),
                ],
                "cantSee" => [
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' По заявке с MobileCourier'),
                    RequestCreate::findCheckbox(' С видео'),
                    RequestCreate::findCheckbox(' С размерной сеткой'),
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
            ],
            "pageObjects_4" => [
                "canSee" => [
                    RequestCreate::findCheckbox(' С видео'),
                    RequestCreate::findCheckbox(' С палитрой'),
                ],
                "cantSee" => [
                    RequestCreate::findCheckbox(' Автомодерация'),
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' По заявке с MobileCourier'),
                    RequestCreate::findCheckbox(' С размерной сеткой'),
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
            ],
            "pageObjects_5" => [
                "canSee" => [
                    RequestCreate::findCheckbox(' С палитрой'),
                ],
                "cantSee" => [
                    RequestCreate::findCheckbox(' Автомодерация'),
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' По заявке с MobileCourier'),
                    RequestCreate::findCheckbox(' С видео'),
                    RequestCreate::findCheckbox(' С размерной сеткой'),
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
            ],
        ]
    ],
];
