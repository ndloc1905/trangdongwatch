<?php
require_once ROOT_LIB . '/Conf/config.php';
define('HOST_LOGIN'					, HOST_ADMIN . '/login');
define('HOST_LOGOUT'				, HOST_ADMIN . '/logout');
define('HOST_LANG'					, HOST_ADMIN . '/index/lang');
define('HOST_CHANGEPASSWORD'		, HOST_ADMIN . '/index/changepassword');
define('HOST_COMPANY'				, HOST_ADMIN . '/company');
define('HOST_CONTENT'				, HOST_ADMIN . '/content');
define('HOST_CONTACT'				, HOST_ADMIN . '/contact');
define('HOST_SUPPORT'				, HOST_ADMIN . '/support');

define('HOST_BANNER'				, HOST_ADMIN . '/banner');
define('HOST_USER'					, HOST_ADMIN . '/user');
define('HOST_MEMBER'				, HOST_ADMIN . '/member');
define('HOST_CATE'					, HOST_ADMIN . '/cate');
define('HOST_TOPIC'					, HOST_ADMIN . '/topic');
define('HOST_UCOMMENT'				, HOST_ADMIN . '/ucomment');
define('HOST_COMMENT'				, HOST_ADMIN . '/comment');
define('HOST_MB'					, HOST_ADMIN . '/mb');
define('HOST_RATING'				, HOST_ADMIN . '/rating');
define('HOST_TITLE'					, HOST_ADMIN . '/title');
define('HOST_TOOL'					, HOST_ADMIN . '/tool');
define('HOST_TYPE'					, HOST_ADMIN . '/type');
define('HOST_FILE'					, HOST_ADMIN . '/file');

define('HOST_NOPERMISSION'			, HOST_ADMIN);

define('SIZE_IMAGE_MEMBER'			, 100);
define('LIMIT_DEFAULT'				, 10);
define('LIMIT_MAX'					, 10000);

define('F_USER'						, 1);
define('F_COMPANY'					, 2);
define('F_CAR'						, 3);
define('F_MAINTENANCE'				, 4);
define('F_RENT'						, 5);
define('F_BANNER'					, 6);
?>