<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/site.yaml',
    'modified' => 1574536235,
    'data' => [
        'title' => 'SICT Snippets',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Taner Temel',
            'email' => 'tanertemel@live.co.uk'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'Snippets with Git Sync'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
