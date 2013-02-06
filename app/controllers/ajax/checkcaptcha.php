<?php
$objCaptcha	= Zend_Registry::get('objCaptcha');
$objRequest	= $this->_request;
$strCaptcha	= $objRequest->getParam('pcaptcha', '');
echo $objCaptcha->validate($strCaptcha);
exit;
?>