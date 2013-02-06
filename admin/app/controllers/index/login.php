<?php
include_once 'common/header.php';
$strUserName 	= $objRequest->getParam('paloginusername', '');
$strPassword 	= $objRequest->getParam('paloginpassword', '');
$objAuth 		= new Auth();
$intError		= $objAuth->authenticate($strUserName, $strPassword, 0);
if ($intError > 0) {
	$_SESSION['pusername'] = $strUserName;
	$_SESSION['ppassword'] = $strPassword;
	Functions::setErr($objTranslate->_('msg_invalid_login'));
} else {
	if (isset($_SESSION['pusername']) && isset($_SESSION['ppassword'])) {
		unset($_SESSION['pusername']);
		unset($_SESSION['ppassword']);
	}
}
$this->_redirect(HOST_ADMIN);
exit;
?>