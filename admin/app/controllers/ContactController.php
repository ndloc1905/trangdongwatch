<?php
class ContactController extends Zend_Controller_Action
{	
	function indexAction()
    {
		include_once 'contact/index.php';
    }
	
	function deleteAction()
    {
		include_once 'contact/delete.php';
    }	
}