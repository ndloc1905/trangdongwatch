<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objTranslate	= Zend_Registry::get('objTranslate');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$intType		= $objRequest->getParam('ptype', 1);
$intTopicId		= $objRequest->getParam('ptopicid', 0);
$strContent		= $objRequest->getParam('pcontent', '');
$strImage		= $objRequest->getParam('pimage', '');
$intId			= $objRequest->getParam('id', 0);
$objCommon		= new Common();
$objComment		= new Comments();
$objTopic		= new Topics();
if ($intId == 0) {
	$arrTopic = $objTopic->getById($intTopicId);
	if ($arrTopic['flags'] == 2) {
		echo $intError = 8;
		exit;
	}
	if ($arrTopic['userid'] == $AppUI->id) {
		$intError = $objCommon->checkPost($AppUI->id, 2);
		if ($intError > 0) {
			echo $intError;
			exit;
		}
	} elseif ($intType == 2) {
		if ($objComment->checkSpecial() == 1) {
			echo 10;
			exit;
		}
	}
	$intId = $objComment->add($AppUI->id, $AppUI->username, $intTopicId, $strContent, $intType);
	if ($intId > 0) {
		$intError = 0;
	}
} else {
	$intError = $objComment->updateFE($AppUI->id, $intId, $intTopicId, $strContent, $intType);
}
echo $intError;
exit;
?>