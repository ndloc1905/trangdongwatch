<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objRequest = $this->_request;
$arrParams  = $objRequest->getParams();
if ($AppUI->id) {
	$strUploadFolder = ROOT_UPLOAD_PHOTO;
	if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
		$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 3*1024*1024);
		if ($arrUploadResult['error'] == '') {
			Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 650);						
			$arrParams['pimage'] = $arrUploadResult['filename'];
		}
	}
	$objPhoto = new Photos();
	$objPhoto->add($arrParams);
	echo 'success';
}
exit;
?>