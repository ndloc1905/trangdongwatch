<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$strKeyword = $objRequest->getParam('pkeyword', '');
$intLimit	= LIMIT_DEFAULT;
$objUsers 	= new Users();
$arrResult 	= $objUsers->getAllRequest($strKeyword, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_MEMBER . '/request');
	exit;
}
$this->view->strKeyword = $strKeyword;
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
$this->view->intParams 	= isset($_GET['pkeyword']) ? 1 : 0;
?>