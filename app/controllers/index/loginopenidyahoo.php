<?php
include_once 'common/header.php';
require_once ROOT_LIB . "/openid/common.php";
require_once ROOT_LIB . "/openid/openid.php";
$openid = new OpenIdHelper();
unset($_SESSION[OPENID_AUTH]);

//if ($_SESSION[OPENID_AUTH] == true) {
	//header('Location: ' . $openid->getReturnTo('retricted.php'));
//} else {
	$identifierUrl = 'https://me.yahoo.com';
	//$identifierUrl = $openid->checkOpenIdIdentifier();
	if (null === $identifierUrl) {
		die($openid->getMessage());
	} else {
		try {
			$openid->auth($identifierUrl, $openid->getReturnTo('oid-result.php'), $openid->getTrustRoot(),
			array('email', 'fisrtname', 'lastname'));
		}
		catch(Exception $e) {
			die($e->getMessage());
		}
	}
//}
exit;
?>