<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/user/themes/rt_protean/blueprints/styles/feature.yaml',
    'modified' => 1484197587,
    'data' => [
        'name' => 'Feature Styles',
        'description' => 'Feature styles for the Protean theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#ffffff'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#151515'
                ]
            ]
        ]
    ]
];
