<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intId 			= $objRequest->getParam('id', 0);
$objComment		= new UComments();
$intError		= $objComment->deleteOne($AppUI->id, $intId);
echo $intError;
exit;
?>