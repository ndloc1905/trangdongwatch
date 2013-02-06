<?php
class ProfileController extends Zend_Controller_Action
{	
	function indexAction()
    {
		include_once 'profile/index.php';
    }	
	
	function infoAction()
    {
		include_once 'profile/info.php';
    }
	
	function accountAction()
    {
		include_once 'profile/account.php';
    }
	
	function dosavepasswordAction()
    {
		include_once 'profile/dosavepassword.php';
    }	

	function dosaveprofileAction()
    {
		include_once 'profile/dosaveprofile.php';
    }
	
	function topicAction()
    {
		include_once 'profile/topic.php';
    }
	
	function ratingAction()
    {
		include_once 'profile/rating.php';
    }
	
	function friendAction()
    {
		include_once 'profile/friend.php';
    }
	
	function inboxAction()
    {
		include_once 'profile/inbox.php';
    }
	
	function outboxAction()
    {
		include_once 'profile/outbox.php';
    }
	
	function viewmailAction()
    {
		include_once 'profile/viewmail.php';
    }
	
	function dosendrequestAction()
    {
		include_once 'profile/dosendrequest.php';
    }
}