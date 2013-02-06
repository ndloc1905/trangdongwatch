<?php
include_once 'common/header.php';
$objContent	= new Contents();
$objContent->update($arrParams);
Functions::setMsg($objTranslate->_('msg_success_action'));		
Functions::back();
exit;
?>