<?php
class FileController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'file/index.php';
	}
	
	function doactionAction()
    {
		include_once 'file/doaction.php';
	}
}