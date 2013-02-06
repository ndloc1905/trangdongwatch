<?php
include_once 'common/header.php';
$objTopics = new Topics();
$arrNewTopic = $objTopics->getTop($intType = 1, $intParentId = 0, 1, 10);
$this->view->arrNewTopic = $arrNewTopic;
?>