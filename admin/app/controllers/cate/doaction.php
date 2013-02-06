<?php
include_once 'common/header.php';
$intAction	= $objRequest->getParam('paction', 0);
$arrCateId 	= $objRequest->getParam('items', '');				
if (is_array($arrCateId) && $arrCateId) {
	$objCates = new Cates();
	if ($intAction == 1) {
		$intError = $objCates->delete($arrCateId);	
		if ($intError == 1) {
			Functions::setErr('Không thể xóa, vì có chuyên mục đang có Topic.');
			Functions::back();
			exit;
		}
	} elseif ($intAction == 2) {
		$intError = $objCates->updateStatus($arrCateId, 1);				
	} elseif ($intAction == 3) {
		$intError = $objCates->updateStatus($arrCateId, 0);				
	}
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>