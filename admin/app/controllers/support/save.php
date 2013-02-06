<?php
include_once 'common/header.php';
$objSupport	= new Supports();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objSupport->update($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;	
} else {
	$objSupport->add($arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
}
$this->_redirect(HOST_SUPPORT);
exit;
?>