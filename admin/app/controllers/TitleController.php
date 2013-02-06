<?php
class TitleController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'title/index.php';
	}

	function updateAction()
    {
		include_once 'title/update.php';
	}

	function saveAction()
	{
		include_once 'title/save.php';
	}

	function doactionAction()
	{
		include_once 'title/doaction.php';
	}
}