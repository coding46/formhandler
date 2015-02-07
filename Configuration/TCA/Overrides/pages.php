<?php
defined('TYPO3_MODE') or die();

$TCA['pages']['columns']['module']['config']['items'][] = array(
	'LLL:EXT:' . $_EXTKEY . '/Resources/Language/locallang.xml:title',
	'formlogs',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_formhandler_log.gif'
);

\TYPO3\CMS\Backend\Sprite\SpriteManager::addTcaTypeIcon(
	'pages',
	'contains-formlogs',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath($_EXTKEY) . 'Resources/Public/Icons/pagetreeicon.png'
);