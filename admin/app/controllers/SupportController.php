<?php
class SupportController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'support/index.php';
    }

	function updateAction()
    {
		include_once 'support/update.php';
    }

	function saveAction()
    {
		include_once 'support/save.php';
    }
	
	function doactionAction()
    {
		include_once 'support/doaction.php';
    }		
}