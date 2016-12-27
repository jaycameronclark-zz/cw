<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/var/www/cw.dev/system/config/site.yaml',
    'modified' => 1482859688,
    'data' => [
        'title' => 'Code Wilderness',
        'author' => [
            'name' => 'Jay Clark',
            'email' => 'jaycameronclark@gmail.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'CodeWilderness'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'redirects' => NULL,
        'routes' => NULL,
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
