<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/site.yaml',
    'modified' => 1574804608,
    'data' => [
        'title' => 'SICT Snippets',
        'default_lang' => 'en',
        'author' => [
            'name' => 'Taner Temel',
            'email' => 'taner.temel@sict.bolton.gov.uk'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'author'
        ],
        'metadata' => [
            'description' => 'SICT Snippets'
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
