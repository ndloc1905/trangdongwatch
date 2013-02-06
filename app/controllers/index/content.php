<?php
include_once 'common/header.php';
$intId 		= $objRequest->getParam('id', 1);
$objContent	= new Contents();
$arrResult 	= $objContent->getById($intId);
$this->view->arrResult = $arrResult;
?>