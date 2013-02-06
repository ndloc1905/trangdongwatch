<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objRequest = $this->_request;
$arrParams  = $objRequest->getParams();
$intType	= isset($arrParams['ptype']) ? $arrParams['ptype'] : 1;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
	if ($intType == 1) {		
		$strSessionName = SESSION_UPLOAD_AVATAR;
	} elseif ($intType == 2) { 
		$strSessionName = SESSION_UPLOAD_TIMAGE;
	} elseif ($intType == 3) { 
		$strSessionName = SESSION_UPLOAD_CIMAGE;
	}
	$arrUploadResult = Upload::process($_FILES['fimage'], ROOT_UPLOAD_TEMP, 10*1024*1024);
	if ($arrUploadResult['error'] == '') {
		Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 600);
		if (isset($_SESSION[$strSessionName]) && $_SESSION[$strSessionName] != '') {
			@unlink(ROOT_UPLOAD_TEMP . '/' . $_SESSION[$strSessionName]);
		}
		$_SESSION[$strSessionName] = $arrUploadResult['filename'];
		echo $arrUploadResult['filename'];
	}
}
exit;
?>