<?php
include_once 'common/header.php';
$objUsers 	= new Users();
$intUserId 	= $intError = 0;	
$intUserId 	= intval($arrParams['id']);
$intType 	= intval($arrParams['ptype']);
if ($intType == 2) {
	$strUploadFolder = ROOT_UPLOAD_USER;
	if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
		$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 2*1024*1024);
		if ($arrUploadResult['error'] == '') {
			Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], SIZE_AVATAR);
			$arrParams['pimage'] = $arrUploadResult['filename'];
		}
	}
}
if ($intUserId > 0) {	
	$objUsers->update($intUserId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;	
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objUsers->add($arrParams['ptype'], 1, $arrParams);
}
$this->_redirect(HOST_USER . '?ptype=' . $intType);
exit;
?>