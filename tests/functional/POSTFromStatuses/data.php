<?php

$dirs = [
    '/1_waiting-for-check',
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