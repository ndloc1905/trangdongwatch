<?php
include_once 'common/header.php';
$objBanner = new Banners();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objBanner->update($intId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objBanner->add($arrParams);
}
$this->_redirect(HOST_BANNER);
exit;
?>