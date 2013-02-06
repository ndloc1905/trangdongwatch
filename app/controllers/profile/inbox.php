<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$intLimit	= LIMIT_DEFAULT;
$objMailBox	= new MailBoxs();
$arrResult 	= $objMailBox->getAll($intType = 2, $AppUI->id, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;	
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
$this->view->intType 	= $intType;
?>