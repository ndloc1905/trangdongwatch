<?php
class MemberController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'member/index.php';
    }

	function updateAction()
    {
		include_once 'member/update.php';
    }

	function saveAction()
    {
		include_once 'member/save.php';
    }

	function doactionAction()
    {
		include_once 'member/doaction.php';
    }

	function starAction()
    {
		include_once 'member/star.php';
    }	
	
	function requestAction()
    {
		include_once 'member/request.php';
    }
}