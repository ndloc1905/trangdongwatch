<?php
include_once 'common/header.php';
$strCode = $objRequest->getParam('pcode', '');
if ($strCode != '') {
	$objCommon = new Common();
	$arrResult = $objCommon->getActivate($strCode, 1);
	if ($arrResult) {
		$objUser = new Users();
		$objUser->updateStatus($arrResult['userid'], 1);
		Functions::setMsg($t->_('msg_success_activate'));
		$this->_redirect(HOST_NOTICE);
	} else {
		Functions::setErr($t->_('msg_invalid_code'));
		$this->_redirect(HOST_NOTICE);
	}
}
?>