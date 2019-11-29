<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/plugins/git-sync.yaml',
    'modified' => 1575044975,
    'data' => [
        'enabled' => true,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => false,
            'cron_at' => '0 12,23 * * *'
        ],
        'repository' => 'https://github.com/t4nertemel/grav-snippets.git',
        'user' => 'tanertemel@live.co.uk',
        'password' => 'gitsync-def502004a0b1d478333615d07da44cbb7a102fc13d8185eb38284e86ef2b85393559fe779154e25d2ab68fdd2f1f00d3f19e5032b604f05b61040fbd03498ba5f48dfa3983474536ea5e78bf151f5d3e5c1e4420aa6fa143f21b784024537',
        'webhook' => '/_git-sync-a0aa3858d204',
        'webhook_enabled' => '1',
        'webhook_secret' => 'c836c81b5a428331d62a7d4ded9a1292dc8c47e25f328c71',
        'branch' => 'master',
        'remote' => [
            'name' => 'origin',
            'branch' => 'master'
        ],
        'git' => [
            'author' => 'gituser',
            'message' => '(Grav GitSync) Automatic Commit',
            'name' => 'GitSync',
            'email' => 'git-sync@trilby.media',
            'bin' => 'git'
        ],
        'logging' => false
    ]
];
