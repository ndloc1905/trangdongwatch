<?php
include_once 'common/header.php';
if ($strMsg == '' && $strErr == '') {
	$this->_redirect(HOST);
}
if ($strMsg) {
	$strNotice = $strMsg;
	$this->view->strNotice = $strNotice;
	$this->view->_strMsg = '';
} else {
	$strNotice = $strErr;
	$this->view->strNotice = $strNotice;
	$this->view->_strErr = '';
}
$objAdvBanners = new AdvBanners();
$arrOtherAdv = $objAdvBanners->getAll(2);
if ($arrOtherAdv) {	
	$intMax2 = count($arrOtherAdv) - 1;
	if ($intMax2 > 0 && isset($_SESSION['ERROR_OTHER_ADV'])) {
		if ($_SESSION['ERROR_OTHER_ADV'] + 1 <= $intMax2) {
			$_SESSION['ERROR_OTHER_ADV'] = $_SESSION['ERROR_OTHER_ADV'] + 1;
		} else {
			$_SESSION['ERROR_OTHER_ADV'] = 0;
		}		
	} else {
		$_SESSION['ERROR_OTHER_ADV'] = rand(0, $intMax2);;
	}
	$this->view->arrOtherAdv = $arrOtherAdv[$_SESSION['ERROR_OTHER_ADV']];
}
?>