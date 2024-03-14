<?php

return [
    [ // Regular Outline...
        'source' => __DIR__.'/../node_modules/@tabler/icons/icons/outline',
        'destination' => __DIR__.'/../resources/svg',
        'safe' => true,
    ],
    [ // Regular filled...
        'source' => __DIR__.'/../node_modules/@tabler/icons/icons/filled',
        'destination' => __DIR__.'/../resources/svg',
        'output-suffix' => '-f',
        'safe' => true,
    ],
];

