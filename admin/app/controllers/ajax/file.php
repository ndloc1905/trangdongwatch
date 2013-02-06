<?php
$objRequest	= $this->_request;
$intNewsId 	= $objRequest->getParam('pnewsid', 0);
$objFile  	= new Files();
$this->view->arrResult = $arrResult = $objFile->getAll($intNewsId);
?>