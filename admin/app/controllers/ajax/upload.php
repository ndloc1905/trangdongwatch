<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$arrParams  = $objRequest->getParams();
$intType	= isset($arrParams['ptype']) ? $arrParams['ptype'] : 1;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {	
	if ($intType == 3) {
		$strUploadFolder = ROOT_UPLOAD_IMAGE;
		$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 10*1024*1024);
		if ($arrUploadResult['error'] == '') {
			$objCommon = new Common();
			$objCommon->addFile($AppUI->id, $AppUI->username, $arrUploadResult['filename'], 2);
		}
		exit;
	}
	if ($intType == 4) {
		$strUploadFolder = ROOT_UPLOAD_BANNER;
		$strSessionName  = SESSION_UPLOAD_BANNER;
	}
	$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 10*1024*1024);
	if ($arrUploadResult['error'] == '') {
		if (isset($_SESSION[$strSessionName]) && $_SESSION[$strSessionName] != '') {
			@unlink($strUploadFolder . '/' . $_SESSION[$strSessionName]);
		}			
		echo $_SESSION[$strSessionName] = $arrUploadResult['filename'];
	}
	exit;
}
exit;
?>