<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$intStatus  	= $objRequest->getParam('pstatus', -1);
$intParentId  	= $objRequest->getParam('pparentid', 0);
$intCateId  	= $objRequest->getParam('pcateid', 0);
$intLimit		= LIMIT_DEFAULT;
$objTopics 		= new Topics();
$arrResult 		= $objTopics->getAllAdmin($strKeyword, $intStatus, $intParentId, $intCateId, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_TOPIC);
	exit;
}
$this->view->intStatus 		= $intStatus;
$this->view->arrResult 		= $arrResult;	
$this->view->intTotal 		= $intTotal;
$this->view->intLimit 		= $intLimit;
$this->view->intPage 		= $intPage;
$this->view->intParentId 	= $intParentId;
$this->view->intCateId 		= $intCateId;
$this->view->strKeyword 	= $strKeyword;
$this->view->intParams 		= isset($_GET['pkeyword']) ? 1 : 0;
?>