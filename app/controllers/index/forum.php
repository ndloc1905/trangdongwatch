<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$intCateId 		= $objRequest->getParam('id');
$intParentId 	= 0;
$intLimit		= LIMIT_DEFAULT;
$objTopics 		= new Topics();
if ($intCateId > 0) {
	$arrCateDetail = $objCate->getById($intCateId);	
	if ($arrCateDetail['parent_id'] > 0) {
		$intParentId = $arrCateDetail['parent_id'];
	} else {
		$intParentId = $intCateId;
		$intCateId	 = 0;
	}	
	$this->view->intParentId 	= $intParentId;	
	$this->view->intCateId 		= $intCateId;		
	$this->view->arrCateDetail 	= $arrCateDetail;
	$this->view->arrSubCate 	= $arrSubCate = $objCate->getAll($intParentId);	

	$this->view->strPageTitle	= $arrCateDetail['name'];
}
$arrResult = $objTopics->getAll(0, $intParentId, $intCateId, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;	
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
if ($intPage<2){
$objTopics 	 = new Topics();
$arrNewTopic = $objTopics->getTop($intType = 1, $intParentId, 1, LIMIT_DEFAULT);
$this->view->arrNewTopic = $arrNewTopic;
}
?>