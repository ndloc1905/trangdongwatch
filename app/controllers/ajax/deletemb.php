<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intType		= $objRequest->getParam('ptype', 1);
$strId			= $objRequest->getParam('items', 0);
$objMailBox		= new MailBoxs();
$intError		= $objMailBox->updateStatus($AppUI->id, $intType, $strId);
echo $intError;
exit;
?>