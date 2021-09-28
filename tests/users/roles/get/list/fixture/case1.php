<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'auth.auth_item_child' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/auth.auth_item_child.php',
    ],
//    'gomer_fixtures' => [
//        'users' =>
//            (include TestHelper::getFixtureTempleteDefaultPath() . 'gomer_fixtures/users.php'),
//        
//    ]
];