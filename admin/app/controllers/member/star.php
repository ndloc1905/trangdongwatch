<?php
include_once 'common/header.php';
$intUserId 	= $objRequest->getParam('id', 0);
if ($intUserId > 0) {
	$objUsers = new Users();		
	$this->view->arrResult = $arrResult = $objUsers->getById($intUserId);
}
?>