<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$intStatus  	= $objRequest->getParam('pstatus', -1);
$intTopicId  	= $objRequest->getParam('ptopicid', 0);
$intLimit		= LIMIT_DEFAULT;
$objComments 	= new Comments();
$arrResult 		= $objComments->getAllAdmin($strKeyword, $intStatus, $intTopicId, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_COMMENT);
	exit;
}
$this->view->arrResult 		= $arrResult;	
$this->view->intTotal 		= $intTotal;
$this->view->intLimit 		= $intLimit;
$this->view->intPage 		= $intPage;
$this->view->intStatus 		= $intStatus;
$this->view->intTopicId 	= $intTopicId;
$this->view->strKeyword 	= $strKeyword;
$this->view->intParams 		= isset($_GET['pkeyword']) ? 1 : 0;
?>