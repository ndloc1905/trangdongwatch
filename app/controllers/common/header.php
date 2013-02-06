<?php
//echo "<pre>";
//var_dump($_SESSION);
//die();

$objView		= Zend_Registry::get('objView');
$objCache 		= Zend_Registry::get('objCache');
$AppUI 			= Zend_Registry::get('AppUI');
$strLanguage	= Zend_Registry::get('strLanguage');
$objTranslate 	= $t = Zend_Registry::get('objTranslate');
$objRequest 	= $this->_request;
$strPageTitle 	= '';
$intPageId		= 0;
$this->view->strController 	= $strController 	= $objRequest->getControllerName();
$this->view->strAction 		= $strAction 		= $objRequest->getActionName();
$this->view->arrParams 		= $arrParams 		= $objRequest->getParams();
include_once ($strController . '.header.php');
$this->view->arrCSS 		= isset($arrCSS) ? $arrCSS : null;
$this->view->arrJS 			= isset($arrJS) ? $arrJS : null;
$this->view->_strMsg 		= $strMsg = Functions::getMsg();
$this->view->_strErr 		= $strErr = Functions::getErr(); 
$this->view->strPageTitle 	= $strPageTitle;
if ($AppUI->id <= 0) {
	$strRemember = Functions::getCookie(COOKIE_REMEMBER);
	$this->view->arrRemember = $arrRemember = explode('::', Functions::base64D($strRemember));
}
$objCate 	= new Cates();
$arrCate 	= $objCate->getAll();
$arrParent 	= Functions::arrayFilter(0, $arrCate, 'parent_id');
$this->view->arrCate 	= Functions::arrayKeyValue($arrCate, 'cateid', 'name');
$this->view->arrParent 	= $arrParent;

$objContents = new Contents();
$this->view->arrContent5 = $arrContent5 = $objContents->getById(5);
$this->view->arrContent6 = $arrContent6 = $objContents->getById(6);

/** Banner **/
if ($intPageId > 0) {
	$objBanner = new Banners();
	$arrBanner = $objBanner->getByPageId($intPageId);
	$this->view->arrBanner0 = $arrBanner0 = Functions::arrayFilter(0, $arrBanner, 'col');
	$this->view->arrBanner1 = $arrBanner1 = Functions::arrayFilter(1, $arrBanner, 'col');
	$this->view->arrBanner3 = $arrBanner3 = Functions::arrayFilter(3, $arrBanner, 'col');
}
if ($AppUI->id > 0) {
	$objDbUser = new Users();
	$this->view->arrStatistic = $arrStatistic = $objDbUser->getStatistic($AppUI->id);
}
?>