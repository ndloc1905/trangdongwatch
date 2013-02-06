<?php
include_once 'common/header.php';
$intUserId 	= $objRequest->getParam('id', 0);
$intPage	= $objRequest->getParam('page', 1);	
if ($intUserId > 0) {
	$objUsers = new Users();		
	$this->view->arrResult = $arrResult = $objUsers->getById($intUserId);
}
$this->view->intPage = $intPage;
?>