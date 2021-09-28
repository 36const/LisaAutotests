<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.users' => array_slice(include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.users.php', 0, 12),
        'auth.user_changing_history' => [],
    ],
//    'gomer_fixtures' => [
//        'users' => (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
//    ]
];