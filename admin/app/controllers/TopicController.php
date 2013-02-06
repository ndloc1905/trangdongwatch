<?php
class TopicController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'topic/index.php';
    }

	function updateAction()
    {
		include_once 'topic/update.php';
    }

	function saveAction()
    {
		include_once 'topic/save.php';
    }

	function doactionAction()
    {
		include_once 'topic/doaction.php';
    }
}