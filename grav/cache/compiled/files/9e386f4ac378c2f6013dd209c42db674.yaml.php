<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/plugins/flex-objects.yaml',
    'modified' => 1573482996,
    'data' => [
        'enabled' => true,
        'built_in_css' => true,
        'extra_admin_twig_path' => 'theme://admin/templates',
        'admin_list' => [
            'per_page' => 15,
            'order' => [
                'by' => 'updated_timestamp',
                'dir' => 'desc'
            ]
        ],
        'object' => [
            'cache' => [
                'index' => [
                    'enabled' => true,
                    'timeout' => 60
                ],
                'object' => [
                    'enabled' => false,
                    'timeout' => 60
                ],
                'render' => [
                    'enabled' => true,
                    'timeout' => 60
                ]
            ]
        ],
        'directories' => [
            0 => 'blueprints://flex-objects/grav-pages.yaml'
        ]
    ]
];
