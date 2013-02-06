<?php
class UcommentController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'ucomment/index.php';
    }

	function updateAction()
    {
		include_once 'ucomment/update.php';
    }

	function saveAction()
    {
		include_once 'ucomment/save.php';
    }

	function doactionAction()
    {
		include_once 'ucomment/doaction.php';
    }
}