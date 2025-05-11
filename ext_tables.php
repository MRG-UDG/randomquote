<?php
defined('TYPO3') || die();
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    '*',
    'FILE:EXT:randomquote/Configuration/FlexForms/flexform_randomquote.xml',
    'randomquote_quote'
);
