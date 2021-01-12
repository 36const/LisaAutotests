<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Всплывающее окно изменения типа заявки и переход на страницу изменения',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                "canSee" => [
                    RequestCreate::$seller,
                    RequestCreate::$category,
                    RequestCreate::$allCheckboxes,
                    RequestCreate::findCheckbox(' Автомодерация'),
                    RequestCreate::findCheckbox(' БУ, REF'),
                    RequestCreate::findCheckbox(' Жалоба на товар продавца маркета'),
                    RequestCreate::findCheckbox(' С видео') . '[@checked]',
                    RequestCreate::findCheckbox(' С палитрой'),
                    RequestCreate::findCheckbox(' С размерной сеткой') . '[@checked]',
                    RequestCreate::findCheckbox(' Стоп-бренды'),
                ],
                "cantSee" => [
                    RequestCreate::$subject,
                    RequestCreate::$description,
                    RequestCreate::$amount,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                ],
            ],
        ]
    ],
];
