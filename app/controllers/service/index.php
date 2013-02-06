<?php
$oauth_callback = HOST.'/service/contact';
$redirect = Service_Yahoo::getInstance()->getRequestTokenKey($oauth_callback);
print_r($redirect); exit;
try {
	$session = new Zend_Session_Namespace();
} catch(Exception $e) {
	echo $e->getMessage();
}
$this->_redirect($redirect);
exit;
?>