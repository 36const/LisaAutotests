<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' =>  include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
        'auth.user_changing_history' => [],
    ],
    'splitter_fixtures' => [
        'users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'splitter_fixtures/users.php',
            [
                4 => [
                    'username' => 'bpm_contentManager_1a',
                    'email' => 'bpm_contentManager_1a@rozetka.ua',

                    'updated_at' => strtotime(date('Y-m-d H:i:s', strtotime('-58 minutes'))),
                ],
                5 => [
                    'username' => 'bpm_contentManager_1b',
                    'email' => 'bpm_contentManager_1b@rozetka.ua',
                    'updated_at' => strtotime(date('Y-m-d H:i:s', strtotime('-58 minutes'))),
                ],
                10 => [
                    'username' => 'bpm_productManager_1',
                    'email' => 'bpm_productManager_1@rozetka.ua',
                    'updated_at' => strtotime(date('Y-m-d H:i:s', strtotime('-58 minutes'))),
                ],
                12 => [
                    'id' => 13,
                    'username' => 'bpm_seo_1',
                    'email' => 'bpm_seo_1@rozetka.ua',
                    'updated_at' => strtotime(date('Y-m-d H:i:s', strtotime('-61 minutes'))),
                ],
                13 => [
                    'id' => 14,
                    'username' => 'bpm_seo_2',
                    'email' => 'bpm_seo_2@rozetka.ua',
                    'updated_at' => strtotime(date('Y-m-d H:i:s', strtotime('-61 minutes'))),
                ],
            ]
        ),
    ],
];