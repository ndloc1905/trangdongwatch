<?php
include_once 'common/header.php';
$objTopics = new Topics();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objTopics->updateAdmin($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {	
	$objTopics->add($AppUI->id, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
}
$this->_redirect(HOST_TOPIC);
exit;
?>