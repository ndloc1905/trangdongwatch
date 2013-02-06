<?php
class ContentController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'content/index.php';
	}

	function updateAction()
    {
		include_once 'content/update.php';
	}

	function saveAction()
    {
		include_once 'content/save.php';
	}

	function doactionAction()
    {
		include_once 'content/doaction.php';
	}
}