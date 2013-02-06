<?php
include_once 'common/header.php';
if ($AppUI->id <= 0) {
	$this->_redirect(HOST);
}
$strOldImage = ''; 
$strUploadFolder = ROOT_UPLOAD_TOPIC;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
	$strOldImage = $arrParams['pimage'];
	$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 3*1024*1024);
	if ($arrUploadResult['error'] == '') {
		Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 600);
		$arrParams['pimage'] = $arrUploadResult['filename'];
	}
}
$objTopics = new Topics();
$intId = intval($arrParams['id']);
if ($intId > 0) {
	$objTopics->update($AppUI->id, $intId, $arrParams, "1");
	if ($strOldImage) {
		@unlink($strUploadFolder . '/' . $strOldImage);
	}
	Functions::setMsg('Đã cập nhật thành công.');
	$this->_redirect(Url::url_topic_detail($intId, $arrParams['ptitle']));
	exit;
} else {	
	$intId = $objTopics->add($AppUI->id, $arrParams);
	Functions::setMsg('Đã đăng tin thành công');	
}
$this->_redirect(Url::url_topic_detail($intId, $arrParams['ptitle']));
exit;
?>