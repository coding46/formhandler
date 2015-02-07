<?php
defined('TYPO3_MODE') or die();

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key,pages';

// Add flexform DataStructure to Frontend Plugin
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	$_EXTKEY . '_pi1',
	'FILE:EXT:' . $_EXTKEY . '/Configuration/Flexform/flexform_ds.xml'
);

