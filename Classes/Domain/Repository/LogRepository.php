<?php
namespace Tx\Formhandler\Domain\Repository;

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

class LogRepository extends \TYPO3\CMS\Extbase\Persistence\Repository {

	/**
	 * @param (\Tx\Formhandler\Domain\Model\LogDemand $logDemand
	 */
	public function findDemanded(\Tx\Formhandler\Domain\Model\LogDemand $logDemand) {

		$query = $this->createQuery();
		$constraints = array();

		// Page-ID
		$constraints[] = $query->equals('pid', $logDemand->getPageId());


		#if ($this->id) {
		#	$tsconfig = \TYPO3\CMS\Backend\Utility\BackendUtility::getModTSconfig($this->id, '\Tx\Formhandler\mod1');
		#	$isAllowedToShowAll = (intval($tsconfig['properties']['config.']['enableShowAllButton']) === 1);
		#}

		#$pidFilter = '';
		#if (strlen(trim($params['pidFilter'])) > 0) {
		#	$pidFilter = $params['pidFilter'];
		#}

		#if (strlen(trim($params['pidFilter'])) > 0 && trim($params['pidFilter']) != "*") {
		#	$pids = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $params['pidFilter'], 1);
		#	$pid_search = array();
		#	// check is page shall be accessed by current BE user
		#	foreach ($pids as $pid) {
		#		if (\TYPO3\CMS\Backend\Utility\BackendUtility::readPageAccess(intval($pid), $GLOBALS['BE_USER']->getPagePermsClause(1))) {
		#			$pid_search[] = intval($pid);
		#		}
		#	}

		#	// check if there's a valid pid left
		#	$this->pidFilter = (empty($pid_search)) ? 0 : implode(",", $pid_search);
		#	$where[] = 'pid IN (' . $this->pidFilter . ')';

		#// show all entries (admin only)
		#} else if (trim($params['pidFilter']) == "*" && ($GLOBALS['BE_USER']->user['admin'] || $isAllowedToShowAll)) {
		#	$this->pidFilter = "*";

		#// show clicked page (is always accessable)
		#} else {
		#	$where[] = 'pid = ' . $this->id;
		#	$this->pidFilter = $this->id;
		#}
		#
		#
		#if (strlen($params['search']) > 0) {
		#	$search = $GLOBALS['TYPO3_DB']->escapeStrForLike($params['search'], $this->logTable);
		#	$where[] = 'params LIKE \'%' . $search . '%\'';
		#}

		#if (trim($params['ipFilter']) > 0) {
		#	$ips = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $params['ipFilter'], 1);
		#	$ip_search = array();
		#	foreach ($ips as $value) {
		#		$ip_search[] = $GLOBALS['TYPO3_DB']->fullQuoteStr(htmlspecialchars($value), $this->logTable);
		#	}
		#	$where[] = 'ip IN (' . implode(",", $ip_search) . ')';
        #}

#		if ($logDemand->getIpFilter()) {
#			$ips = \TYPO3\CMS\Core\Utility\GeneralUtility::trimExplode(',', $logDemand->getIpFilter(), 1);
#			$ip_search = array();
#			foreach ($ips as $value) {
#				$ip_search[] = $GLOBALS['TYPO3_DB']->fullQuoteStr(htmlspecialchars($value), $this->logTable);
#			}
#			$constraints[] = $query->logicalOr($query->)
#		}

		#//only records submitted after given timestamp
		#if (strlen(trim($params['startdateFilter'])) > 0) {
		#	$tstamp = $this->utilityFuncs->dateToTimestampForBackendModule($params['startdateFilter']);
		#	$where[] = 'crdate >= ' . $tstamp;
		#}

		#//only records submitted before given timestamp
		#if (strlen(trim($params['enddateFilter'])) > 0) {
		#	$tstamp = $this->utilityFuncs->dateToTimestampForBackendModule($params['enddateFilter'], TRUE);
		#	$where[] = 'crdate <= ' . $tstamp;
		#}



		return $query->matching($query->logicalAnd($constraints))->execute();
	}

}