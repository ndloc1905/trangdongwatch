<?php
include_once 'common/header.php';
$intAction = $objRequest->getParam('paction', 0);
$objJob = new Jobs();		
if ($intAction == 1) {
	$intError = $objJob->deleteTopic();				
} elseif ($intAction == 2) {
	$intError = $objJob->deleteMailBox();				
}
Functions::setMsg($objTranslate->_('msg_success_action'));
Functions::back();
exit;
?>