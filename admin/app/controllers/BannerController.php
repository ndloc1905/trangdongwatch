<?php
class BannerController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'banner/index.php';
	}

	function updateAction()
    {
		include_once 'banner/update.php';
	}

	function saveAction()
    {
		include_once 'banner/save.php';
	}

	function doactionAction()
    {
		include_once 'banner/doaction.php';
	}
}