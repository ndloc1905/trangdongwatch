<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$strImage	= $objRequest->getParam('pidimage', '');
$objUser 	= new Users();
if ($AppUI->id > 0 && $strImage) {
	$intError = $objUser->updateIDImage($AppUI->id, $strImage);
	if ($intError == 0) {		
		Functions::setMsg('Đã gửi yêu cầu xác thực thành công.');
	}
}
$this->_redirect(HOST_ACCOUNT);
exit;
?>