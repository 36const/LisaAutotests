<?php

use lisa\Page\Functional\RequestView;

return [
    'case1' => [
        'setting' => [
            'description' => 'Включение отображения блоков заявки по вкладкам',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "pageObjects" => [
                "canSee" => [
                    [
                        ["selector" => RequestView::$tabsCheckbox . '[@checked]'],
                    ],
                ]
            ]
        ]
    ],
];
