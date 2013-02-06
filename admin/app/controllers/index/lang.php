<?php
$objRequest = $this->_request;
$_SESSION[SESSION_LANGUAGE] = $objRequest->getParam('l', 'vi');
Functions::back();
exit;
?>