<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$arrParams 	= $objRequest->getParams();
$strUploadFolder = ROOT_UPLOAD_USER;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
	$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 3*1024*1024);
	if ($arrUploadResult['error'] == '') {
		Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 200);
		$arrParams['pimage'] = $arrUploadResult['filename'];
	}
}
$objUser  = new Users();
$intError = $objUser->updateBasic($AppUI->id, $arrParams);
if ($intError == 0) {		
	$objAuth = new Auth();
	$objAuth->write($objUser->toObjUser($objUser->getById($AppUI->id)));
	Functions::setMsg('Cập nhật thông tin cá nhân thành công.');
	$this->_redirect(Url::url_user_info($AppUI->username));
}
exit;
?>