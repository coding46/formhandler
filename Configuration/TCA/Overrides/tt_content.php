<?php
defined('TYPO3_MODE') or die();

$TCA['tt_content']['types']['list']['subtypes_excludelist']['formhandler_pi1'] = 'layout,select_key,pages';

// Add flexform DataStructure to Frontend Plugin
$TCA['tt_content']['types']['list']['subtypes_addlist']['formhandler_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	'formhandler_pi1',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('formhandler') . '/Configuration/Flexform/flexform_ds.xml'
);