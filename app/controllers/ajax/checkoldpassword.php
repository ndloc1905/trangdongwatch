<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objRequest		= $this->_request;
$strPassword	= $objRequest->getParam('ppassword', '');
if ($strPassword == $AppUI->password) {
	echo 1;
} else {
	echo 0;
}
exit;
?>