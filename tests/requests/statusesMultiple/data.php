<?php

use lisa\RequestsTester;

$mockData = [
    RequestsTester::interiorMockArray('request-create', 0),
    RequestsTester::interiorMockArray('request-revision', 0),
    RequestsTester::interiorMockArray('request-in-progress', 0),
    RequestsTester::interiorMockArray('request-completed', 0),
    RequestsTester::interiorMockArray('request-canceled', 0),
    RequestsTester::interiorMockArray('request-update', 0),
];

$dirs = [
    '/1_new',
    '/2_in-check',
    '/3_require-changes',
    '/5_wait-work',
    '/6_in-work',
];

$data = [];

foreach ($dirs as $dir) {
    foreach ((include __DIR__ . $dir . '/data.php') as $name => $case) {
        $data[$name] = $case;
    }
}

return $data;