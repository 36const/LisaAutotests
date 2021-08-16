<?php

$dirs = [
    '/1_new',
    '/2_in-check',
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