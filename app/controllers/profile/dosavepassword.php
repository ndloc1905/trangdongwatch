<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objView		= Zend_Registry::get('objView');
$objRequest  	= $this->_request;
$arrParams 	 	= $objRequest->getParams();
$strPassword 	= $objRequest->getParam('ppassword', '');
$objUser 		= new Users();
if ($AppUI->password != md5($strPassword)) {
	$intError = $objUser->updatePassword($AppUI->id, $strPassword);
	if ($intError == 0) {		
		$objAuth = new Auth();
		$objAuth->write($objUser->toObjUser($objUser->getById($AppUI->id)));
		Functions::setMsg('Đổi mật khẩu thành công.');
		$this->_redirect(Url::url_user_info($AppUI->username));
	}
} else {
	$$this->_redirect(Url::url_user_info($AppUI->username));
}
exit;
?>