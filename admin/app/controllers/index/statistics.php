<?php
include_once 'common/header.php';
$intPage		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$strRDateFrom 	= $objRequest->getParam('prdatefrom', '');
$strRDateTo 	= $objRequest->getParam('prdateto', '');
if ($strRDateFrom) {
	$strRDateFrom = substr($strRDateFrom, 6, 4) . '/' . substr($strRDateFrom, 3, 2) . '/' . substr($strRDateFrom, 0, 2);
}
if ($strRDateTo) {
	$strRDateTo = substr($strRDateTo, 6, 4) . '/' . substr($strRDateTo, 3, 2) . '/' . substr($strRDateTo, 0, 2);
}
$objRents  = new Rents();
$arrResult = $objRents->getStatistics($strKeyword, $strRDateFrom, $strRDateTo);
$this->view->strKeyword	 	= $strKeyword;
$this->view->arrResult 		= $arrResult;
$this->view->strRDateFrom 	= $strRDateFrom;
$this->view->strRDateTo 	= $strRDateTo;
?>