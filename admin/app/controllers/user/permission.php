<?php
include_once 'common/header.php';
$intUserId 	= $objRequest->getParam('id', 0);
$objUsers 	= new Users();
if ($intUserId > 0) {	
	$this->view->arrResult = $arrResult = $objUsers->getById($intUserId);
	$this->view->arrPermission = $arrPermission = $objUser->getPermission($intUserId);
	/*
	if ($arrResult['type'] != 1) {
		$this->_redirect(HOST_ADMIN);
		exit;
	}
	*/
}
?>