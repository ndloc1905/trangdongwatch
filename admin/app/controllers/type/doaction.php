<?php
include_once 'common/header.php';
$intAction = $objRequest->getParam('paction', 0);
$arrId 	= $objRequest->getParam('items', '');				
if (is_array($arrId) && $arrId) {
	$objTypes = new Types();
	if ($intAction == 1) {
		$intError = $objTypes->delete($arrId);	
	} elseif ($intAction == 2) {
		$intError = $objTypes->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objTypes->updateStatus($arrId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>