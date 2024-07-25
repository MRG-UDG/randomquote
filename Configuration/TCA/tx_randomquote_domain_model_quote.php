<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote',
        'label' => 'quote',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'quote,author',
        'iconfile' => 'EXT:randomquote/Resources/Public/Icons/Extension.svg'
    ],
    'types' => [
        '1' => ['showitem' => 'quote, author, image'],
    ],
    'columns' => [
        'quote' => [
            'exclude' => false,
            'label' => 'LLL:EXT:randomquote/Resources/Private/Language/locallang_db.xlf:tx_randomquote_domain_model_quote.quote',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim,required'
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
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image',
                [
                    'maxitems' => 1
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
    ],
];
