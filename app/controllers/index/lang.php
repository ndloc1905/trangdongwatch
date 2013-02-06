<?php
$objRequest = $this->_request;
$strLang = $objRequest->getParam('l', 'vi');
if (!isset($_SESSION[SESSION_LANGUAGE]) || $_SESSION[SESSION_LANGUAGE] != $strLang) {
	$_SESSION[SESSION_LANGUAGE]	= $strLang;	
}
Functions::back();
exit;
?>