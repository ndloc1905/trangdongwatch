<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objSmarty 	= Zend_Registry::get('objSmarty');
$objRequest = $this->_request;
$strSession = $objRequest->getParam('session', '');
$objSmarty->assign('strSession', $strSession);
$objSmarty->display('ajax/refreshcaptcha.tpl');
?>