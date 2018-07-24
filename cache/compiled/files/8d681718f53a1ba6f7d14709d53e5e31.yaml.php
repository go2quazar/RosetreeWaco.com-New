<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/users/serverpilot/apps/gravblogrosetree/public/user/themes/haywire/blueprints.yaml',
    'modified' => 1530641342,
    'data' => [
        'name' => 'Haywire',
        'version' => '0.4.3',
        'description' => 'Starter theme for Grav CMS using modern tools and frameworks such as Laravel Mix, Vuejs, Bulma.',
        'icon' => 'empire',
        'author' => [
            'name' => 'Robbin Johansson',
            'email' => 'robbinfellow@gmail.com',
            'url' => 'https://github.com/robbinfellow/'
        ],
        'homepage' => 'https://github.com/robbinfellow/haywire-grav#readme',
        'keywords' => 'haywire, grav, boilerplate, starter-theme, vuejs, laravel-mix, bulma',
        'bugs' => 'https://github.com/robbinfellow/haywire-grav/issues',
        'docs' => 'https://github.com/robbinfellow/haywire-grav#readme',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
