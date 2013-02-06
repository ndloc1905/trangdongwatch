<?php
include_once 'common/header.php';
$intAction = $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('items', '');
if (is_array($arrId) && $arrId) {
	$objCommon = new Common();
	if ($intAction == 1) {
		for ($i = 0; $i < count($arrId); $i++) {
			$objCommon-> updateStatusIP($arrId[$i], $intStatus = 0);
		}			
	} elseif ($intAction == 2) {
		for ($i = 0; $i < count($arrId); $i++) {
			$objCommon-> updateStatusIP($arrId[$i], $intStatus = 1);
		}						
	} 
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>