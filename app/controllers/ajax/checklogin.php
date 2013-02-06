<?php
$objRequest		= $this->_request;
$arrParams		= $objRequest->getParams();
$strUserName	= $objRequest->getParam('pusername', '');
$strPassword	= $objRequest->getParam('ppassword', '');
$isRemember		= $objRequest->getParam('premember', 0);
$objAuth 		= new Auth();
$intError		= $objAuth->authenticate($strUserName, $strPassword, 0);
if ($intError > 0) {
	echo 0;
} else {
	if ($isRemember) {
		$strRemember = Functions::base64E($strUserName . '::' . $strPassword);
		Functions::setCookie(COOKIE_REMEMBER, $strRemember);		
	} else {
		Functions::setCookie(COOKIE_REMEMBER, '');
	}
	echo 1;
}
exit;
?>