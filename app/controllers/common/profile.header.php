<?php
$intPageId   = 1;
$strUserName = $objRequest->getParam('username');
if ($strUserName == '') {
	$strUserName = $AppUI->username;
}
if ($strUserName != '') {
	$objDBUser = new Users();
	$arrUser = $objDBUser->getByUserName($strUserName);
	$this->view->arrUser = $arrUser;
	$this->view->objUser = $objUser = $objDBUser->toObjUser($arrUser);
}
switch ($strAction) {
	case 'index':
		$arrJS = array (		
			'scripts/profile.js'
		);	
		$strPageTitle = 'Nhà tôi';
		break;
	case 'topic':
		$arrJS = array (		
			'scripts/topic.js'
		);	
		$strPageTitle = 'Tin đã đăng';
		break;
	case 'account':
		$arrJS = array (		
			'scripts/ajaxupload.3.5.js',		
			'scripts/checkemail.js',
			'scripts/account.js'
		);
		$strPageTitle = 'Tài khỏan';		
		break;
	case 'info':			
		$strPageTitle = 'Thông tin cá nhân';
		break;
	case 'rating':			
		$strPageTitle = 'Nhận xét';
		break;
	case 'inbox':
		$arrJS = array (		
			'scripts/mailbox.js'
		);	
		$strPageTitle = 'Thư đến';
		break;
	case 'outbox':
		$arrJS = array (		
			'scripts/mailbox.js'
		);	
		$strPageTitle = 'Thư đã gửi';
		break;
	case 'viewmail':
		$arrJS = array (		
			'scripts/mailbox.js'
		);	
		$strPageTitle = 'Xem thư';
		break;
}
?>