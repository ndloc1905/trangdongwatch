<?php
include_once 'common/header.php';
$intPage 	= $objRequest->getParam('page', 1);
$intId 		= $objRequest->getParam('id', 0);

$objUsers  	= new Users();
$objTopics 	= new Topics();
$objComment	= new Comments();
$objTitle	= new Titles();
$objTopics->updateViews($intId);
$arrDetail = $objTopics->getById($intId);
global $ops;
if ($arrDetail) {
	$intUserId = $arrDetail['userid'];
	$arrUser = $objUsers->getById($intUserId);
	$this->view->arrUser = $arrUser;
	$this->view->objUser = $objUser = $objUsers->toObjUser($arrUser);
	$this->view->arrTitle = $arrTitle = $objTitle->getAll($intUserId);
	$intLimit   = 10;
	$arrComment = $objComment->getAll($intId, $intPage, $intLimit, $intTotal);
	$this->view->arrComment  = $arrComment;
	$this->view->intTotal 	 = $intTotal;
	$this->view->intLimit 	 = $intLimit;
	$this->view->intPage 	 = $intPage;
	$this->view->arrCommentSpecial = $arrCommentSpecial = $objComment->getAllSpecial($intId);
	$this->view->strPageTitle = $arrDetail['title'];
	//if (in_array($AppUI->username, $ops) {$this->view->op = true;}
	//var_dump($ops);
	foreach($ops as $op){
		if ($op == $AppUI->username) {
			$this->view->op = true;	
			break;
		}
	}
}
$this->view->arrDetail   = $arrDetail;
$this->view->intParentId = $arrDetail['parentid'];
$this->view->arrContent3 = $arrContent3 = $objContents->getById(3);

?>