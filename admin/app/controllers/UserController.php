<?php
class UserController extends Zend_Controller_Action
{

	function indexAction()
    {
		include_once 'user/index.php';
    }

	function updateAction()
    {
		include_once 'user/update.php';
    }

	function saveAction()
    {
		include_once 'user/save.php';
    }

	function doactionAction()
    {
		include_once 'user/doaction.php';
    }	
	
	function permissionAction()
    {
		include_once 'user/permission.php';
    }
	
	function savepermissionAction()
    {
		include_once 'user/savepermission.php';
    }
	
	function starAction()
    {
		include_once 'user/star.php';
    }
	
	function dostarAction()
    {
		include_once 'user/dostar.php';
    }
}