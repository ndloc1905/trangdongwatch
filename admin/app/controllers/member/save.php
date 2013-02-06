<?php
include_once 'common/header.php';
$objUsers 	= new Users();
$intUserId 	= $intError = 0;	
$intUserId 	= intval($arrParams['id']);
$intType 	= 2;
$strUploadFolder = ROOT_UPLOAD_USER;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
	$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 2*1024*1024);
	if ($arrUploadResult['error'] == '') {
		Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], SIZE_IMAGE_MEMBER);
		$arrParams['pimage'] = $arrUploadResult['filename'];
	}
} else {
	$strOldImage = isset($arrParams['poldimage']) ? $arrParams['poldimage'] : '';
	if ($strOldImage) {
		@unlink($strUploadFolder . '/' . $strOldImage);
		$arrParams['pimage'] = '';
	}
}
if ($intUserId > 0) {	
	$objUsers->update($intUserId, $arrParams);
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$this->_redirect($strBackUrl);
	exit;	
} else {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	$objUsers->add($intType, 1, $arrParams);
}
$this->_redirect(HOST_MEMBER);
exit;
?>