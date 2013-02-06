<?php
class AjaxController extends Zend_Controller_Action
{	
	function acsearchAction()
    {
		include 'ajax/acsearch.php';
    }
	
	function checkcaptchaAction()
    {
		include 'ajax/checkcaptcha.php';
    }
	
	function checkemailAction()
    {
		include 'ajax/checkemail.php';
    }
	
	function checkusernameAction()
    {
		include 'ajax/checkusername.php';
    }
	
	function checkloginAction()
    {
		include 'ajax/checklogin.php';
    }
	
	function refreshcaptchaAction()
    {
		include 'ajax/refreshcaptcha.php';
    }
	
	function ratingAction()
    {
		include 'ajax/rating.php';
    }
	
	function sendmbAction()
    {
		include 'ajax/sendmb.php';
    }
	
	function deletembAction()
    {
		include 'ajax/deletemb.php';
    }
	
	function deleteonembAction()
    {
		include 'ajax/deleteonemb.php';
    }
	
	function postcommentAction()
    {
		include 'ajax/postcomment.php';
    }
	
	function postucommentAction()
    {
		include 'ajax/postucomment.php';
    }
	
	function deleteucommentAction()
    {
		include 'ajax/deleteucomment.php';
    }
	
	function ucommentAction()
    {
		include 'ajax/ucomment.php';
    }
	
	function uploadAction()
    {
		include 'ajax/upload.php';
    }
	
	function subcateAction()
    {		
    }

	function uimailAction()
    {
		include 'ajax/uimail.php';
    }	
	
	function uiratingAction()
    {
		include 'ajax/uirating.php';
    }
	
	function uifavorAction()
    {
		include 'ajax/uifavor.php';
    }
	
	function uimfAction()
    {
		include 'ajax/uimf.php';
    }
	
	function deletetopicAction()
    {
		include 'ajax/deletetopic.php';
    }
	
	function editcommentAction()
    {
		include 'ajax/editcomment.php';
    }
	
	function certifycommentAction()
    {
		include 'ajax/certifycomment.php';
    }
	
	function uppostAction()
    {
		include 'ajax/uppost.php';
    }
	
	function checkposttopicAction()
    {
		include 'ajax/checkposttopic.php';
    }
	
	function doposttopicAction()
    {
		include 'ajax/doposttopic.php';
    }
	
	function uifileAction()
    {
		include 'ajax/uifile.php';
    }
	
	function fileAction()
    {
		include 'ajax/file.php';
    }
	
	function hottopicAction()
    {
		include 'ajax/hottopic.php';
    }
}