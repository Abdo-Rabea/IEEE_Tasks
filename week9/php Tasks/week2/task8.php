<?php

echo '<pre>';
print_r(
    [
        'FrontEnd' => [
            'html',
            'css',
            'js' => [
                'Vuejs' => [2 => 'v2', 'v3'], 'Reactjs', 'Svelte'
            ]
        ],
        'BackEnd' => [
            'PHP', 'MySQL', 'Security'
        ],
        'Git',
        'Github',
        'Testing' => [
            'Unit Testing', 'End To End', 'Integration'
        ]
    ]
);
echo '</pre>';
