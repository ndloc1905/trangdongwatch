<?php
$objRequest		= $this->_request;
$intParentId 	= intval($objRequest->getParam('pparentid', 0));
$intCollection 	= intval($objRequest->getParam('pcollection', 0));
if ($intParentId > 0) {	
	$objCate = new Cates();		
	$arrCate = $objCate->getAllAdmin($intParentId);	
	$this->view->arrCate = $arrCate;
}
?>