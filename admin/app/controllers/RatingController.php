<?php
class RatingController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'rating/index.php';
	}

	function updateAction()
    {
		include_once 'rating/update.php';
	}

	function saveAction()
	{
		include_once 'rating/save.php';
	}

	function doactionAction()
	{
		include_once 'rating/doaction.php';
	}
}