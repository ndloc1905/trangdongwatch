<?php
include_once 'common/header.php';
$arrImage = explode(';', $arrParams['pfilename']);
if ($arrImage) {
	$strRootImage = ROOT_UPLOAD . '/uploads/image/';
	for ($i = 0; $i < count($arrImage);  $i++) {
		@unlink($strRootImage . $arrImage[$i]);
	}
}
Functions::setMsg($objTranslate->_('msg_success_action'));
Functions::back();
exit;
?>