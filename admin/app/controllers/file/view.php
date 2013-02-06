<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 0);
if ($intId > 0) {
	$objVideo  = new Videos();
	$arrResult = $objVideo->getById($intId);
	$this->view->arrResult = $arrResult;
}
?>