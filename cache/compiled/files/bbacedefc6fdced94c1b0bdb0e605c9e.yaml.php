<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/plugins/codepen-embed/blueprints.yaml',
    'modified' => 1574958130,
    'data' => [
        'name' => 'Codepen Embed',
        'version' => '0.1.0',
        'description' => 'easily embed codepens from markdown',
        'icon' => 'plug',
        'author' => [
            'name' => 'Andrew Scofield',
            'email' => 'andrew@andrewscofield.com'
        ],
        'homepage' => 'https://github.com/andrewscofield/grav-plugin-codepen-embed',
        'demo' => 'http://andrewscofield.com/',
        'keywords' => 'grav, plugin, etc',
        'bugs' => 'https://github.com/andrewscofield/grav-plugin-codepen-embed/issues',
        'docs' => 'https://github.com/andrewscofield/grav-plugin-codepen-embed/blob/develop/README.md',
        'license' => 'MIT',
        'dependencies' => [
            0 => 'shortcode-core'
        ],
        'form' => [
            'validation' => 'strict',
            'fields' => [
                'enabled' => [
                    'type' => 'toggle',
                    'label' => 'Plugin status',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'text_var' => [
                    'type' => 'text',
                    'label' => 'Text Variable',
                    'help' => 'Text to add to the top of a page'
                ]
            ]
        ]
    ]
];
