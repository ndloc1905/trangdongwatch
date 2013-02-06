<?php
include_once 'common/header.php';
$objCommon = new Common();
$this->view->arrConfig = $arrConfig = $objCommon->getAllConfig();
$this->view->arrStyle  = $arrStyle  = $objCommon->getAllStyle();
?>