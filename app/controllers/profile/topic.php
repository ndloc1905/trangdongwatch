<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$intParentId= $objRequest->getParam('pparentid', 0);
$intCateId  = $objRequest->getParam('pcateid', 0);
$intLimit	= LIMIT_DEFAULT;
$objTopics 	= new Topics();
$arrResult 	= $objTopics->getAll($objUser->id, $intParentId, $intCateId, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;	
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
?>