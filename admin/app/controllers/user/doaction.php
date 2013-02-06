<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('items', '');				
if (is_array($arrId) && $arrId) {
	$objUsers = new Users();
	if ($intAction == 1) {
		$intError = $objUsers->delete($arrId);				
	} elseif ($intAction == 2) {
		$intError = $objUsers->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objUsers->updateStatus($arrId, 0);				
	} elseif ($intAction == 4) {
		$intError = $objUsers->updateStatus($arrId, 2);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>