<?php
$objView	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$objUser 	= new Users();
$this->view->AppUI 			= $AppUI = Zend_Registry::get('AppUI');
$this->view->t 				= $t = $objTranslate = Zend_Registry::get('objTranslate');
$this->view->l 				= $l = $strLanguage = Zend_Registry::get('strLanguage');
$this->view->objCache 		= $objCache = Zend_Registry::get('objCache');
$this->view->strController 	= $strController = $objRequest->getControllerName();
$this->view->strAction 		= $strAction = $objRequest->getActionName();
$this->view->arrParams 		= $arrParams = $objRequest->getParams();
$this->view->arrPermission	= $arrPermission = Functions::arrayKeyValue($objUser->getPermission($AppUI->id), 'id', 'bit');
$strBackUrl = isset($arrParams['pbackurl']) ? $arrParams['pbackurl'] : '';
if ($strBackUrl) {
	$strBackUrl = Functions::base64D($strBackUrl);
} else {
	$strBackUrl = HOST_ADMIN;
}
include_once ($strController . '.header.php');
$this->view->arrCSS  = (isset($arrCSS) ? $arrCSS : null);
$this->view->arrJS 	 = (isset($arrJS) ? $arrJS : null);
$this->view->_strMsg = Functions::getMsg();
$this->view->_strErr = Functions::getErr();
?>