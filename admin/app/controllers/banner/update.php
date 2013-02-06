<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 0);
$objBanner = new Banners();
$strBanner = '';
if ($intId > 0) {	
	$this->view->arrResult = $arrResult = $objBanner->getById($intId);
	$strBanner = $arrResult['banner'];
}
$this->view->arrPage   = $arrPage   = $objBanner->getAllPageAdmin($intId);
$this->view->strBanner = $strBanner = isset($_SESSION[SESSION_UPLOAD_BANNER]) ? $_SESSION[SESSION_UPLOAD_BANNER] : $strBanner;
?>