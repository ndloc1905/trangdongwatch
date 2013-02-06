<?php
include_once 'common/header.php';
$objTitle 	= new Titles();
$intUserId 	= intval($arrParams['puserid']);
$intId 		= intval($arrParams['id']);
$intTitleId	= $arrParams['ptitleid'];
$strTxt		= $arrParams['ptxt'];
if ($intId > 0) {
	$objTitle->update($intId, $intUserId, $intTitleId, $strTxt);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objTitle->add($intUserId, $intTitleId, $strTxt);
}
$this->_redirect(HOST_TITLE . '?puserid=' . $intUserId);
exit;
?>