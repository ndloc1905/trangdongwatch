<?php
include_once 'common/header.php';
$objComments = new UComments();
$intId = $objRequest->getParam('id', 0);
if ($intId > 0) {	
	$this->view->arrResult = $arrResult = $objComments->getById($intId); 	
}
?>