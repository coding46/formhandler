<?php
namespace Tx\Formhandler\Component;

/*                                                                       *
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
 * Abstract class for any usable Formhandler component.
 * This class defines some useful variables and a default constructor for all Formhandler components.
 *
 * @author	Reinhard Führicht <rf@typoheads.at>
 * @abstract
 */
abstract class AbstractClass {

	/**
	 * The Formhandler component manager
	 *
	 * @access protected
	 * @var \Tx\Formhandler\Component\Manager
	 */
	protected $componentManager;

	/**
	 * The global Formhandler configuration
	 *
	 * @access protected
	 * @var \Tx\Formhandler\Controller\Configuration
	 */
	protected $configuration;

	/**
	 * The global Formhandler values
	 *
	 * @access protected
	 * @var \Tx\Formhandler\Utils\Globals
	 */
	protected $globals;

	/**
	 * The Formhandler utility methods
	 *
	 * @access protected
	 * @var \Tx\Formhandler\Utils\UtilityFuncs
	 */
	protected $utilityFuncs;

	/**
	 * The cObj
	 *
	 * @access protected
	 * @var tslib_cObj
	 */
	protected $cObj;

	/**
	 * The constructor for an interceptor setting the component manager and the configuration.
	 *
	 * @param \Tx\Formhandler\Component\Manager $componentManager
	 * @param \Tx\Formhandler\Controller\Configuration $configuration
	 * @return void
	 */
	public function __construct(\Tx\Formhandler\Component\Manager $componentManager,
								\Tx\Formhandler\Controller\Configuration $configuration,
								\Tx\Formhandler\Utils\Globals $globals,
								\Tx\Formhandler\Utils\UtilityFuncs $utilityFuncs) {

		$this->componentManager = $componentManager;
		$this->configuration = $configuration;
		$this->globals = $globals;
		$this->utilityFuncs = $utilityFuncs;
		$this->cObj = $this->globals->getCObj();
	}

}