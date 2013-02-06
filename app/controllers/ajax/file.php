<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView 	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$intType	= $objRequest->getParam('ptype', 0);
$objCommon	= new Common();
$arrResult	= $objCommon->getAllToday($AppUI->id);
$this->view->arrResult 	= $arrResult;
$this->view->intType 	= $intType;
?>