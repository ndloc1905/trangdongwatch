<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 0);
if ($intId > 0) {
	$objVideo = new Videos();	
	$this->view->arrResult = $arrResult = $objVideo->getById($intId);		
	$this->view->strImage  = $strImage  = $arrResult['image'];
	$this->view->strVideo  = $strVideo  = $arrResult['video'];
}
?>