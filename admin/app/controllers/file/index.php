<?php
include_once 'common/header.php';
$intPage	= $objRequest->getParam('page', 1);
$intYear	= $objRequest->getParam('y', date('Y'));
$intMonth	= $objRequest->getParam('m', date('m'));
$intYearFr	= 2011;
$intYearTo	= date('Y');
$intLimit	= 24;
$objCommon	= new Common();
$arrResult	= $objCommon->getAllFile(0, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
$this->view->intYear 	= $intYear;
$this->view->intMonth 	= $intMonth;
$this->view->arrYear 	= Functions::arrayNumber($intYearFr, $intYearTo);
$this->view->arrMonth 	= Functions::arrayNumber(1, 12);
$this->view->intParams 	= isset($_GET['y']) ? 1 : 0;
?>