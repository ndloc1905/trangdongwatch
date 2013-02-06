<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$intUserId 	= $objRequest->getParam('puserid', '');
$strKeyword = $objRequest->getParam('pkeyword', '');
$intStatus 	= $objRequest->getParam('pstatus', -1);
$intLimit	= 50;
$objUser 	= new Users();
$objTitle 	= new Titles();
$arrResult 	= $objTitle->getAllAdmin($intUserId, $strKeyword, $intStatus, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
$this->view->intUserId 	= $intUserId;
$this->view->strKeyword = $strKeyword;
$this->view->intStatus 	= $intStatus;
$this->view->arrUser 	= $arrUser = $objUser->getById($intUserId);
?>