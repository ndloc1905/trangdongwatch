<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$strKeyword = $objRequest->getParam('pkeyword', '');
$intStatus 	= $objRequest->getParam('pstatus', -1);
$intLimit	= LIMIT_DEFAULT;
$objTypes 	= new Types();
$arrResult 	= $objTypes->getAllAdmin($strKeyword, $intStatus, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
$this->view->strKeyword = $strKeyword;
$this->view->intStatus 	= $intStatus;
?>