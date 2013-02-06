<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objConfig 	= Zend_Registry::get('objConfig');
$t 			= Zend_Registry::get('objTranslate');
$objRequest = $this->_request;
$arrParams 	= $objRequest->getParams();
if (isset($arrParams['pimage']) && $arrParams['pimage'] != '' && file_exists(ROOT_UPLOAD_USER . '/' . $arrParams['pimage'])) {
	Functions::thumbImageUser($AppUI->username, $arrParams['pimage']);
	unset($_SESSION['AVATAR']);	
}
$objUser  = new Users();
$intError = $objUser->updateBasic($AppUI->id, $arrParams);
if ($intError == 0) {
	$this->view->arrParams = $arrParams;
	$this->view->strSupportEmail = $strSupportEmail = $objConfig['EMAIL_SUPPORT'];
	$strSubject = $t->_('email_subject_changeprofile');
	$strContent = $objView->fetch(ROOT_LIB . '/Plugins/Tpl/email_changeprofile.tpl');
	$objMail = new Mail();
	$objMail->send($strSupportEmail, 'TIMEMSG.COM', $AppUI->email, $strSubject, $strContent);
	Functions::setMsg($t->_('msg_success_saveprofile'));
	$this->_redirect(HOST . '/' . $AppUI->username);
}
exit;
?>