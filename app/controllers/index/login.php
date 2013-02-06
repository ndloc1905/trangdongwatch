<?php
include_once 'common/header.php';
$strToUrl = $objRequest->getParam('ptourl', '');
if ($AppUI->id > 0) {	
	$this->_redirect(HOST);
}
$strRemember = Functions::getCookie(COOKIE_REMEMBER);
$arrRemember = explode('::', Functions::base64D($strRemember));
$this->view->arrRemember = $arrRemember;
if ($strToUrl == '') {
	$strToUrl = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST;
	$strToUrl = Functions::base64E($strToUrl);
}
$this->view->strToUrl = $strToUrl;
?>