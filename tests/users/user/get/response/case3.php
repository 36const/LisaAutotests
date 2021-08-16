<?php

use lisa\RequestsTester;

return [
    'data' => [
        'models' => [
            0 => [
                'id' => 11,
                'name' => 'Менеджер Контентович 1А',
                'login' => 'bpm_contentManager_1a',
                'email' => 'bpm_contentManager_1a@rozetka.com.ua',
                'team' => 1,
                'teamName' => 'Маркетплейс 1',
                'parent_id' => 6,
                'position' => 'contentManager',
                'positionName' => 'Контент-менеджер',
                'status' => 'Активный',
                'create_ts' => '2020-05-19 13:36:23',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:23',
                'drfo' => '\'000000011',
                'parent' => '6.Супервайзер Начальникович 1',
            ],
            1 => [
                'id' => 12,
                'name' => 'Менеджер Контентович 1Б',
                'login' => 'bpm_contentManager_1b',
                'email' => 'bpm_contentManager_1b@rozetka.com.ua',
                'team' => 1,
                'teamName' => 'Маркетплейс 1',
                'parent_id' => 6,
                'position' => 'contentManager',
                'positionName' => 'Контент-менеджер',
                'status' => 'Активный',
                'create_ts' => '2020-05-19 13:36:23',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:23',
                'drfo' => '\'000000012',
                'parent' => '6.Супервайзер Начальникович 1',
            ],
            2 => [
                'id' => 6,
                'name' => 'Супервайзер Начальникович 1',
                'login' => 'bpm_supervisor_1',
                'email' => 'bpm_supervisor_1@rozetka.com.ua',
                'team' => 1,
                'teamName' => 'Маркетплейс 1',
                'parent_id' => 5,
                'position' => 'supervisor',
                'positionName' => 'Супервайзер',
                'status' => 'Активный',
                'create_ts' => '2020-05-19 13:36:22',
                'created_by' => 1,
                'change_date' => '2020-05-19 16:36:22',
                'drfo' => '\'000000006',
                'parent' => '5.Супервайзер Руководько 1',
            ],
        ],
        '_links' => [
            'self' => [
                'href' => 'http://lisa.api/user/list?filter%5Blogin%5D=_1&filter%5Bteam%5D=1&sort=position&page=1&per-page=50',
            ],
            'first' => [
                'href' => 'http://lisa.api/user/list?filter%5Blogin%5D=_1&filter%5Bteam%5D=1&sort=position&page=1&per-page=50',
            ],
            'last' => [
                'href' => 'http://lisa.api/user/list?filter%5Blogin%5D=_1&filter%5Bteam%5D=1&sort=position&page=1&per-page=50',
            ],
        ],
        '_meta' => [
            'totalCount' => 3,
            'pageCount' => 1,
            'currentPage' => 1,
            'perPage' => 50,
        ],
    ],
    'filters' => [
        'login' => '_1',
        'team' => '1',
    ],
    'initialValues' => [
        'activeTeams' => RequestsTester::ACTIVETEAMS,
        'positions' => RequestsTester::POSITIONS,
        'teams' => RequestsTester::TEAMS,
        'userNames' => RequestsTester::USER_NAMES,
    ]
];