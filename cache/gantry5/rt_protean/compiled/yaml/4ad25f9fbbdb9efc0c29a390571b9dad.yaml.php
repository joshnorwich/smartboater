<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/home/vagrant/Code/smartboater/user/themes/rt_protean/blueprints/styles/showcase.yaml',
    'modified' => 1485894243,
    'data' => [
        'name' => 'Showcase Styles',
        'description' => 'Showcase styles for the Protean theme',
        'type' => 'section',
        'form' => [
            'fields' => [
                'background' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Background',
                    'default' => '#f9632d'
                ],
                'text-color' => [
                    'type' => 'input.colorpicker',
                    'label' => 'Text',
                    'default' => '#ffffff'
                ]
            ]
        ]
    ]
];