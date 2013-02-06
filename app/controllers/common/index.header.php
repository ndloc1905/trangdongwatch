<?php
switch ($strAction) {
	case 'index':
		$intPageId = 1;
		$arrJS = array (			
			'scripts/index.js'
		);
		$strPageTitle = 'Đồng hồ Omega';
		break;
	case 'forum':
		$intPageId = 2;	
		$strPageTitle = 'Diễn Đàn';		
		break;
	case 'search':
		$intPageId = 3;	
		$strPageTitle = 'Tìm kiếm';		
		break;
	case 'help':
		$intPageId = 1;
		$strPageTitle = 'Hướng dẫn sử dụng diễn đàn';	
		break;
	case 'rules':
		$intPageId = 1;
		$strPageTitle = 'Nội Quy Của Diễn đàn';
		break;
	case 'aboutus':
		$intPageId = 1;
		$strPageTitle = 'Giới thiệu';
		break;
	case 'contact':
		$intPageId = 1;
		$strPageTitle = 'Liên hệ BQT';
		break;
	case 'register':	
		$intPageId = 4;	
		$arrJS = array (
			'scripts/ajaxupload.3.5.js',
			'scripts/checkusername.js',
			'scripts/checkemail.js',
			'scripts/checkcaptcha.js',
			'scripts/register.js'
		);
		$strPageTitle = 'Đăng ký';
		break;
	case 'login':
		$intPageId = 4;
		$strPageTitle = 'Đăng nhập';
		break;		
	case 'forgetpassword':
		$intPageId = 1;
		$arrJS = array (
			'scripts/checkusername.js',
			'scripts/checkemail.js',
			'scripts/forgetpassword.js'
		);
		$strPageTitle = 'Quên mật khẩu';
		break;
	case 'getpassword':
		$intPageId = 1;
		$arrJS = array (
			'scripts/checkemail.js',
			'scripts/getpassword.js'
		);
		$strPageTitle = 'Đổi mật khẩu';
		break;
	case 'posttopic':
		$intPageId = 5;
		$arrJS = array (
			'scripts/ajaxupload.3.5.js',
			'scripts/checkcaptcha.js',
			'scripts/posttopic.js'
		);
		$strPageTitle = 'Đăng tin';
		break;
	case 'detail':
		$intPageId = 6;
		$arrJS = array (
			'scripts/ajaxupload.3.5.js',
			'scripts/detail.js'
		);
		$strPageTitle = 'Chi tiết Topic';
		break;	
}
?>