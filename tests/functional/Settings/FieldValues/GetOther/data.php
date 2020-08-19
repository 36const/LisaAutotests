<?php

return [
    'case1' => [
        'setting' => [
            'description' => 'Заблокированное значение на странице заявки',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            "url" => '/bpm/request/view?id=1&forCrossCheck=0',
            "pageObjects" => [
                "canSee" => [
                    [
                        [
                            "selector" => "//select[@name='RequestField[21]']//option[@value='1' and @selected and @disabled]",
                            "value" => "Предоставлены продактом"
                        ],
                    ],
                ],
                "cantSee" => [
                ]
            ]
        ]
    ],

];
