<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$strKeyword = $objRequest->getParam('pkeyword', '');
$intStatus  = $objRequest->getParam('pstatus', -1);
$intType 	= 1;
$intLimit	= LIMIT_DEFAULT;
$objUsers 	= new Users();
$arrResult 	= $objUsers->getAll($intType, $strKeyword, $intStatus, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_USER);
	exit;
}
$this->view->intStatus 	= $intStatus;
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;	
?>