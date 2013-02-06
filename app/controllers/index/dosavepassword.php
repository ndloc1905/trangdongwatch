<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objView		= Zend_Registry::get('objView');
$t 				= Zend_Registry::get('objTranslate');
$objRequest  	= $this->_request;
$arrParams 	 	= $objRequest->getParams();
$strPassword 	= $objRequest->getParam('ppassword', '');
$objUser 		= new Users();
if ($AppUI->password != md5($strPassword)) {
	$intError = $objUser->updatePassword($AppUI->id, $strPassword);
	if ($intError == 0) {
		$this->view->arrParams = $arrParams; 
		$this->view->strSupportEmail = $strSupportEmail = $objConfig['EMAIL_SUPPORT']; 
		$strSubject = $t->_('email_subject_changepassword');
		$strContent = $objView->fetch(ROOT_LIB . '/Plugins/Tpl/email_changepassword.tpl');		
		$objMail = new Mail();
		$objMail->send($strSupportEmail, 'TIMEMSG.COM', $AppUI->email, $strSubject, $strContent);
		
		$objAuth = new Auth();
		$objAuth->write($objUser->toObjUser($objUser->getById($AppUI->id)));
		Functions::setMsg($t->_('msg_success_changepassword'));
		$this->_redirect(HOST . '/' . $AppUI->username);
	}
} else {
	$this->_redirect(HOST . '/' . $AppUI->username);
}
exit;
?>