<?php
class CompanyController extends Zend_Controller_Action
{
	function indexAction()
    {
		include_once 'company/index.php';
    }
	
	function saveAction()
    {
		include_once 'company/save.php';
    }	
}