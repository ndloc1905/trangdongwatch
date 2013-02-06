<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objView 	= Zend_Registry::get('objView');
$objRequest = $this->_request;
$arrParams	= $objRequest->getParams();
$objCommon	= new Common();
$objTopics	= new Topics();
$intId = intval($arrParams['id']);
global $ops;
if ($intId > 0) {
	$op = null;
	foreach($ops as $op){
		if ($op == $AppUI->username) {
			$op = "1";
			break;
		}
	}	
	
	$objTopics->update($AppUI->id, $intId, $arrParams, "1");
} else {
	$intError = $objCommon->checkPost($AppUI->id, 1);
	if ($intError > 0) {
		echo $intError . ';';
		exit;
	}
	$intId = $objTopics->add($AppUI->id, $AppUI->username, $arrParams);
}
if ($intId > 0) {
	$strUrl = Url::url_topic_detail($intId, $arrParams['ptitle']);
	echo '0;' . $strUrl;
}
exit;
?>