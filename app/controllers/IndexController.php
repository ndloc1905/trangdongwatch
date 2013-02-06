<?php
class IndexController extends Zend_Controller_Action
{
	function chatAction()
    {
		include_once 'index/chat.php';
    }
	
	function langAction()
    {
		include_once 'index/lang.php';
    }
	
	function indexAction()
    {
		include_once 'index/index.php';
    }

	function registerAction()
    {
		include_once 'index/register.php';
    }
	
	function doregisterAction()
    {
		include_once 'index/doregister.php';
    }
	
	function activateAction()
    {
		include_once 'index/activate.php';
    }
	
	function logoutAction()
    {
		include_once 'index/logout.php';
    }
	
	function loginAction()
    {
		include_once 'index/login.php';
    }
	
	function dologinAction()
    {
		include_once 'index/dologin.php';
    }
	
	function detailAction()
    {
		include_once 'index/detail.php';
    }
	
	function postcommentAction()
    {
		include_once 'index/postcomment.php';
    }
	
	function aboutusAction()
    {
		include_once 'index/aboutus.php';
    }	
	
	function helpAction()
    {
		include_once 'index/help.php';
    }	
	
	function rulesAction()
    {
		include_once 'index/rules.php';
    }	
	
	function contactAction()
    {
		include_once 'index/contact.php';
    }
	
	function docontactAction()
    {
		include_once 'index/docontact.php';
    }
	
	function forgetpasswordAction()
    {
		include_once 'index/forgetpassword.php';
    }
	
	function doforgetpasswordAction()
    {
		include_once 'index/doforgetpassword.php';
    }
	
	function getpasswordAction()
    {
		include_once 'index/getpassword.php';
    }
	
	function dogetpasswordAction()
    {
		include_once 'index/dogetpassword.php';
    }
	
	function forumAction()
    {
		include_once 'index/forum.php';
    }
	
	function doposttopicAction()
    {
		include_once 'index/doposttopic.php';
    }
	
	function posttopicAction()
    {
		include_once 'index/posttopic.php';
    }
	
	function noticeAction()
    {
		include_once 'index/notice.php';
    }
	
	function redirectAction()
    {
		include_once 'index/redirect.php';
    }
	
	function errorAction()
    {
		include_once 'index/error.php';
    }
	
	function searchAction()
    {
		include_once 'index/search.php';
    }
	
	function loginopenidyahooAction()
    {
		include_once 'index/loginopenidyahoo.php';
    }
}