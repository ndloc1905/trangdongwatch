<?php
include_once 'common/header.php';
if ($AppUI->id <= 0) {	
	$this->_redirect(HOST_LOGIN . '?ptourl=' . Functions::base64E(HOST_POSTTOPIC));
}
$objTopics = new Topics();
$intId = isset($arrParams['id']) ? intval($arrParams['id']) : 0;
$this->view->arrResult 	= $arrResult = $objTopics->getById($intId);
$this->view->intId 		= $intId;
$this->view->strImage 	= $strImage;
if ($intId > 0 && $arrResult) {
	$intTime = time() - strtotime($arrResult['postdate']);
	if ($intTime > DAYS_EDITTOPIC) {
		Functions::setErr('Bạn chỉ có thể sửa Topic tron vòng 24h.');
		Functions::back();
		exit;
	}
}
?>