<?php
include_once 'common/header.php';
$objCommon = new Common();
$this->view->arrDeadline = $arrDeadline = $objCommon->getAllDeadline();
?>