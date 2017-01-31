<?php
return [
    '@class' => 'Gantry\\Component\\File\\CompiledYamlFile',
    'filename' => 'gantry-admin://blueprints/layout/inheritance/messages/inherited.yaml',
    'modified' => 1482275590,
    'data' => [
        'name' => 'Inheritance',
        'description' => 'Inherited tab',
        'type' => 'inherited.inheritance',
        'form' => [
            'fields' => [
                '_note' => [
                    'type' => 'separator.note',
                    'class' => 'alert alert-success blocksize-note',
                    'content' => 'This %s has been inherited by the following Outlines: %s'
                ]
            ]
        ]
    ]
];
