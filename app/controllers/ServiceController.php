<?php
class ServiceController extends Zend_Controller_Action
{
	function indexAction()
    {		
		$oauth_callback = HOST.'/service/access';
		$redirect = Service_Yahoo::getInstance()->getRequestTokenKey($oauth_callback);
		$this->_redirect($redirect);
		exit;
    }
	
	function accessAction()
    {
		/*
		$oauth_callback = HOST.'/service/contact';
		$service = Service_Yahoo::getInstance()->getAccessToken($oauth_callback);		
		$this->_redirect($oauth_callback);
		*/
		
		$oauth_callback = HOST.'/service/profile';
		$service = Service_Yahoo::getInstance()->getAccessToken($oauth_callback);		
		$this->_redirect($oauth_callback);
		
		exit;
    }
	
	function contactAction()
    {
		$oauth_callback = HOST.'/service/contact';
		$contact = Service_Yahoo::getInstance()->getContacts($oauth_callback);	
		print_r($contact );
		exit;
    }	
	
	function profileAction()
    {
		$oauth_callback = HOST.'/service/profile';
		$profile = Service_Yahoo::getInstance()->getProfile($oauth_callback);	
		print_r($profile );
		exit;
    }
}