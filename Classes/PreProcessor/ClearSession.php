<?php
namespace Tx\Formhandler\PreProcessor;

/*                                                                        *
 * This script is part of the TYPO3 project - inspiring people to share!  *
 *                                                                        *
 * TYPO3 is free software; you can redistribute it and/or modify it under *
 * the terms of the GNU General Public License version 2 as published by  *
 * the Free Software Foundation.                                          *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU General      *
 * Public License for more details.                                       *
 *                                                                        */

/**
 * A PreProcessor cleaning session values stored by Finisher_StoreGP
 * 
 * Example:
 * <code>
 * preProcessors.1.class = \Tx\Formhandler\PreProcessor_ClearSession
 * </code>
 *
 * @author	Stefan Froemken <firma@sfroemken.de>
 * @author	Reinhard Führicht <rf@typoheads.at>
 * @package	Tx_Formhandler
 * @subpackage	PreProcessor
 */
class ClearSession extends AbstractPreProcessor {

	/**
	 * The main method called by the controller
	 *
	 * @return array The probably modified GET/POST parameters
	 */
	public function process() {
		$sessionKeysToRemove = array(
			'finisher-storegp'
		);
		if($this->settings['sessionKeysToRemove']) {
			$sessionKeysToRemove = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $this->utilityFuncs->getSingle($this->settings, 'sessionKeysToRemove'));
		}

		foreach($sessionKeysToRemove as $sessionKey) {
			$GLOBALS['TSFE']->fe_user->setKey('ses', $sessionKey, NULL);
			$GLOBALS['TSFE']->fe_user->storeSessionData();
		}

		return $this->gp;
	}

}