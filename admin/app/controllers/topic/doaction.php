<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('items', '');

if ((int) $arrId > 0 && $intAction==1) {
	$objTopic = new Topics();
	$intError = $objTopic->delete($arrId);
	echo "Done";
} else {


	if (is_array($arrId) && $arrId) {
		$objTopic = new Topics();
		if ($intAction == 1) {
			$intError = $objTopic->delete($arrId);
		} elseif ($intAction == 2) {
			$intError = $objTopic->updateStatus($arrId, 1); // Active
		} elseif ($intAction == 3) {
			$intError = $objTopic->updateStatus($arrId, 0); // Inactive
		} elseif ($intAction == 4) {
			$intError = $objTopic->updateFlags($arrId, 1); //Mo khoa
		} elseif ($intAction == 5) {
			$intError = $objTopic->updateFlags($arrId, 2); // Khoa
		} elseif ($intAction == 6) {
			$intError = $objTopic->updateStatus($arrId, 2); // Tong Hop
		} elseif ($intAction == 7) {
			$intError = $objTopic->updateStatus($arrId, 1); // Xoa Tong Hop
		} elseif ($intAction == 8) {
			$intError = $objTopic->updateTop($arrId, 1); // Dong Dinh
		} elseif ($intAction == 9) {
			$intError = $objTopic->updateTop($arrId, 0); // Xoa Dong Dinh
		}
		Functions::setMsg($objTranslate->_('msg_success_action'));
		Functions::back();
	}
}
exit;
?>