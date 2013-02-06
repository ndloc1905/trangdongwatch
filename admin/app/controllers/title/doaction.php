<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId 		= $objRequest->getParam('items', '');				
$intUserId 	= $objRequest->getParam('puserid', 0);				
if (is_array($arrId) && $arrId) {
	$objTitles = new Titles();
	if ($intAction == 1) {
		$intError = $objTitles->delete($intUserId, $arrId);				
	} elseif ($intAction == 2) {
		$intError = $objTitles->updateStatus($arrId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objTitles->updateStatus($arrId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>