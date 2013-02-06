<?php
$yahoo_ws_config = array (
	'url' => array(
		'request_token' => 'https://api.login.yahoo.com/oauth/v2/get_request_token',
		'request_auth' => 'https://api.login.yahoo.com/oauth/v2/request_auth',
		'access_token' => 'https://api.login.yahoo.com/oauth/v2/get_token',
		'contact_api' => 'https://api.login.yahoo.com/oauth/v2/get_token'
	),
	'app_id' => 'MKaL0P4k',
	'consumer_key' => 'dj0yJmk9SWd1TUF6eXJJd2pzJmQ9WVdrOVRVdGhUREJRTkdzbWNHbzlNQS0tJnM9Y29uc3VtZXJzZWNyZXQmeD0wYw--',
	'consumer_secret' => 'c849308d2c7519dc0277e4e444e38c18eae3a794',
	'signature_methods' => array('HMAC-SHA1', 'PLAINTEXT'),
	'oauth_version' => '1.0',
	'xoauth_lang_pref' => 'en-us'
);
class YahooController extends Zend_Controller_Action
{	
	public function init() 
	{
		$this->token_session = new Zend_Session_Namespace('Ws_Yahoo');
	}
	
	public function indexAction()
	{	
		$config = array (
			'callbackUrl' => HOST . '/yahoo/result',
			'siteUrl' => $yahoo_ws_config['url']['access_token'],
			'consumerKey' => $yahoo_ws_config['consumer_key'],
			'consumerSecret' => $yahoo_ws_config['consumer_secret']
		);											
		try {
			$consumer = new Zend_Oauth_Consumer($config);
			$token = $consumer->getRequestToken();
			
		} catch(Exception $e) {
			echo $e -> getMessage();
		}
		exit;
	}	
	
	public function resultAction()
	{
		
	}
}
?>