<?php
date_default_timezone_set('Asia/Saigon');
header ("Expires: Mon, 26 Jul 2009 05:00:00 GMT");
header ("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
header ("Cache-Control: no-cache, must-revalidate, no-store, post-check=0, pre-check=0");
header ("Pragma: no-cache");
ob_start();
require_once 'base.php';
include ROOT_LIB . "/smtp.php";
$strFrom = 'donghoomega@gmail.com'; 
$strTo = 'thailvn@gmail.com';
$strSubject = 'Hello';
$strContent = 'Hello';
SendMail($strFrom, $strTo, $strSubject, $strContent);
ob_end_flush();
?>