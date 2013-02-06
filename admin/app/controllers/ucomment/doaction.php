<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('items', '');				
if (is_array($arrId) && $arrId) {
	$objComments = new UComments();
	if ($intAction == 1) {
		$intError = $objComments->delete($arrId);				
	} elseif ($intAction == 2) {
		$intError = $objComments->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objComments->updateStatus($arrId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>