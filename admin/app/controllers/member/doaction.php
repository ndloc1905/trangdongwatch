<?php
include_once 'common/header.php';
$objUsers 	= new Users();
$intAction	= $objRequest->getParam('paction', 0);
if ($intAction == 5) {
	$intId = $objRequest->getParam('id', 0);
	$intRatings = $objRequest->getParam('pratings', 0);
	if ($intId > 0) {
		$intError = $objUsers->updateRatings($intId, $intRatings);
		Functions::setMsg($objTranslate->_('msg_success_action'));
		Functions::back();
	}
}
$arrId = $objRequest->getParam('items', '');
if (is_array($arrId) && $arrId) {
	if ($intAction == 1) {
		$intError = $objUsers->delete($arrId);
	} elseif ($intAction == 2) {
		$intError = $objUsers->updateStatus($arrId, 1);
	} elseif ($intAction == 3) {
		$intError = $objUsers->updateStatus($arrId, 0);
	} elseif ($intAction == 4) {
		$intError = $objUsers->updateStatus($arrId, 2);
	} elseif ($intAction == 6) {
		$intError = $objUsers->deleteRequest($arrId);
	} elseif ($intAction == 7) {
		$intError = $objUsers->updateCertify($arrId);
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>