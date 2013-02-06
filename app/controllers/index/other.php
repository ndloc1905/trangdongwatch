<?php
include_once 'common/header.php';
if ($AppUI->id <= 0) {
	$this->_redirect(HOST_LOGIN);
}
$objCommon = new Common();
$this->view->arrBanner 		= $arrPosition 	= $objCommon->getAllBanner();
$this->view->arrDeadline  	= $arrDeadline  = $objCommon->getAllDeadline();
?>