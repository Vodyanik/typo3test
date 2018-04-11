<?php
defined('TYPO3_MODE') || die();

call_user_func(function () {
    $extensionName = 'sitepackage';

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($extensionName, 'Configuration/TypoScript', 'NL init');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$extensionName.'/Configuration/BackendLayout/default.txt">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$extensionName.'/Configuration/BackendLayout/home.txt">');
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:'.$extensionName.'/Configuration/BackendLayout/twoColumn.txt">');
});
