<?php
include_once 'common/header.php';
$intPage 		= $objRequest->getParam('page', 1);
$strKeyword 	= $objRequest->getParam('pkeyword', '');
$intParentId 	= $objRequest->getParam('pparentid', -1);
$intStatus 		= $objRequest->getParam('pstatus', -1);
$intLimit		= LIMIT_DEFAULT;
$objCate 		= new Cates();
$arrResult 		= $objCate->getAllAdmin($strKeyword, $intStatus, $intParentId, $intPage, $intLimit, $intTotal);
$this->view->arrResult 		= $arrResult;
$this->view->intPage 		= $intPage;
$this->view->intLimit 		= $intLimit;
$this->view->intTotal 		= $intTotal;
$this->view->intParentId 	= $intParentId;
?>