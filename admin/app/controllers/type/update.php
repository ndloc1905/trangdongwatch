<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 0);
$objTypes = new Types();
if ($intId > 0) {
	$this->view->arrResult = $arrResult = $objTypes->getById($intId);
}
?>