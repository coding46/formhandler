<?php
namespace Tx\Formhandler\Domain\Model;

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

class LogDemand extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/** @var int */
	protected $pageId;

	/** @var string */
	protected $pidFilter;

	/** @var string */
	protected $search;

	/** @var string */
	protected $ipFilter;

	/** @var \DateTime */
	protected $startDate;

	/** @var \DateTime */
	protected $endDate;

	/**
	 * @return \DateTime
	 */
	public function getEndDate() {
		return $this->endDate;
	}

	/**
	 * @param \DateTime $endDate
	 */
	public function setEndDate($endDate) {
		$this->endDate = $endDate;
	}

	/**
	 * @return int
	 */
	public function getPageId() {
		return $this->pageId;
	}

	/**
	 * @param int $pageId
	 */
	public function setPageId($pageId) {
		$this->pageId = $pageId;
	}

	/**
	 * @return string
	 */
	public function getPidFilter() {
		return $this->pidFilter;
	}

	/**
	 * @param string $pidFilter
	 */
	public function setPidFilter($pidFilter) {
		$this->pidFilter = $pidFilter;
	}

	/**
	 * @return string
	 */
	public function getSearch() {
		return $this->search;
	}

	/**
	 * @param string $search
	 */
	public function setSearch($search) {
		$this->search = $search;
	}

	/**
	 * @return string
	 */
	public function getIpFilter() {
		return $this->ipFilter;
	}

	/**
	 * @param string $ipFilter
	 */
	public function setIpFilter($ipFilter) {
		$this->ipFilter = $ipFilter;
	}

	/**
	 * @return \DateTime
	 */
	public function getStartDate() {
		return $this->startDate;
	}

	/**
	 * @param \DateTime $startDate
	 */
	public function setStartDate($startDate) {
		$this->startDate = $startDate;
	}





}