<?php

use Codeception\Module\TestHelper;

return [
    'lisa_fixtures' => [
        'formula_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/formula_coefs.php',
        'goods_in_groups_coefs' => include TestHelper::getFixtureTempleteDefaultPath() . 'lisa_fixtures/goods_in_groups_coefs.php',
    ],
];