<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intPage		= $objRequest->getParam('page', 1);
$intLimit		= 20;
$objCate 		= new Cates();
$objTopic		= new Topics();
$arrResult 		= $objTopic->getTop($intType = 2, $intParentId = 0, $intPage, $intLimit, $intTotal);
$this->view->arrResult 	= $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
$this->view->arrCate 	= Functions::arrayKeyValue($objCate->getAll(), 'cateid', 'name');
?>