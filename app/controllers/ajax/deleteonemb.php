<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intId			= $objRequest->getParam('id', 0);
$objMailBox		= new MailBoxs();
$intError		= $objMailBox->updateOneStatus($AppUI->id, $intId);
echo $intError;
exit;
?>