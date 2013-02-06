<?php
include_once 'common/header.php';
$intUserId	= $arrParams['id'];
$arrView	= isset($arrParams['view']) 	? $arrParams['view'] 	: array();
$arrUpdate	= isset($arrParams['update']) 	? $arrParams['update'] 	: array();
$objUsers 	= new Users();
$objUsers->savePermission($intUserId, $arrView, $arrUpdate);
Functions::setMsg($objTranslate->_('msg_success_action'));
Functions::back();
exit;
?>