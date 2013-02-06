<?php
include_once 'common/header.php';
$intCateId 	= $objRequest->getParam('id', 0);
$objCate = new Cates();
if ($intCateId > 0) {
	$this->view->arrResult = $arrResult = $objCate->getById($intCateId);
}
?>