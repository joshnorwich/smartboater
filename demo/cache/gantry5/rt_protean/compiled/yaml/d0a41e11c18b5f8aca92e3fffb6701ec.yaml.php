<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/layouts_-_two_sidebars/layout.yaml',
    'modified' => 1483473130,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1457353897
        ],
        'layout' => [
            'top' => [
                
            ],
            'navigation' => [
                
            ],
            'header' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-7561'
                ]
            ],
            'above' => [
                
            ],
            'showcase' => [
                
            ],
            'utility' => [
                
            ],
            'feature' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 27' => [
                            0 => [
                                0 => 'custom-7406'
                            ],
                            1 => [
                                0 => 'custom-6562'
                            ]
                        ]
                    ],
                    1 => [
                        'mainbar 46' => [
                            0 => [
                                0 => 'custom-8235'
                            ]
                        ]
                    ],
                    2 => [
                        'aside 27' => [
                            0 => [
                                0 => 'custom-9224'
                            ]
                        ]
                    ]
                ]
            ],
            'expanded' => [
                
            ],
            'extension' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'custom-8670'
                ]
            ],
            'footer' => [
                
            ],
            'copyright' => [
                
            ],
            'offcanvas' => [
                
            ]
        ],
        'structure' => [
            'top' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
                    ]
                ]
            ],
            'navigation' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'header' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'utility' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'feature' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'block' => [
                    'class' => 'equal-height'
                ]
            ],
            'container-main' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => '',
                    'extra' => [
                        
                    ]
                ]
            ],
            'expanded' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'extension' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'bottom' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'footer' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'copyright' => [
                'type' => 'section',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ],
            'offcanvas' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'children'
                    ]
                ]
            ]
        ],
        'content' => [
            'simplecontent-7561' => [
                'title' => 'Two Sidebar Example',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Two Sidebars Example',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Two Sidebars Example'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'custom-7406' => [
                'title' => 'Left Sidebar',
                'attributes' => [
                    'html' => '<h3 class="g-title">Left Sidebar</h3>
<p class="nomarginbottom"> A left column layout example. The sidebar is independent from the Mainbody so can have multiple rows and columns, separate from the Mainbody area.</p>'
                ],
                'block' => [
                    'variations' => 'box1 box2'
                ]
            ],
            'custom-6562' => [
                'title' => 'Custom HTML',
                'attributes' => [
                    'html' => '<p>Mauris lobortis. Aliquam lacinia purus. <strong>Pellentesque magna</strong>. Mauris euismod metus nec. <a href="#">Morbi convallis luctus tortor</a>.</p>'
                ],
                'block' => [
                    'class' => 'nomargintop',
                    'variations' => 'box1'
                ]
            ],
            'custom-8235' => [
                'title' => 'H2 Heading',
                'attributes' => [
                    'html' => '<h2>H2 Heading</h2>
<p>Nullam eget neque. Nullam <a href="#">imperdiet venenatis</a> ligula. Integer a leo. Nunc consectetur. Maecenas sem. Proin vulputate, massa vel volutpat laoreet, purus erat pretium ligula, eget varius arcu nibh sed libero.</p>

<h3>H3 Heading</h3>
<p>In erat. Pellentesque erat. <strong>Mauris vehicula vestibulum justo.</strong> Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nulla pulvinar est. <strong>Integer urna</strong>. Pellentesque pulvinar dui a magna. Nulla facilisi. <a href="#">Sed ac arcu</a>.</p>'
                ],
                'block' => [
                    'class' => 'nomargintop nopaddingtop'
                ]
            ],
            'custom-9224' => [
                'title' => 'Right Sidebar',
                'attributes' => [
                    'html' => '<h3 class="g-title">Right Sidebar</h3>
<p>Gantry 5 benefits from a flexible and intuitive, drag &amp; drop layout manager. You can add as many rows and blocks to each section as you desire, and configure their distance to intervals of 1%.</p>

<p>Each block has individual controls, such as an autocomplete select box for box variations, as well as individual CSS fields.</p>'
                ],
                'block' => [
                    'variations' => 'box1'
                ]
            ],
            'custom-8670' => [
                'title' => 'H5 Heading',
                'attributes' => [
                    'html' => '<h5>H5 Heading</h5>

<p>Vestibulum mollis, est id rhoncus volutpat, dolor velit tincidunt neque, vitae pellentesque ante sem eu nisl. <em>Donec facilisis</em>, magna eget elementum pellentesque.</p>'
                ]
            ]
        ]
    ]
];
