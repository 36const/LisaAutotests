<?php

use lisa\Page\Requests\RequestCreate;

return [
    'case1' => [
        'setting' => [
            'description' => 'Всплывающее окно создания заявки и переход на страницу создания',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjects' => [
                "canSee" => [
                    RequestCreate::$subject,
                    RequestCreate::$description,
                    RequestCreate::$seller,
                    RequestCreate::$category,
                    RequestCreate::$amount,
                    RequestCreate::$plannedFinishDate,
                    RequestCreate::$priority,
                    RequestCreate::$allCheckboxes,
                ],
                "cantSee" => [],
            ],
        ]
    ],
];
