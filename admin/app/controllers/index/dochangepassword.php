<?php
include_once 'common/header.php';
$intUserId 	= $objRequest->getParam('id', 0);
$objUser  	= new Users();
$intError 	= $objUser->updatePassword($intUserId, $arrParams['pnewpassword']);
if ($intError == 0) {
	Functions::setMsg($objTranslate->_('msg_success_changepassword'));
	if ($intUserId == $AppUI->id) {
		$this->_redirect(HOST_ADMIN);
		exit;
	}
	Functions::back();
}
exit;
?>