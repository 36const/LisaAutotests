<?php

use lisa\Page\Functional\RequestView;

return [
    'case1' => [
        'setting' => [
            'description' => 'Доступные в заявке для выбора супервайзеры и менеджеры',
        ],
        'fixture_data' => include __DIR__ . '/fixture/case1.php',
        'provider_data' => [
            'pageObjectsCM' => [
                ' Константин Куцан',
                ' Менеджер Контентович 1А',
                ' Менеджер Контентович 1Б',
                ' Супервайзер Начальникович 1',
            ],
            'pageObjectsSV' => [
                'Супервайзер Групповушкин 13',
                'Супервайзер Групповушкин 16',
                'Супервайзер Категоркин 15',
                'Супервайзер Категоркин 18',
                'Супервайзер Начальникович 1',
                'Супервайзер Начальникович 10',
                'Супервайзер Начальникович 11',
                'Супервайзер Начальникович 12',
                'Супервайзер Начальникович 2',
                'Супервайзер Начальникович 3',
                'Супервайзер Начальникович 4',
                'Супервайзер Начальникович 5',
                'Супервайзер Начальникович 6',
                'Супервайзер Начальникович 7',
                'Супервайзер Начальникович 8',
                'Супервайзер Начальникович 9',
                'Супервайзер Проектенко 14',
                'Супервайзер Проектенко 17',
                'Супервайзер Руководько 1',
            ]
        ]
    ],
];
