<?php
$objRequest	= $this->_request;
$intAlbum 	= $objRequest->getParam('palbum', 0);
$intPage	= $objRequest->getParam('page', 1);
$intLimit	= 32;
$objPhoto  	= new Photos();
if ($intAlbum > 0) {
	$arrResult 	= $objPhoto->getAllAdmin($intAlbum, $intPage, $intLimit, $intTotal);
	if ($arrResult == null && $intTotal > 0 && $intPage > 1) {
		$this->_redirect(HOST_PHOTO);
		exit;
	}
	$this->view->arrResult 	= $arrResult;
	$this->view->intTotal 	= $intTotal;
	$this->view->intLimit 	= $intLimit;
	$this->view->intPage 	= $intPage;
}
?>