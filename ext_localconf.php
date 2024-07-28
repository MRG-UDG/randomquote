<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'MRG.Randomquote',
    'Quote',
    [
        \MRG\Randomquote\Controller\QuoteController::class => 'show'
    ],
    // non-cacheable actions
    [
        \MRG\Randomquote\Controller\QuoteController::class => 'show'
    ]
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    '@import "EXT:randomquote/Configuration/TSconfig/Page/Mod/Wizards/NewContentElement.tsconfig"'
);

$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    \TYPO3\CMS\Core\Imaging\IconRegistry::class
);
$iconRegistry->registerIcon(
    'ext-randomquote-icon',
    \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    ['source' => 'EXT:randomquote/Resources/Public/Icons/Extension.svg']
);
