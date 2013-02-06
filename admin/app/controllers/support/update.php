<?php
include_once 'common/header.php';
$intId = $objRequest->getParam('id', 0);
$objSupport	= new Supports();
$this->view->arrResult = $arrResult = $objSupport->getById($intId);
?>