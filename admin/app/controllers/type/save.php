<?php
include_once 'common/header.php';
$objTypes = new Types();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objTypes->update($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objTypes->add($arrParams);
}
$this->_redirect(HOST_TYPE);
exit;
?>