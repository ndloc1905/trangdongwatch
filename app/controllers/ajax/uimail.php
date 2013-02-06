<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$strUserName	= $objRequest->getParam('username', 0);
if ($strUserName != '') {
	$objDBUser = new Users();
	$arrUser = $objDBUser->getByUserName($strUserName);
	$this->view->objUser = $objUser = $objDBUser->toObjUser($arrUser);
}
?>