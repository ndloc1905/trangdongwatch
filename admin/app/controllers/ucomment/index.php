<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$intStatus  	= $objRequest->getParam('pstatus', -1);
$intLimit		= LIMIT_DEFAULT;
$objComments 	= new UComments();
$arrResult 		= $objComments->getAllAdmin($strKeyword, $intStatus, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_UCOMMENT);
	exit;
}
$this->view->arrResult 		= $arrResult;	
$this->view->intTotal 		= $intTotal;
$this->view->intLimit 		= $intLimit;
$this->view->intPage 		= $intPage;
$this->view->intStatus 		= $intStatus;
$this->view->strKeyword 	= $strKeyword;
?>