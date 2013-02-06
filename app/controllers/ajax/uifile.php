<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView 	= Zend_Registry::get('objView');
if ($AppUI->id <= 0) exit;
$objRequest = $this->_request;
$intType	= $objRequest->getParam('ptype', 0);
Functions::_mkdir(ROOT_UPLOAD . '/image', $AppUI->username);
$objCommon	= new Common();
$arrIcon	= $objCommon->getAllFile(0, 1, 100);
$arrResult	= $objCommon->getAllToday($AppUI->id);
$this->view->arrIcon 	= $arrIcon;
$this->view->arrResult 	= $arrResult;
$this->view->intType 	= $intType;
?>