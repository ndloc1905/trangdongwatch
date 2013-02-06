<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId 		= $objRequest->getParam('items', '');				
if (is_array($arrId) && $arrId) {
	$objMailBox	= new MailBoxs();
	if ($intAction == 1) {
		$intError = $objMailBox->delete($arrId);				
	} elseif ($intAction == 2) {
		$intError = $objMailBox->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objMailBox->updateStatus($arrId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>