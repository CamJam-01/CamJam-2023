<?php

return [
    'production' => false,
    'baseUrl' => 'camjam.work',
    'title' => 'CamJam\'s Work',
    'description' => 'This here\'s my stuff I do',
    'social' => [
        'linkedin' => 'https://www.linkedin.com/in/cameron-jetton/',
    ],
    'menu' => [
        [
            'title' => 'About',
            'url' => '#about',
            'submenu' => false,
        ],
        [
            'title' => 'Projects',
            'url' => '#',
            'submenu' => true,
            'submenu_items' => [
                [
                    'title' => 'Starship Cruiser',
                    'url' => '#starship-cruiser',
                ],
                [
                    'title' => 'Example Project',
                    'url' => '#example-project',
                ],
                [
                    'title' => 'Borg Cube',
                    'url' => '#borg-cube',
                ],
            ]
        ],
        [
            'title' => 'Contact',
            'url' => '#contact',
            'submenu' => false,
        ],
    ],
    'projects' => [
        [
            'id' => 'starship-cruiser',
            'title' => 'Starship Cruiser',
            'url' => 'https://camjam-01.github.io/starship-cruiser/',
            'repo' => 'https://github.com/CamJam-01/starship-cruiser',
            'description' => 'A starship that can travel around the edge of your screen in less than 12 parsecs.',
            'img_src' => '/assets/images/placeholder-wide.png',
            'img_alt' => 'Placeholder Image'
        ],
        [
            'id' => 'example-project',
            'title' => 'Example Project',
            'url' => '#',
            'repo' => '',
            'description' => '',
            'img_src' => '/assets/images/placeholder-wide.png',
            'img_alt' => 'Placeholder Image'
        ],
        [
            'id' => 'borg-cube',
            'title' => 'Borg Cube',
            'url' => 'https://camjam-01.github.io/borg-cube/',
            'repo' => 'https://github.com/CamJam-01/borg-cube',
            'description' => '3D render of a Borg Cube from Star Trek using threejs.',
            'img_src' => '/assets/images/placeholder-wide.png',
            'img_alt' => 'Placeholder Image'
        ],
    ],
    'collections' => [        
    ]
];
