<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => array_replace_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php',
            [
                12 => [
                    'name' => 'Менеджер Контентович 2А',
                    'login' => 'bpm_contentManager_2a',
                    'email' => 'bpm_contentManager_2a@rozetka.com.ua',
                    'team' => 17,
                    'parent_id' => 4,
                ],
                13 => [
                    'name' => 'Менеджер Контентович 2Б',
                    'login' => 'bpm_contentManager_2b',
                    'email' => 'bpm_contentManager_2b@rozetka.com.ua',
                    'team' => 17,
                    'parent_id' => 4,
                ],
            ]
        ),
        'auth.auth_assignment' => array_merge_recursive(
            include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_assignment.php',
            [
                [
                    'item_name' => 'transferInWorkToCompleted',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToDeclined',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToOnHold',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToPartialComplete',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferOnHoldToCompleted',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferOnHoldToInWork',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferWaitWorkToDeclined',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferWaitWorkToInWork',
                    'user_id' => 12,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferWaitWorkToInWork',
                    'user_id' => 13,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToCompleted',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToDeclined',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToOnHold',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferInWorkToPartialComplete',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferWaitWorkToDeclined',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
                [
                    'item_name' => 'transferWaitWorkToInWork',
                    'user_id' => 14,
                    'created_at' => NULL,
                ],
            ]
        )
    ],
];