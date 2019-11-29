<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/home/tanertemel/web/t4.bolton365.net/public_html/user/config/plugins/git-sync.yaml',
    'modified' => 1574761816,
    'data' => [
        'enabled' => false,
        'folders' => [
            0 => 'pages'
        ],
        'sync' => [
            'on_save' => true,
            'on_delete' => true,
            'on_media' => true,
            'cron_enable' => true,
            'cron_at' => '0 12,23 * * *'
        ],
        'repository' => 'https://github.com/t4nertemel/grav-snippets.git',
        'user' => 'tanertemel@live.co.uk',
        'webhook' => '/_git-sync-85e499b78799',
        'webhook_enabled' => '1',
        'webhook_secret' => '210339144f1fcfa596e6219b45d45a3ab8493df7cf882ffa',
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
        'logging' => false,
        'password' => 'gitsync-def5020020baf8bffe836cadc7c380feb92efc71284a9d4160c7213b20bf013e3ffa83a5eb459a6f301b93bd11694bf7795470f77d1fdad0cdafb1ec52b3b321b4496d6e41e917ad4971747f5931847026112612eb8b25c4252798e929a61a'
    ]
];
