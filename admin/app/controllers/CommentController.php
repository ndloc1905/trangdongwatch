<?php
class CommentController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'comment/index.php';
	}

	function updateAction()
    {
		include_once 'comment/update.php';
	}

	function saveAction()
	{
		include_once 'comment/save.php';
	}

	function doactionAction()
	{
		include_once 'comment/doaction.php';
	}
}