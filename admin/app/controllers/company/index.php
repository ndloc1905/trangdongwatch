<?php
include_once 'common/header.php';
$objCompany = new Company();
$arrCompany	= $objCompany->getCompany();
$this->view->arrCompany = $arrCompany;
?>