<?php
include_once 'common/header.php';
include ROOT_LIB . "/smtp.php";
$strFrom 	 = $arrParams['pemail'];
$strTo 		 = 'donghoomega@gmail.com';
$strSubject  = 'Lien He Tu Website donghoomega.vn';
$strContent  = '';
$strContent .= '<br/>Nguoi Lien He: ' 	. $arrParams['pfullname'];
$strContent .= '<br/>So Dien Thoai: '	. $arrParams['pphone'];
$strContent .= '<br/>Email: '			. $arrParams['pemail'];
$strContent .= '<br/>Dia Chi: ' 		. $arrParams['paddress'];
$strContent .= '<br/>Cong Ty: ' 		. $arrParams['pcompany'];
$strContent .= '<br/>Noi Dung: ' 		. $arrParams['pcontent'];
SendMail($strFrom, $strTo, $strSubject, $strContent);

$objContact	= new Contacts();
$objContact->add($arrParams);
Functions::setMsg($objTranslate->_('msg_success_sendcontact'));
Functions::back();
exit;
?>