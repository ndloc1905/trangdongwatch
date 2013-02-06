<?php
include_once 'common/header.php';
$objVideo = new Videos();
if ($arrParams['id'] > 0) {
	$objVideo->update($arrParams);
} else {
	$objVideo->add($arrParams);
}
Functions::setMsg($objTranslate->_('msg_success_action'));
$this->_redirect(HOST_VIDEO);
exit;
?>