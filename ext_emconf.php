<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Random Quote',
    'description' => 'Frontend plugin to display random quotes',
    'category' => 'plugin',
    'author' => 'Marko Röper-Grewe',
    'author_email' => 'marko.roeper-grewe@udg.de',
    'author_company' => 'PIA / UDG',
    'state' => 'stable',
    'clearCacheOnLoad' => 1,
    'version' => '11.0.0',
    'iconIdentifier' => 'ext-randomquote-icon',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.0-11.5.99',
        ],
        'conflicts' => [],
        'suggests' => [
            'aichemist' => ''
        ],
    ],
];
