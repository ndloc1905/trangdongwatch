<?php
include_once 'common/header.php';
$objCommon = new Common();
for ($i = 1; $i <= 3; $i++) {
	$intBannerId = $i;
	$intPrice = $objRequest->getParam('pprice_' . $i);
	$strUnit  = $objRequest->getParam('punit_' . $i);	
	$objCommon->updateBannerById($i, $intPrice, $strUnit);
}
Functions::setMsg($objTranslate->_('msg_success_action'));
$this->_redirect(HOST_BANNER);
exit;
?>