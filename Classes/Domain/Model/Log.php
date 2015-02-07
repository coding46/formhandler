<?php
namespace Tx\Formhandler\Domain\Model;

/***************************************************************
*  Copyright notice
*
*  (c) 2015 Felix Kopp <felix-source@phorax.com>
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

class Log extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/** @var \DateTime */
	protected $crdate;

	/** @var string */
	protected $ip;

	/** @var int */
	protected $pid;

	/** @var string */
	protected $params;

	/** @var bool */
	protected $isSpam;

	/** @var string */
	protected $keyHash;

	/** @var string */
	protected $uniqueHash;

	/**
	 * @return \DateTime
	 */
	public function getCrdate() {
		return $this->crdate;
	}

	/**
	 * @param \DateTime $crdate
	 */
	public function setCrdate($crdate) {
		$this->crdate = $crdate;
	}

	/**
	 * @return string
	 */
	public function getUniqueHash() {
		return $this->uniqueHash;
	}

	/**
	 * @param string $uniqueHash
	 */
	public function setUniqueHash($uniqueHash) {
		$this->uniqueHash = $uniqueHash;
	}

	/**
	 * @return string
	 */
	public function getKeyHash() {
		return $this->keyHash;
	}

	/**
	 * @param string $keyHash
	 */
	public function setKeyHash($keyHash) {
		$this->keyHash = $keyHash;
	}

	/**
	 * @return boolean
	 */
	public function getIsSpam() {
		return $this->isSpam;
	}

	/**
	 * @param boolean $isSpam
	 */
	public function setIsSpam($isSpam) {
		$this->isSpam = $isSpam;
	}

	/**
	 * @return string
	 */
	public function getParams() {
		return $this->params;
	}

	/**
	 * @param string $params
	 */
	public function setParams($params) {
		$this->params = $params;
	}

	/**
	 * @return string
	 */
	public function getIp() {
		return $this->ip;
	}

	/**
	 * @param string $ip
	 */
	public function setIp($ip) {
		$this->ip = $ip;
	}

	/**
	 * @return int
	 */
	public function getPid() {
		return $this->pid;
	}

	/**
	 * @param int $pid
	 */
	public function setPid($pid) {
		$this->pid = $pid;
	}

}