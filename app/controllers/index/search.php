<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$strKeyword = $objRequest->getParam('sk');
$intParentId= $objRequest->getParam('sc');
$intLimit	= LIMIT_DEFAULT;
$objTopics 	= new Topics();
$arrResult 	= $objTopics->searchAll($strKeyword, $intParentId, $intPage, $intLimit, $intTotal);
$this->view->strKeyword = $strKeyword;	
$this->view->intParentId= $intParentId;	
$this->view->arrResult 	= $arrResult;	
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
?>