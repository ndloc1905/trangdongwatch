<?php
include_once 'common/header.php';
$intUserId 	= $objRequest->getParam('puserid', 0);
$intId 		= $objRequest->getParam('id', 0);
$objUser 	= new Users();
$objTitle 	= new Titles();
if ($intId > 0) {
	$this->view->arrResult = $arrResult = $objTitle->getById($intId);
	$intUserId = $arrResult['userid'];
}
$this->view->intUserId = $intUserId;
$this->view->arrUser = $arrUser = $objUser->getById($intUserId);
?>