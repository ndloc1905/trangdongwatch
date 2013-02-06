<?php
include_once 'common/header.php';
$intPage	= $objRequest->getParam('page', 1);
$intLimit	= LIMIT_DEFAULT;
$objComment	= new UComments();
$arrResult	= $objComment->getAll($objUser->id, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
?>