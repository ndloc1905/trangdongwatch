<?php
$AppUI 		= Zend_Registry::get('AppUI');
$t			= Zend_Registry::get('objTranslate');
$objView 	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$strEmail 	= $objRequest->getParam('pemail', '');
if ($strEmail) {
	$objUser = new Users();
	$arrUser = $objUser->getByUserNameOrEmail($strEmail);
	if ($arrUser) {
		$intUserId = $arrUser['id'];
		$strCode   = md5(Functions::stringRandom(20));
		$objCommon = new Common();
		if ($objCommon->addActivate($intUserId, $strCode, 2)) {
			$strEmail = $arrUser['email'];
			$this->view->strSupportEmail = $strSupportEmail = EMAIL_SUPPORT;
			$this->view->arrUser  = $arrUser;
			$this->view->strEmail = $strEmail;
			$this->view->strLink  = HOST_GETPASSWORD . '?pcode=' . $strCode;
			$strSubject = $t->_('email_subject_forgetpassword');
			$strContent = $objView->fetch(ROOT_LIB . '/Plugins/Tpl/email_forgetpassword.tpl');
			$objMail = new Mail();
			$objMail->send($strSupportEmail, EMAIL_NAME, $strEmail, $strSubject, $strContent);
			Functions::setMsg($t->_('msg_success_sentmail'));
			$this->_redirect(HOST);
			exit;
		}
	}
}
Functions::setErr($t->_('msg_invalid_email'));
$this->_redirect(HOST);
exit;
?>