<?php
include_once 'common/header.php';
$objCates = new Cates();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objCates->update($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objCates->add($arrParams);
}
$this->_redirect(HOST_CATE);
exit;
?>