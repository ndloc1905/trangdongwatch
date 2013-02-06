<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intRUserId		= $objRequest->getParam('pruserid', 0);
$strContent		= $objRequest->getParam('pcontent', '');
$objComment		= new UComments();
$objUser 		= new Users();
$arrUser		= $objUser->getById($intRUserId);
$intId			= $objComment->add($AppUI->id, $AppUI->username, $intRUserId, $arrUser['username'], $strContent);
echo $intId;
exit;
?>