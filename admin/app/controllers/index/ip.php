<?php
include_once 'common/header.php';
$intPage	= $objRequest->getParam('page', 1);
$strKeyword = $objRequest->getParam('pkeyword', '');
$intStatus  = $objRequest->getParam('pstatus', -1);
$intLimit	= LIMIT_DEFAULT;
$objCommon = new Common();
$arrResult 	= $objCommon->getAllIP($strKeyword, $intStatus, $intPage, $intLimit, $intTotal);
$this->view->strKeyword = $strKeyword;
$this->view->intStatus 	= $intStatus;
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
?>