<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objRequest = $this->_request;
$arrParams  = $objRequest->getParams();
if ($AppUI->id) {
	$strUploadFolder = Functions::mkDate(ROOT_UPLOAD_NEWS);
	if (isset($_FILES['ffile']) && $_FILES['ffile']['name']) {
		$arrUploadResult = Upload::process($_FILES['ffile'], $strUploadFolder, 10*1024*1024);
		$arrParams['pfile']  = date('Y/m/d') . '/' . $arrUploadResult['filename'];		
	}
	$objFile = new Files();
	$objFile->add($arrParams);
	echo 'success';
}
exit;
?>