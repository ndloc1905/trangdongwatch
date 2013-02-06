<?php
include_once 'common/header.php';
$objComments = new Comments();
$intId = $objRequest->getParam('id', 0);
$intTopicId = $objRequest->getParam('ptopicid', 0);
if ($intId > 0) {	
	$this->view->arrResult = $arrResult = $objComments->getById($intId); 
	$intTopicId = $arrResult['topicid'];
}
$this->view->intTopicId = $intTopicId;
?>