<?php
class ToolController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'tool/index.php';
	}

	function updateAction()
    {
		include_once 'tool/update.php';
	}

	function saveAction()
	{
		include_once 'tool/save.php';
	}

	function doactionAction()
	{
		include_once 'tool/doaction.php';
	}
}