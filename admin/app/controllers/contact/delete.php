<?php
include_once 'common/header.php';
$arrId = $objRequest->getParam('items', '');
if (is_array($arrId) && $arrId) {
	$objContact	= new Contacts();
	$intError 	= $objContact->delete($arrId);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>