<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/user/themes/rt_protean/particles/simpleweather.yaml',
    'modified' => 1484197587,
    'data' => [
        'name' => 'Simple Weather',
        'description' => 'Display weather plugin.',
        'type' => 'particle',
        'icon' => 'fa-sun-o',
        'form' => [
            'fields' => [
                'enabled' => [
                    'type' => 'input.checkbox',
                    'label' => 'Enabled',
                    'description' => 'Globally enable particle.',
                    'default' => true
                ],
                'class' => [
                    'type' => 'input.selectize',
                    'label' => 'CSS Classes',
                    'description' => 'CSS class name for the particle.'
                ],
                'title' => [
                    'type' => 'input.text',
                    'label' => 'Side Text',
                    'description' => 'Customize the side text.',
                    'placeholder' => 'Enter side text'
                ],
                'units' => [
                    'type' => 'select.select',
                    'label' => 'Units',
                    'description' => 'Choose what unit in which temp is displayed.',
                    'default' => 'c',
                    'options' => [
                        'c' => 'Celsius',
                        'f' => 'Fahrenheit'
                    ]
                ],
                'location' => [
                    'type' => 'input.text',
                    'label' => 'Location',
                    'description' => 'Provide location for weather particle.',
                    'default' => 'Austin, TX'
                ],
                'show_location' => [
                    'type' => 'select.select',
                    'label' => 'Show Location & Region',
                    'description' => 'Enable or disable displaying of location and region.',
                    'default' => 'disabled',
                    'options' => [
                        'enabled' => 'Enable',
                        'disabled' => 'Disable'
                    ]
                ],
                '_custom' => [
                    'type' => 'separator.note',
                    'class' => 'settings-param',
                    'content' => '<h4>Custom Params</h4>'
                ],
                '_info' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-info',
                    'content' => 'All available data params are listed on: <a href="http://simpleweatherjs.com/" target="_blank">http://simpleweatherjs.com/</a>. Just paste preferred param in field below.'
                ],
                'custom_data' => [
                    'type' => 'input.selectize',
                    'label' => 'Custom Data',
                    'description' => 'Enable or disable custom data in your weather.'
                ]
            ]
        ]
    ]
];
