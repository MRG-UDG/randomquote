<?php

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin('Randomquote', 'Quote', 'Random Quote');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes('tt_content', '--div--;Configuration,pi_flexform,', 'randomquote_quote', 'after:subheader');
