<?php
include_once 'common/header.php';
$intPermission = Functions::checkPermission($AppUI->id, F_USER);
if (($intPermission&2)) {
	$intUserId 	= $objRequest->getParam('id', 0);
	$intPage	= $objRequest->getParam('page', 1);
	$arrResult	= null;
	if ($intUserId > 0) {
		$objUsers = new Users();		
		$this->view->arrResult = $arrResult = $objUsers->getById($intUserId);
	}
	$this->view->intPage = $intPage;
} else {
	$this->_redirect(HOST_NOPERMISSION);
}
?>