<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intLimit		= LIMIT_DEFAULT;
$intPage 		= $objRequest->getParam('page', 1);
$intUserId 		= $objRequest->getParam('pownerid', 0);
$objComment		= new UComments();
$arrResult		= $objComment->getAll($intUserId, $intPage, $intLimit, $intTotal);
$this->view->strUrl 	= HOST . '/ajax/ucomment?pownerid=' . $intUserId . '&';
$this->view->arrResult 	= $arrResult;
$this->view->intTotal 	= $intTotal;
$this->view->intLimit 	= $intLimit;
$this->view->intPage 	= $intPage;
?>