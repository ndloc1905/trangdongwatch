<?php
include_once 'common/header.php';
$strPostDate = $objRequest->getParam('pdate', null);
if ($strPostDate != '' && $strPostDate != null) {
	$strY = substr($strPostDate, 6, 4);
	$strM = substr($strPostDate, 3, 2);
	$strD = substr($strPostDate, 0, 2);
} else {
	$strY = date('Y');
	$strM = date('m');
	$strD = date('d');
}
if ($strY && $strM && $strD) {
	$arrResult = array();
	$strRootImage = ROOT_UPLOAD . '/uploads/image/' . $strY . '/' . $strM . '/' . $strD;
	if ($d1 = @opendir($strRootImage)) {
		while ($f = readdir($d1)) {
			if ($f == '.' || $f == '..') continue;
			$arrResult[] = array('filename'=>$f, 'fullpath'=>HOST_UPLOAD . '/uploads/image/' . $strY . '/' . $strM . '/' . $strD . '/' . $f);
		}
		closedir($d1);
		$this->view->arrResult = $arrResult;
	}
}
$this->view->strY = $strY;
$this->view->strM = $strM;
$this->view->strD = $strD;
?>