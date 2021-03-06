<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/themes/rt_protean/particles/flipster.yaml',
    'modified' => 1483473108,
    'data' => [
        'name' => 'Flipster Cover Flow',
        'description' => 'Display content in the familiar \'cover flow\' effect.',
        'type' => 'particle',
        'icon' => 'fa-picture-o',
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
                'start' => [
                    'type' => 'input.text',
                    'label' => 'Start',
                    'description' => 'Zero based index of the starting item, or use \'center\' to start in the middle.',
                    'default' => 'center'
                ],
                'fadein' => [
                    'type' => 'input.number',
                    'label' => 'FadeIn',
                    'description' => 'Speed of the fade in animation after items have been setup (milliseconds).',
                    'default' => 400
                ],
                'loop' => [
                    'type' => 'select.select',
                    'label' => 'Loop',
                    'description' => 'Loop around when the start or end is reached',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'autoplay' => [
                    'type' => 'input.number',
                    'label' => 'Autoplay',
                    'description' => 'If a positive number, Flipster will automatically advance to next item after that number of milliseconds. Use 0 for disabled.',
                    'default' => false
                ],
                'pauseonhover' => [
                    'type' => 'select.select',
                    'label' => 'Pause On Hover',
                    'description' => 'If true, autoplay advancement will pause when Flipster is hovered.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'style' => [
                    'type' => 'select.select',
                    'label' => 'Style',
                    'description' => 'Switch between display styles.',
                    'default' => 'coverflow',
                    'options' => [
                        'coverflow' => 'Cover Flow',
                        'carousel' => 'Carousel',
                        'flat' => 'Flat',
                        'wheel' => 'Wheel'
                    ]
                ],
                'spacing' => [
                    'type' => 'input.number',
                    'label' => 'Spacing',
                    'description' => 'Space between items relative to each item\'s width. 0 for no spacing, negative values to overlap.',
                    'default' => -0.59999999999999998
                ],
                'click' => [
                    'type' => 'select.select',
                    'label' => 'Click',
                    'description' => 'Clicking an item switches to that item.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'keyboard' => [
                    'type' => 'select.select',
                    'label' => 'Keyboard',
                    'description' => 'Enable left/right arrow navigation.',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'scrollwheel' => [
                    'type' => 'select.select',
                    'label' => 'Scroll Wheel',
                    'description' => 'Enable mousewheel/trackpad navigation; up/left = previous, down/right = next',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'touch' => [
                    'type' => 'select.select',
                    'label' => 'Touch',
                    'description' => 'Enable swipe navigation for touch devices',
                    'default' => 'enabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                'items' => [
                    'type' => 'collection.list',
                    'array' => true,
                    'label' => 'Cards',
                    'description' => 'Create cover flow cards.',
                    'value' => 'name',
                    'ajax' => true,
                    'fields' => [
                        '.width' => [
                            'type' => 'input.text',
                            'label' => 'Custom Width',
                            'description' => 'Specify custom width instead auto adjusting.'
                        ],
                        '.accent' => [
                            'type' => 'select.selectize',
                            'label' => 'Accent',
                            'description' => 'Specify accent color for blocks',
                            'placeholder' => 'Select...',
                            'default' => 'white',
                            'options' => [
                                'white' => 'White',
                                'accent1' => 'Accent Color 1',
                                'accent2' => 'Accent Color 2'
                            ]
                        ],
                        '.title' => [
                            'type' => 'input.text',
                            'label' => 'Title',
                            'description' => 'Enter the card title.'
                        ],
                        '.desc' => [
                            'type' => 'textarea.textarea',
                            'label' => 'Description',
                            'description' => 'Customize the description.',
                            'placeholder' => 'Enter short description'
                        ],
                        '.image' => [
                            'type' => 'input.imagepicker',
                            'label' => 'Image',
                            'description' => 'Select image instead of text.'
                        ],
                        '.buttontext' => [
                            'type' => 'input.text',
                            'label' => 'Button Label',
                            'description' => 'Specify the button label.'
                        ],
                        '.buttonlink' => [
                            'type' => 'input.text',
                            'label' => 'Button Link',
                            'description' => 'Specify the button link.'
                        ],
                        '.buttontarget' => [
                            'type' => 'select.selectize',
                            'label' => 'Target',
                            'description' => 'Target browser window when item is clicked.',
                            'placeholder' => 'Select...',
                            'default' => '_self',
                            'options' => [
                                '_self' => 'Self',
                                '_blank' => 'New Window'
                            ]
                        ],
                        '.buttonclass' => [
                            'type' => 'input.selectize',
                            'label' => 'Button Classes',
                            'description' => 'CSS class names for the button.'
                        ]
                    ]
                ]
            ]
        ]
    ]
];
