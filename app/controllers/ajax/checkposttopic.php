<?php
$AppUI 		= Zend_Registry::get('AppUI');
$objRequest	= $this->_request;
$arrParams	= $objRequest->getParams();
$objTitles 	= new Titles();
$objUsers 	= new Users();
$arrUser	= $objUsers->getById($AppUI->id);
$intTopics	= intval($arrUser['topics']);
$intTitleId	= intval($arrUser['titleid']);
if ($arrUser['certify'] == 0) {
	if ($intTopics >= 2) {
		echo $intError = 2;
		exit;
	}
}
if ($arrUser['certify'] >= 1) {
	if ($intTitleId == 0 && $intTopics >= 5) {
		echo $intError = 5;
		exit;
	}
	if (($intTitleId == 3 || $intTitleId == 4) && $intTopics >= 10) {
		echo $intError = 10;
		exit;
	}
	if ($intTitleId == 5 && $intTopics >= 15) {
		echo $intError = 15;
		exit;
	}
}
echo 0;
exit;
?>