<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'Randomquote',
    'Quote',
    'Random Quote'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'randomquote',
    'Configuration/TypoScript',
    'Random Quote'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
    'tx_randomquote_domain_model_quote',
    'EXT:randomquote/Resources/Private/Language/locallang_csh_tx_randomquote_domain_model_quote.xlf'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
    'tx_randomquote_domain_model_quote'
);

// Add FlexForm configuration
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['randomquote_quote'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'randomquote_quote',
    'FILE:EXT:randomquote/Configuration/FlexForms/flexform_randomquote.xml'
);
