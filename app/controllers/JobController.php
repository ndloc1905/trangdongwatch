<?php
class JobController extends Zend_Controller_Action
{
	function hideuserAction()
    {
		include 'job/hideuser.php';
    }
	
	function delmsgAction()
    {
		include 'job/delmsg.php';
    }
	
	function updateroomAction()
    {
		include 'job/updateroom.php';
    }

}