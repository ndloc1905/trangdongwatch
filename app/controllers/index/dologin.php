<?php
$objTranslate 	= Zend_Registry::get('objTranslate');
$objRequest 	= $this->_request;
$strUserName	= $objRequest->getParam('ploginusername', '');
$strPassword	= $objRequest->getParam('ploginpassword', '');
$isRemember		= $objRequest->getParam('premember', 0);
$strToUrl		= $objRequest->getParam('ptourl', '');
$objAuth 		= new Auth();
$intError		= $objAuth->authenticate($strUserName, $strPassword, 0);
if ($intError > 0) {
	$_SESSION['ploginusername'] = $strUserName;
	$_SESSION['ploginpassword'] = $strPassword;
	if ($intError == 1) {
		Functions::setErr($strMsg = $objTranslate->_('msg_error_logininactive'));
		$this->_redirect(HOST_NOTICE);
	} else {
		Functions::setErr($strMsg = $objTranslate->_('msg_error_login'));		
		$this->_redirect(HOST_LOGIN . '?ptourl=' . $strToUrl);
	}
} else {
	if (isset($_SESSION['ploginusername']) && isset($_SESSION['ploginpassword'])) {
		unset($_SESSION['ploginusername']);
		unset($_SESSION['ploginpassword']);
	}
	if ($isRemember) {
		$strRemember = Functions::base64E($strUserName . '::' . $strPassword);
		Functions::setCookie(COOKIE_REMEMBER, $strRemember);		
	} else {
		Functions::setCookie(COOKIE_REMEMBER, '');
	}
	$this->_redirect(Functions::base64D($strToUrl));
}
exit;
?>