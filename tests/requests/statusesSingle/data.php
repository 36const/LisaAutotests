<?php

use lisa\RequestsTester;

$mockDataStatusesSingle = [
    RequestsTester::interiorMockArray('request-create', 83),
    RequestsTester::interiorMockArray('request-revision', 83),
    RequestsTester::interiorMockArray('request-in-progress', 83),
    RequestsTester::interiorMockArray('request-completed', 83),
    RequestsTester::interiorMockArray('request-canceled', 83),
    RequestsTester::interiorMockArray('request-update', 83),
];

$dirs = [
    '/1_new',
    '/2_in-check',
    '/3_require-changes',
    '/5_wait-work',
    '/6_in-work',
    '/7_on-hold',
    '/8_partial-complete',
    '/9_completed',
];

$data = [];

foreach ($dirs as $dir) {
    foreach ((include __DIR__ . $dir . '/data.php') as $name => $case) {
        $data[$name] = $case;
    }
}

return $data;