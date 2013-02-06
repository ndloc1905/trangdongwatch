<?php
class AjaxController extends Zend_Controller_Action
{	
	function checkusernameAction()
    {
		include 'ajax/checkusername.php';
    }
	
	function checkemailAction()
    {
		include 'ajax/checkemail.php';
    }
	
	function subcateAction()
    {
		
    }	
	
	function uploadAction()
    {
		include 'ajax/upload.php';
    }	
}