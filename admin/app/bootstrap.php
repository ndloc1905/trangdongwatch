<?php
class Bootstrap
{
	public function __construct()
	{
		set_include_path(
			ROOT_DIR .
			PATH_SEPARATOR . ROOT_LIB . '/' . 
			PATH_SEPARATOR . ROOT_LIB . '/Common/' .
			PATH_SEPARATOR . ROOT_DIR . '/app/controllers/' .			
			PATH_SEPARATOR . get_include_path()
		);
		require_once 'Zend/Loader/Autoloader.php';
		$loader = Zend_Loader_Autoloader::getInstance();
		$loader->setFallbackAutoloader(true);
		
		include_once ROOT_DIR . '/conf/config.php';
		include_once ROOT_LIB . '/Smarty/View.php';
		$objConf = new Zend_Config_Ini(ROOT_LIB . '/Conf/config.ini');
		$arrConf = $objConf->toArray();

		/** Smarty **/
		$objView = new Smarty_View($arrConf['smarty']);
		$vrender = new Zend_Controller_Action_Helper_ViewRenderer();
		$vrender->setView($objView);
		$vrender->setViewSuffix('tpl');
		Zend_Controller_Action_HelperBroker::addHelper($vrender);
		Zend_Registry::set('objView', $objView);

		/** Db **/		
		$objDb = Zend_Db::factory($arrConf['db']['adapter'], $arrConf['db']['connect']);
		$objDb->query("SET NAMES 'UTF8'");
		Zend_Registry::set('db', $objDb);

		/** Session **/
		$AppUI = Session::start();
		Zend_Registry::set('AppUI', $AppUI);

		/**Cache**/
		$objCache = new Cache($arrConf['cache']);
		Zend_Registry::set('objCache', $objCache);

		/**Clear cache**/
		$objClear = new Clear($objCache);
		Zend_Registry::set('objClear', $objClear);

		/**Captcha**/
		$objCaptcha = new Captcha_Image($arrConf['captcha']);
		Zend_Registry::set('objCaptcha', $objCaptcha);
	}

	public function runApp()
	{
		// setup controller
		$frontController = Zend_Controller_Front::getInstance();
		$frontController->throwExceptions(true);
		$frontController->setDefaultControllerName('index');
		$frontController->setControllerDirectory(array(
			'default' => ROOT_DIR . '/app/controllers'
		));
		//--route
		$routers = $frontController->getRouter();
		$configRouter = new Zend_Config_Ini(ROOT_DIR . '/conf/configUrl.ini');
		$routers->addConfig($configRouter, 'routes');
		try {
			$frontController->registerPlugin(new Plugins_Backend_Controller());
			$frontController->dispatch();
		} catch (Exception $exception) {
			print_r($exception->getMessage());
			exit;
		}
	}
}
?>