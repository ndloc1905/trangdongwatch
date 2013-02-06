<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 1);
$objMailBox	= new MailBoxs();
$arrDetail = $objMailBox->getById($intId);
if ($arrDetail) {
	$this->view->arrDetail = $arrDetail;
	if ($arrDetail['suserid'] == $AppUI->id) {
		$intType = 1;
	} else {
		$intType = 2;
	}
	if ($intType == 2 && $arrDetail['isread'] == 0) {
		$objMailBox->updateIsread($AppUI->id, $intId);
	}
	$this->view->intType = $intType;
	$intStatus = $arrDetail['status'];
	if (($arrDetail['userid'] == $AppUI->id && ($intStatus&2)!=0) || ($arrDetail['ruserid'] == $AppUI->id && ($intStatus&4)!=0)) {
		$this->_redirect(HOST_INBOX);
		exit;
	}
	if ($arrDetail['userid'] == $AppUI->id) {
		$this->view->intUserId	 = $arrDetail['ruserid'];
		$this->view->strUserName = $arrDetail['rusername'];
	} else {
		$this->view->intUserId	 = $arrDetail['userid'];
		$this->view->strUserName = $arrDetail['username'];
	}
}
?>