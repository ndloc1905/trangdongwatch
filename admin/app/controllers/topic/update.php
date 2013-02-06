<?php
include_once 'common/header.php';
$objTopics = new Topics();
$intId = $objRequest->getParam('id', 0);
if ($intId > 0) {	
	$this->view->arrResult = $arrResult = $objTopics->getById($intId);
}
?>