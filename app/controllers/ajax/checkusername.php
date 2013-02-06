<?php
$objRequest	= $this->_request;
$arrParams	= $objRequest->getParams();
$objUsers 	= new Users();
$intUserId	= isset($arrParams['puserid']) ? intval($arrParams['puserid']) : 0;
echo $objUsers->checkUsername($arrParams['pusername'], $intUserId);
exit;
?>