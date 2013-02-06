<?php
class CateController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'cate/index.php';
	}

	function updateAction()
    {
		include_once 'cate/update.php';
	}

	function saveAction()
	{
		include_once 'cate/save.php';
	}

	function doactionAction()
	{
		include_once 'cate/doaction.php';
	}
}