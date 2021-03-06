<?php

if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPItoST43($_EXTKEY, 'pi1/class.tx_formhandler_pi1.php', '_pi1', 'list_type', 0);

//Hook in tslib_content->stdWrap
$TYPO3_CONF_VARS['SC_OPTIONS']['tslib/class.tslib_content.php']['stdWrap'][$_EXTKEY] = 'Tx\Formhandler\Hooks\Stdwrap';

//Delete cache file on "clear cache" command
$TYPO3_CONF_VARS['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['clearCachePostProc'][$_EXTKEY] = 'Tx\Formhandler\Hooks\ClearCache->clearCache';

$TYPO3_CONF_VARS['FE']['eID_include']['formhandler'] = 'EXT:formhandler/Classes/Utils/AjaxValidate.php';
$TYPO3_CONF_VARS['FE']['eID_include']['formhandler-removefile'] = 'EXT:formhandler/Classes/Utils/AjaxRemoveFile.php';
$TYPO3_CONF_VARS['FE']['eID_include']['formhandler-ajaxsubmit'] = 'EXT:formhandler/Classes/Utils/AjaxSubmit.php';