<?php
include_once 'common/header.php';
$objContent = new Contents();
$this->view->arrResult = $arrResult = $objContent->getById(1);
//echo Functions::base64E('timemsg2011');
?>