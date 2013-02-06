<?php
include_once 'common/header.php';
$objSupport	= new Supports();
$arrResult 	= $objSupport->getAllAdmin();
$this->view->arrResult = $arrResult;
?>