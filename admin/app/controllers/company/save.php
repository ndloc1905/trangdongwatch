<?php
include_once 'common/header.php';
$objCompany = new Company();
if ($objCompany->updateCompany($arrParams)) {
	Functions::setMsg($objTranslate->_('msg_success_action'));
	Functions::back();
}
exit;
?>