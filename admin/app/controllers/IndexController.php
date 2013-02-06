<?php
class IndexController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'index/index.php';
    }

	function loginAction()
    {
		include_once 'index/login.php';
	}

	function logoutAction()
    {
		include_once 'index/logout.php';
	}

	function langAction()
    {
		include_once 'index/lang.php';
	}

	function changepasswordAction()
    {
		include_once 'index/changepassword.php';
	}

	function dochangepasswordAction()
    {
		include_once 'index/dochangepassword.php';
	}

	function imagemanagerAction()
    {
		include_once 'index/imagemanager.php';
	}

	function deleteimageAction()
    {
		include_once 'index/deleteimage.php';
    }
	
	function bannerAction()
    {
		include_once 'index/banner.php';
    }
	
	function savebannerAction()
    {
		include_once 'index/savebanner.php';
    }	
	
	function statisticsAction()
    {
		include_once 'index/statistics.php';
    }
}