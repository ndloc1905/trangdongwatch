<?php
$objView 	= Zend_Registry::get('objView');
$objRequest	= $this->_request;
$arrParams	= $objRequest->getParams();
$strValue	= $objRequest->getParam('val', '');
$strLst		= $objRequest->getParam('lst', '');
$objCars 	= new Cars();
$arrResult	= $objCars->search($strValue);
$this->view->strLst 	= $strLst;
$this->view->arrResult 	= $arrResult;
$html = $objView->fetch('ajax/listcar.tpl');
echo $objRequest->getParam('callback') . '(' . Zend_Json::encode($html) . ')';
exit;
?>