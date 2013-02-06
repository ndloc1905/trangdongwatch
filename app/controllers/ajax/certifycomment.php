<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intTopicId		= $objRequest->getParam('ptopicid', 0);
$intId			= $objRequest->getParam('id', 0);
$intType		= $objRequest->getParam('ptype', 3);
$objTopic		= new Topics();
$objComment		= new Comments();
$arrTopic		= $objTopic->getById($intTopicId);
if ($AppUI->id != $arrTopic['userid']) {
	echo $intError = 1;
	exit;
}
if ($arrTopic['flags'] == 2) {
	echo $intError = 2;
	exit;
}
$intError = $objComment->updateType($intId, $intType);
if ($intError == 0 && $intType == 3) {
	$arrComment  = $objComment->getById($intId);
	$strContent  = $arrComment['content'] . '<hr/>';
	$strContent .= '<img src="' . HOST . '/upload/image/nhangachbaohiem.gif"/>';
	$objComment->add($AppUI->id, $AppUI->username, $intTopicId, $strContent);
	$objTopic->updateSpecial($AppUI->id, $intTopicId);
}
echo $intError;
exit;
?>