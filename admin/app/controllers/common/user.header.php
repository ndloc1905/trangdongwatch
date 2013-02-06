<?php
$this->view->intPermission = $intPermission = $arrPermission[F_USER]['bit'];
switch ($strAction) {
	case 'index':
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array	(
			'scripts/user.js'
		);
		break;
	case 'update':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array	(
			'scripts/checkusername.js',
			'scripts/checkemail.js',
			'scripts/user.js'
		);
		$this->view->strBackUrl = Functions::base64E(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST_USER);
		break;
	case 'save':
	case 'doaction':
	case 'permission':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
	case 'savepermission':
		break;
}
?>