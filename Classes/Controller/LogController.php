<?php
namespace Tx\Formhandler\Controller;

/***************************************************************
*  Copyright notice
*
*  (c) 2011 phorax
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

class LogController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \Tx\Formhandler\Domain\Repository\LogRepository
	 * @inject
	 */
	protected $logRepository = NULL;

	/**
	 * The table to select the logged records from
	 *
	 * @access protected
	 * @var string
	 */
	protected $logTable = 'tx_formhandler_log';

	/**
	 *
	 */
	protected function initializeAction() {
		parent::initializeAction();

		$this->id = intval(\TYPO3\CMS\Core\Utility\GeneralUtility::_GP('id'));

		// TODO access check
#		if (!$this->id) {
#			$this->redirect('noPage');
#		} else {
#			$this->pageinfo = \TYPO3\CMS\Backend\Utility\BackendUtility::readPageAccess($this->id, $this->perms_clause);
##			if (!is_array($this->pageinfo) ? 1 : 0)
#			// TODO: No access to page
#		}
	}

	/**
	 * Export
	 */
	public function exportAction() {
	}

	/**
	 * Index action
	 *
	 * @param \Tx\Formhandler\Domain\Model\LogDemand|NULL $logDemand
	 */
	public function indexAction(\Tx\Formhandler\Domain\Model\LogDemand $logDemand = NULL) {
		if ($logDemand === NULL) {
			$logDemand = $this->objectManager->get(\Tx\Formhandler\Domain\Model\LogDemand::class);
		}

		$GLOBALS['LANG']->includeLLFile('EXT:formhandler/Resources/Language/locallang.xml');

		// TODO: refactor
/*		$tsconfig = \TYPO3\CMS\Backend\Utility\BackendUtility::getModTSconfig($this->id, '\Tx\Formhandler\mod1');
		$settings = $tsconfig['properties']['config.'];
		$this->view->assign('settings', $settings);
*/

		$this->view->assign('id', $this->id);
		$logDemand->setPageId($this->id);

		$this->view->assign('logDemand', $logDemand);

		$logEntries = $this->logRepository->findDemanded($logDemand);
		$this->view->assign('logEntries', $logEntries);
	}

	/**
	 * This function returns a single view of a record
	 *
	 * @param \Tx\Formhandler\Domain\Model\Log $log
	 * @return string single view
	 */
	public function showAction(\Tx\Formhandler\Domain\Model\Log $log) {
		$this->view->assign('params', unserialize($log->getParams()));
		$this->view->assign('log', $log);
	}

	/**
	 * Clear logs
	 */
	public function clearLogAction() {
		die('TODO');

		/**
		 * Vorher: BackendClearLogs
		 */

/*
		$tsconfig = \TYPO3\CMS\Backend\Utility\BackendUtility::getModTSconfig($this->id, '\Tx\Formhandler\mod1');
		$this->settings = $tsconfig['properties']['config.'];

		$GLOBALS['LANG']->includeLLFile('EXT:formhandler/Resources/Language/locallang.xml');
		$templatePath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('formhandler') . 'Resources/HTML/backend/';
		$templateFile = $templatePath . 'template.html';
		$this->templateCode = \TYPO3\CMS\Core\Utility\GeneralUtility::getURL($templateFile);

		if (intval($this->settings['enableClearLogs']) !== 1 && !$GLOBALS['BE_USER']->user['admin']) {
			return;
		}

		$row = $GLOBALS['TYPO3_DB']->exec_SELECTgetSingleRow('COUNT(*) as rowCount', '\Tx\Formhandler\log', '1=1');
		$rowCount = $row['rowCount'];

		//init gp params
		$params = \TYPO3\CMS\Core\Utility\GeneralUtility::_GP('formhandler');
		if (isset($params['doDelete']) && intval($params['doDelete']) === 1) {
			$messageHeader = $GLOBALS['LANG']->getLL('clear-logs-success-header');
			$messageText = sprintf($GLOBALS['LANG']->getLL('clear-logs-success-message'), intval($rowCount));
			$message = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('\TYPO3\CMS\Core\Messaging\FlashMessage', $messageText, $messageHeader);
			$content = $message->render();
			$GLOBALS['TYPO3_DB']->sql_query('TRUNCATE \Tx\Formhandler\log');
			$rowCount = 0;
		}
*/

	}

}