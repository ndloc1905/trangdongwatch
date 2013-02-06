<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrId 		= $objRequest->getParam('items', '');				
if (is_array($arrId) && $arrId) {
	$objRating = new URatings();
	if ($intAction == 1) {
		$intError = $objRating->delete($arrId);				
	} else {
		$intError = $objRating->accept($arrId);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>