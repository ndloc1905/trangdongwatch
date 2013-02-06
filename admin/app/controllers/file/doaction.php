<?php
include_once 'common/header.php';
$intAction = $objRequest->getParam('paction', 0);
$arrId = $objRequest->getParam('pimage', '');
if ($arrId) {
	$objCommon = new Common();	
	$intError = $objCommon->deleteFile($arrId);	
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>