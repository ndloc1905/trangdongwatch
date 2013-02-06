<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$strUserName	= $objRequest->getParam('pusername', 0);
$intThreadId	= $objRequest->getParam('pthreadid', 0);
$arrParams		= $objRequest->getParams();
$objMailBox		= new MailBoxs();
$objUser 		= new Users();
$arrUser		= $objUser->getByUserName($strUserName);
$intError		= $objMailBox->add($AppUI->id, $AppUI->username, $arrUser['id'], $arrUser['username'], $intThreadId, $arrParams);
echo $intError;
exit;
?>