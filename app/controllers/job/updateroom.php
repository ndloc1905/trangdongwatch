<?php
//echo Functions::detectIP() . ' ' . $_SERVER['REMOTE_ADDR']; exit;
$AppUI 		= Zend_Registry::get('AppUI');
$objView	= Zend_Registry::get('objView');
$objConfig 	= Zend_Registry::get('objConfig');
$objJob 	= new Jobs();
print_r($objJob->updateRoom());
echo 'Job execute successfully!';
exit;
?>