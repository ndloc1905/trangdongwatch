<?php
$objRequest	= $this->_request;
$strCode	= $objRequest->getParam('pcode', '');
$objUsers 	= new Users();
$arrResult	= $objUsers->getByCode($strCode);
echo $objRequest->getParam('callback') . '(' . Zend_Json::encode($arrResult) . ')';
exit;
?>