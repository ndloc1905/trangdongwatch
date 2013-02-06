<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$t 			= Zend_Registry::get('objTranslate');
$objRequest = $this->_request;
$strCode 	= $objRequest->getParam('pcode', '');
$strPwd	 	= $objRequest->getParam('ppassword', '');
if ($strCode != '' && strlen($strPwd) >= 6) {
	$objCommon = new Common();
	$arrResult = $objCommon->getActivate($strCode, 2);	
	if ($arrResult) {
		$intUserId = $arrResult['userid'];		
		$objUser = new Users();	
		$objUser->updatePassword($intUserId, $strPwd);
		Functions::setMsg($t->_('msg_success_changepassword'));
		$this->_redirect(HOST);
	}
}
Functions::setErr($t->_('msg_invalid_code'));
$this->_redirect(HOST);
?>