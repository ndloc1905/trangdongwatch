<?php
$objRequest	= $this->_request;
$strType	= $objRequest->getParam('type', 0);
$intId 		= $objRequest->getParam('id', 0);
$strFiled	= $objRequest->getParam('field', 0);
switch ($strType) {
	case 'banner':
		$objBanner = new Banners();
		$objBanner->clearImage($intId, $strFiled);		
}
exit;
?>