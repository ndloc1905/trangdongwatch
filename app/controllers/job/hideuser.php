<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objConfig 	= Zend_Registry::get('objConfig');
$t 			= Zend_Registry::get('objTranslate');
$objJob 	= new Jobs();
$objUser 	= new Users();
$arrResult 	= $objJob->getAllUser();
if ($arrResult) {
	$objMail = new Mail();
	$strSubject = $t->_('email_subject_hideuser');
	$this->view->strSupportEmail = $strSupportEmail = $objConfig['EMAIL_SUPPORT'];
	for ($i = 0; $i < count($arrResult); $i++) {
		$strEmail = $arrResult[$i]['email'];
		$strContent = $objView->fetch(ROOT_LIB . '/Plugins/Tpl/email_hideuser.tpl');
		$objMail->send($strSupportEmail, 'TIMEMSG.COM', $strEmail, $strSubject, $strContent);
	}
	$strUserId = Functions::stringId($arrResult, 'id');
	$objUser->updateStatus($strUserId, 0);
}
echo 'Job execute successfully!';
exit;
?>