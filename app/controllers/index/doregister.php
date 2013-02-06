<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$t 			= Zend_Registry::get('objTranslate');
$objRequest = $this->_request;
$arrParams	= $objRequest->getParams();
$objUser   	= new Users();
$intUserId 	= $objUser->add(2, 1, $arrParams);
if ($intUserId > 0) {
	$objAuth = new Auth();
	$objAuth->write($objUser->toObjUser($objUser->getById($intUserId)));
	Functions::setMsg($t->_('msg_success_register'));
	$this->_redirect(HOST);
}
exit;
?>