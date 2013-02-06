<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$strUserName	= $objRequest->getParam('pusername', 0);
$intPoint		= $objRequest->getParam('ppoint', 0);
$strContent		= $objRequest->getParam('pcontent', '');
$strContent2	= $objRequest->getParam('pcontent2', '');
$objRating  	= new URatings();
$objUser 		= new Users();
$arrUser		= $objUser->getByUserName($strUserName);
$intError 		= $objRating->add($AppUI->id, $AppUI->username, $arrUser['id'], $arrUser['username'], $intPoint, $strContent, $strContent2);
echo $intError;
exit;
?>