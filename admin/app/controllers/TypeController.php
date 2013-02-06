<?php
class TypeController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'type/index.php';
	}

	function updateAction()
    {
		include_once 'type/update.php';
	}

	function saveAction()
	{
		include_once 'type/save.php';
	}

	function doactionAction()
	{
		include_once 'type/doaction.php';
	}
}