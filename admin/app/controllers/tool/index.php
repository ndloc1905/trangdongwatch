<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$intLimit		= LIMIT_DEFAULT;
$objMailBox		= new MailBoxs();
$arrResult 		= $objMailBox->getAllAdmin($strKeyword, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
?>