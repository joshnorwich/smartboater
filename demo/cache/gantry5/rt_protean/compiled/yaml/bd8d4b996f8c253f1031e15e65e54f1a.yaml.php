<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => '/var/www/vhosts/smartboater.ca/httpdocs/grav-skeleton-protean-site/user/data/gantry5/themes/rt_protean/config/features_-_particles/layout.yaml',
    'modified' => 1483473130,
    'data' => [
        'version' => 2,
        'preset' => [
            'image' => 'gantry-admin://images/layouts/default.png',
            'name' => 'default',
            'timestamp' => 1474988321
        ],
        'layout' => [
            'top' => [
                
            ],
            'navigation' => [
                
            ],
            '/slideshow/' => [
                0 => [
                    0 => 'simplecontent-5718'
                ]
            ],
            '/header/' => [
                
            ],
            '/above/' => [
                0 => [
                    0 => 'simplecontent-7513'
                ],
                1 => [
                    0 => 'owlcarousel-4853'
                ]
            ],
            '/showcase/' => [
                
            ],
            '/utility/' => [
                
            ],
            '/feature/' => [
                
            ],
            '/container-main/' => [
                0 => [
                    0 => [
                        'sidebar 20' => [
                            
                        ]
                    ],
                    1 => [
                        'mainbar 60' => [
                            
                        ]
                    ],
                    2 => [
                        'aside 20' => [
                            
                        ]
                    ]
                ]
            ],
            '/expanded/' => [
                0 => [
                    0 => 'infolist-2967'
                ],
                1 => [
                    0 => 'flipster-2995'
                ]
            ],
            '/extension/' => [
                
            ],
            '/bottom/' => [
                0 => [
                    0 => 'simplecontent-8215'
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
                        0 => 'attributes',
                        1 => 'children'
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
            'slideshow' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'header' => [
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'above' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'showcase' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'utility' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'feature' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'sidebar' => [
                'type' => 'section',
                'subtype' => 'aside',
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'attributes',
                        1 => 'block',
                        2 => 'children'
                    ]
                ]
            ],
            'mainbar' => [
                'type' => 'section',
                'subtype' => 'main',
                'title' => 'Main',
                'attributes' => [
                    'class' => ''
                ]
            ],
            'aside' => [
                'inherit' => [
                    'outline' => 'default',
                    'include' => [
                        0 => 'children',
                        1 => 'block',
                        2 => 'attributes'
                    ]
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
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
                ]
            ],
            'extension' => [
                'type' => 'section',
                'attributes' => [
                    'boxed' => '3',
                    'class' => ''
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
                    'outline' => 'home',
                    'include' => [
                        0 => 'children',
                        1 => 'attributes'
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
            'simplecontent-5718' => [
                'title' => 'Header - Particles',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Particles',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Particles'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'title-white'
                ]
            ],
            'simplecontent-7513' => [
                'title' => 'Particles Header OwlCarousel Title',
                'attributes' => [
                    'class' => '',
                    'title' => 'Slider Carousel Particle',
                    'items' => [
                        
                    ]
                ],
                'block' => [
                    'variations' => 'title6 title-center'
                ]
            ],
            'owlcarousel-4853' => [
                'title' => 'Particles Slideshow OwlCarousel',
                'attributes' => [
                    'class' => '',
                    'source' => 'particle',
                    'presets' => 'disabled',
                    'displayitems' => '1',
                    'title' => '',
                    'description' => '',
                    'layout' => 'standard',
                    'width' => 'g-owlcarousel-fullwidth',
                    'animateIn' => 'fadeIn',
                    'animateOut' => 'fadeOut',
                    'nav' => 'disabled',
                    'prevText' => '',
                    'nextText' => '',
                    'dots' => 'disabled',
                    'loop' => 'disabled',
                    'videoloop' => 'disabled',
                    'videoautoplay' => 'disabled',
                    'autoplay' => 'disabled',
                    'autoplaySpeed' => '',
                    'pauseOnHover' => 'enabled',
                    'items' => [
                        0 => [
                            'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-bitcoin',
                            'title' => 'Marketing',
                            'subtitle' => 'An Ancient Robot and a Kid',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => '',
                            'link' => '#',
                            'linktext' => 'Button',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'New item'
                        ],
                        1 => [
                            'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-paint-brush',
                            'title' => 'Design',
                            'subtitle' => 'An Ancient Robot and a Kid',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => '',
                            'link' => '#',
                            'linktext' => 'Button',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'New item'
                        ],
                        2 => [
                            'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-play-circle-o',
                            'title' => 'Watch',
                            'subtitle' => 'An Ancient Robot and a Kid',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => '',
                            'link' => '#',
                            'linktext' => 'Button',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'New item'
                        ],
                        3 => [
                            'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-bookmark',
                            'title' => 'Bookmark',
                            'subtitle' => 'An Ancient Robot and a Kid',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => '',
                            'link' => '#',
                            'linktext' => 'Button',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'New item'
                        ],
                        4 => [
                            'image' => 'gantry-media://rocketlauncher/home/slideshow/img-01.jpg',
                            'showcaseimages' => [
                                
                            ],
                            'icon' => 'fa fa-support',
                            'title' => 'Support',
                            'subtitle' => 'An Ancient Robot and a Kid',
                            'author' => '',
                            'authorimage' => '',
                            'desc' => '',
                            'link' => '#',
                            'linktext' => 'Button',
                            'buttontarget' => '_self',
                            'buttonclass' => '',
                            'videosource' => 'external',
                            'video' => '',
                            'videolocal' => '',
                            'videothumb' => '',
                            'name' => 'New item'
                        ]
                    ]
                ]
            ],
            'infolist-2967' => [
                'title' => 'Infolist & Flipster Cover Flow',
                'attributes' => [
                    'class' => '',
                    'title' => 'Infolist & Flipster Cover Flow',
                    'intro' => '',
                    'cols' => 'g-3cols',
                    'infolists' => [
                        0 => [
                            'icon' => 'fa fa-tasks',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Our network is SSL secured with 256-bit encryption, and we’re constantly optimizing.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Item 1'
                        ],
                        1 => [
                            'icon' => 'fa fa-bar-chart-o',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Our network is SSL secured with 256-bit encryption, and we’re constantly optimizing.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Item 2'
                        ],
                        2 => [
                            'icon' => 'fa fa-desktop',
                            'iconloc' => 'left',
                            'image' => '',
                            'imageloc' => 'left',
                            'textstyle' => 'compact',
                            'imagestyle' => 'compact',
                            'desc' => 'Our network is SSL secured with 256-bit encryption, and we’re constantly optimizing.',
                            'tag' => '',
                            'subtag' => '',
                            'label' => 'More',
                            'link' => '#',
                            'buttonicon' => '',
                            'readmoreclass' => '',
                            'readmoretarget' => '_self',
                            'title' => 'Item 3'
                        ]
                    ]
                ],
                'block' => [
                    'class' => 'fp-expanded-infolist',
                    'variations' => 'title6 title-center'
                ]
            ],
            'flipster-2995' => [
                'title' => 'Flipster Cover Flow',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'start' => 'center',
                    'fadein' => '400',
                    'loop' => 'disabled',
                    'autoplay' => '',
                    'pauseonhover' => 'enabled',
                    'style' => 'coverflow',
                    'spacing' => '-0.6',
                    'click' => 'enabled',
                    'keyboard' => 'enabled',
                    'scrollwheel' => 'disabled',
                    'touch' => 'enabled',
                    'items' => [
                        0 => [
                            'accent' => 'white',
                            'title' => 'Flip the Cards in Style',
                            'desc' => 'Whether you want to spin the Wheel, ride the Carousel, go with the <br>Cover Flow, or keep it Flat, the Flipster offers multiple styles.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 1'
                        ],
                        1 => [
                            'accent' => 'white',
                            'title' => 'Dynamic Panning Cards',
                            'desc' => 'The new Flipster particle displays dynamic panning cards<br/> that can rotate via click, touch, scroll, and/or keyboard.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 2'
                        ],
                        2 => [
                            'accent' => 'white',
                            'title' => 'Flip the Cards in Style',
                            'desc' => 'Whether you want to spin the Wheel, ride the Carousel, go with the <br>Cover Flow, or keep it Flat, the Flipster offers multiple styles.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 3'
                        ],
                        3 => [
                            'accent' => 'white',
                            'title' => 'Dynamic Panning Cards',
                            'desc' => 'The new Flipster particle displays dynamic panning cards<br/> that can rotate via click, touch, scroll, and/or keyboard.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 4'
                        ],
                        4 => [
                            'accent' => 'white',
                            'title' => 'Flip the Cards in Style',
                            'desc' => 'Whether you want to spin the Wheel, ride the Carousel, go with the <br>Cover Flow, or keep it Flat, the Flipster offers multiple styles.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 5'
                        ],
                        5 => [
                            'accent' => 'white',
                            'title' => 'Dynamic Panning Cards',
                            'desc' => 'The new Flipster particle displays dynamic panning cards<br/> that can rotate via click, touch, scroll, and/or keyboard.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 6'
                        ],
                        6 => [
                            'accent' => 'white',
                            'title' => 'Flip the Cards in Style',
                            'desc' => 'Whether you want to spin the Wheel, ride the Carousel, go with the <br>Cover Flow, or keep it Flat, the Flipster offers multiple styles.',
                            'image' => '',
                            'buttontext' => 'Know More',
                            'buttonlink' => '#',
                            'buttontarget' => '_self',
                            'buttonclass' => 'button-2',
                            'name' => 'Item 7'
                        ]
                    ]
                ]
            ],
            'simplecontent-8215' => [
                'title' => 'Imagegrid Particle Title',
                'attributes' => [
                    'class' => '',
                    'title' => '',
                    'items' => [
                        0 => [
                            'layout' => 'header',
                            'created_date' => '',
                            'content_title' => 'Imagegrid Particle',
                            'author' => '',
                            'leading_content' => '',
                            'main_content' => '',
                            'readmore_label' => '',
                            'readmore_link' => '',
                            'readmore_class' => '',
                            'readmore_target' => '_self',
                            'title' => 'Item 1'
                        ]
                    ]
                ],
                'block' => [
                    'variations' => 'center'
                ]
            ]
        ]
    ]
];
