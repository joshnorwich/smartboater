<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/particles/contenttabs.yaml',
    'modified' => 1483473108,
    'data' => [
        'name' => 'Content Tabs',
        'description' => 'Display Content Tabs.',
        'type' => 'particle',
        'icon' => 'fa-table',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable icon menu particles.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Title',
                    'description' => 'Customize the title text.',
                    'placeholder' => 'Enter title'
                ],
                'animation' => [
                    'type' => 'select.select',
                    'label' => 'Animation Type',
                    'description' => 'Set the animation type.',
                    'default' => 'slide',
                    'options' => [
                        'left' => 'Slide Left',
                        'right' => 'Slide Right',
                        'up' => 'Slide Up',
                        'down' => 'Slide Down',
                        'fade' => 'Fade',
                        'toggle' => 'Toggle'
                    ]
                ],
                'duration' => [
                    'type' => 'input.text',
                    'label' => 'Duration',
                    'description' => 'Customize the animation duration.',
                    'placeholder' => 500
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Tabs',
                    'description' => 'Create each ContentTabs item to display.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.tabname' => [
                            'type' => 'input.text',
                            'label' => 'Tab Name',
                            'description' => 'Enter the Tab name (Each tab must have unique name)'
                        ],
                        '.blocks' => [
                            'type' => 'collection.list',
                            'array' => true,
                            'label' => 'Blocks',
                            'description' => 'Create blocks inside tabs.',
                            'value' => 'name',
                            'ajax' => true,
                            'fields' => [
                                '.title' => [
                                    'type' => 'input.text',
                                    'label' => 'Title',
                                    'description' => 'Enter the title'
                                ],
                                '.description' => [
                                    'type' => 'textarea.textarea',
                                    'label' => 'Description',
                                    'description' => 'Customize the description.',
                                    'placeholder' => 'Enter short description'
                                ],
                                '.accent' => [
                                    'type' => 'select.selectize',
                                    'label' => 'Accent',
                                    'description' => 'Specify accent color for blocks',
                                    'placeholder' => 'Select...',
                                    'default' => 'default',
                                    'options' => [
                                        'default' => 'Default',
                                        'accent1' => 'Accent Color 1',
                                        'accent2' => 'Accent Color 2'
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];
