<?php
/**
 * ext tables config file for ext: "formhandler"
 *
 * @author Reinhard Führicht <rf@typoheads.at>

 * @package	Tx_Formhandler
 */

if (!defined ('TYPO3_MODE')) die ('Access denied.');

if (TYPO3_MODE === 'BE') {

	\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerModule(
		'Tx.' . $_EXTKEY,
		'web',
		'formhandler',
		'',
		array(
			'Log' => 'index, show, clearLog, export'
		),
		array(
			'access' => 'admin',
			'icon' => 'EXT:formhandler/Resources/Public/Icons/module-formhandler.png',
			'labels' => 'LLL:EXT:formhandler/Resources/Private/Language/locallang_mod.xml'
		)
	);

	$GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['tx_formhandler_wizicon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Resources/PHP/class.tx_formhandler_wizicon.php';
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/Settings/default', 'Formhandler Default Configuration');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formhandler_log');

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key,pages';
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
	$_EXTKEY . '_pi1', 'FILE:EXT:formhandler/Configuration/Flexforms/flexform_ds.xml'
);

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
	array('LLL:EXT:formhandler/Resources/Private/Language/locallang_db.xml:tt_content.list_type_pi1', $_EXTKEY . '_pi1'),
	'list_type'
);

