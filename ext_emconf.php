<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Random Quote',
    'description' => 'Frontend plugin to display random quotes',
    'category' => 'plugin',
    'author' => 'Marko Röper-Grewe',
    'author_email' => 'marko.roeper-grewe@udg.de',
    'author_company' => 'MSQ / UDG',
    'state' => 'stable',
    'version' => '13.4.0',
    'iconIdentifier' => 'ext-randomquote-icon',
    'constraints' => [
        'depends' => [
            'typo3' => '13.4.0-13.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
