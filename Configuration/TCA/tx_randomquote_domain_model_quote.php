<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote',
        'label' => 'quote',
        'label_alt' => 'author',
        'label_alt_force' => true,
        'thumbnail' => 'image',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'quote,author',
        'iconfile' => 'EXT:randomquote/Resources/Public/Icons/Extension.svg',
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource'
    ],
    'types' => [
        '1' => [
            'showitem' => 'quote, author, image, ' .
                '--div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access, hidden'
        ],
    ],
    'columns' => [
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'items' => [
                    [
                        'label' => '',
                        'invertStateDisplay' => true
                    ]
                ],
            ]
        ],
        'quote' => [
            'exclude' => false,
            'label' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote.quote',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim',
                'required' => true
            ],
        ],
        'author' => [
            'exclude' => false,
            'label' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote.author',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'image' => [
            'exclude' => false,
            'label' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote.image',
            'config' => [
                ### !!! Watch out for fieldName different from columnName
                'type' => 'file',
                'allowed' => $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext'],
                'maxitems' => 1,
                'overrideChildTca' => [
                    'types' => [
                        '0' => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                        \TYPO3\CMS\Core\Resource\FileType::IMAGE->value => [
                            'showitem' => '
                            --palette--;LLL:EXT:lang/locallang_tca.xlf:sys_file_reference.imageoverlayPalette;imageoverlayPalette,
                            --palette--;;filePalette'
                        ],
                    ],
                ],
            ],
        ],
    ],
];
