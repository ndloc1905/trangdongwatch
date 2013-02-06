<?php
$this->view->intPermission = $intPermission = $arrPermission[F_COMPANY]['bit'];
switch ($strAction) {
	case 'index':
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}		
		break;
	case 'update':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}		
		$this->view->strBackUrl = Functions::base64E(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST_FILE);
		break;
}
$arrJS = array	(	
	'scripts/file.js'
);
?>