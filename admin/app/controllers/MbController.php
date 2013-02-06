<?php
class MbController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'mb/index.php';
	}

	function updateAction()
    {
		include_once 'mb/update.php';
	}

	function saveAction()
	{
		include_once 'mb/save.php';
	}

	function doactionAction()
	{
		include_once 'mb/doaction.php';
	}
}