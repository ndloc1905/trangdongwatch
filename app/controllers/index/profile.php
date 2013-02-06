<?php
include_once 'common/header.php';
$strUserName = $objRequest->getParam('username');
if ($strUserName != '') {
	$objUser = new Users();
	$arrUser = $objUser->getByUserName($strUserName);
	if (!isset($arrUser['id']) || ($arrUser['type']<>2)) {
		$this->_redirect(HOST_ERROR);
		exit;
	}
	$this->view->arrUser = $arrUser;	
}
?>