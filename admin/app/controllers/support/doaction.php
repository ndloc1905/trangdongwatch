<?php
include_once 'common/header.php';
$intAction = $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('items', '');
if (is_array($arrId) && $arrId) {
	$objSupport	= new Supports();
	if ($intAction == 1) {
		$intError = $objSupport->delete($arrId);				
	} elseif ($intAction == 2) {
		$intError = $objSupport->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objSupport->updateStatus($arrId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>