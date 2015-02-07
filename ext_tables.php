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
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array('Formhandler', $_EXTKEY . '_pi1'), 'list_type');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_formhandler_log');