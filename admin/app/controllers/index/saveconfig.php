<?php
include_once 'common/header.php';
$objCommon = new Common();
for ($i = 1; $i <= 17; $i++) {	
	$intValue = $objRequest->getParam('pvalue_' . $i);		
	$objCommon->updateConfigById($i, $intValue);
}
/*
$arrStyle = $objRequest->getParam('styles');
$objCommon->updateAllStyle($arrStyle);
*/
Functions::setMsg($objTranslate->_('msg_success_action'));
$this->_redirect(HOST_CONFIG);
exit;
?>