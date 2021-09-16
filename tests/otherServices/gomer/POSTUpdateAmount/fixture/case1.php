<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'requests' => [
            [
                'id' => 1,
                'author_id' => 4,
                'direction' => 2,
                'amount_to_work' => 10,
                'subject' => 'Euromart. Источник №1',
                'description' => 'http://splitter.staging.com.ua/gomer/items/on-moderation/source/1',
                'category_id' => null,
                'seller_id' => 83,
                'team_direction' => 2,
                'payload' => '{"side_user_id": 999, "side_user_name": "!@#$%^&*()_ 1234567890абвгдеёжзийклмнопрстуфхцчшщъыьэюяєґїіАБВГДЕЁЖЗИЙКЛМНОПРСТУФХЦЧШЩЪЫЬЭЮЯЄҐЇІ"}',
            ]
        ],
    ],
];