<?php
include_once 'common/header.php';
$intPage	= $objRequest->getParam('page', 1);
$intType	= $objRequest->getParam('ptype', 0);
$intLimit	= LIMIT_DEFAULT;
$objContact	= new Contacts();
$arrResult 	= $objContact->getAll($intType, $intPage, $intLimit, $intTotal);
if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
	$this->_redirect(HOST_CONTACT);
	exit;
}
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
?>