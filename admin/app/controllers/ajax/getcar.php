<?php
$objRequest	= $this->_request;
$strCode	= $objRequest->getParam('pcode', '');
$objCars 	= new Cars();
$arrResult	= $objCars->getByCode($strCode);
echo $objRequest->getParam('callback') . '(' . Zend_Json::encode($arrResult) . ')';
exit;
?>