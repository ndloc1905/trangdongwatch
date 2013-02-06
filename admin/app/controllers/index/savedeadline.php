<?php
include_once 'common/header.php';
$objCommon = new Common();
for ($i = 1; $i <= 4; $i++) {
	$intSaleoff = $objRequest->getParam('psaleoff_' . $i);
	$objCommon->updateDeadlineById($i, $intSaleoff);
}
Functions::setMsg($objTranslate->_('msg_success_action'));
$this->_redirect(HOST_DEADLINE);
exit;
?>