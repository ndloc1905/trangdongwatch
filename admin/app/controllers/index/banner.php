<?php
include_once 'common/header.php';
$objCommon = new Common();
$this->view->arrBanner = $arrBanner = $objCommon->getAllBanner();
?>