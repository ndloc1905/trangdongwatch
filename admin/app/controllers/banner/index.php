<?php
include_once 'common/header.php';
$intPage 	= intval($objRequest->getParam('page', 1));
$intPageId	= isset($arrParams['ppageid']) 	? intval($arrParams['ppageid']) : 0;
$intCol		= isset($arrParams['pcolumn']) 	? $arrParams['pcolumn'] : -1;
$intType	= isset($arrParams['ptype']) 	? $arrParams['ptype'] 	: 0;
$intLimit	= LIMIT_DEFAULT;
$objBanner	= new Banners();
$arrResult	= $objBanner->getAllAdmin($intPageId, $intCol, $intType, $intPage, $intLimit, $intTotal);
$this->view->arrResult = $arrResult;
$this->view->intPage 	= $intPage;
$this->view->intLimit 	= $intLimit;
$this->view->intTotal 	= $intTotal;
$this->view->intCol 	= $intCol;
$this->view->intPageId 	= $intPageId;
$this->view->intType 	= $intType;
/** Page **/
$arrPage = $objBanner->getAllPageAdmin();
$this->view->arrPage = $arrPage;
$this->view->intParams = isset($_GET['ppageid']) ? 1 : 0;
?>