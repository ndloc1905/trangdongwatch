<?php
$objRequest	= $this->_request;
$arrParams	= $objRequest->getParams();
$objProduct	= new Products();
$intId		= isset($arrParams['id']) ? intval($arrParams['id']) : 0;
echo $objProduct->checkProductCode($arrParams['pcode'], $intId);
exit;
?>