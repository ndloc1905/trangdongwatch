<?php
include_once 'common/header.php';
$objComments = new Comments();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objComments->update($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {	
	$objComments->add($AppUI->id, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
}
$this->_redirect(HOST_COMMENT);
exit;
?>