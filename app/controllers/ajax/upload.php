<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$arrParams  = $objRequest->getParams();
$intType	= isset($arrParams['ptype']) ? $arrParams['ptype'] : 1;
if (isset($_FILES['fimage']) && $_FILES['fimage']['name']) {
	if ($intType == 1) {
		$strSessionName  = SESSION_UPLOAD_AVATAR;
		$strUploadFolder = ROOT_UPLOAD_TEMP;
		$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 10*1024*1024);
		if ($arrUploadResult['error'] == '') {
			Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 165);
			if (isset($_SESSION[$strSessionName]) && $_SESSION[$strSessionName] != '') {
				@unlink($strUploadFolder . '/' . $_SESSION[$strSessionName]);
			}
			echo $_SESSION[$strSessionName] = $arrUploadResult['filename'];
		}
		exit;
	}

	$strUploadFolder = ROOT_UPLOAD_COMMENT . '/' . $AppUI->username;
	$arrUploadResult = Upload::process($_FILES['fimage'], $strUploadFolder, 10*1024*1024);
	if ($arrUploadResult['error'] == '') {
		Functions::thumbImage($arrUploadResult['fullpath'], $arrUploadResult['fullpath'], 600);
		$objCommon = new Common();
		$objCommon->addFile($AppUI->id, $AppUI->username, $arrUploadResult['filename']);
		if ($arrUploadResult['size'] < 1204*50) {
			$arrResult = $objCommon->getAllToday($AppUI->id);
			$this->view->arrResult = $arrResult;		
			$html = $objView->fetch('ajax/file.tpl');
			echo $html;
		} else {
			echo '';
		}
	}
	exit;

	if ($intType == 1) {
		$strSessionName = SESSION_UPLOAD_AVATAR;
	} elseif ($intType == 2) {
		$strSessionName = SESSION_UPLOAD_TIMAGE;
	} elseif ($intType == 3) {
		$strSessionName  = SESSION_UPLOAD_CIMAGE;
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