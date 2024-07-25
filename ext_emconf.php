<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Random Quote',
    'description' => 'Frontend plugin to display random quotes',
    'category' => 'plugin',
    'author' => 'Marko Röper-Grewe',
    'author_email' => 'marko.roeper-grewe@udg.de',
    'state' => 'stable',
    'version' => '1.0.0',
    'iconIdentifier' => 'ext-randomquote-icon',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-10.4.99',
        ],
    ],
];
