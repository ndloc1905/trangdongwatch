<?php
$this->view->intPermission = $intPermission = $arrPermission[F_USER]['bit'];
switch ($strAction) {
	case 'index':
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array	(
			'scripts/member.js'
		);
		break;
	case 'update':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array	(
			'scripts/checkusername.js',
			'scripts/checkemail.js',
			'scripts/member.js'
		);
		$this->view->strBackUrl = Functions::base64E(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST_MEMBER);
		break;
	case 'star':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array (
			'scripts/member.js'
		);
		$this->view->strBackUrl = Functions::base64E(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST_MEMBER);
		break;
	case 'comment':
		if (!($intPermission&2)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array (
			'scripts/member.js'
		);
		$this->view->strBackUrl = Functions::base64E(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : HOST_MEMBER);
		break;
	case 'save':
	case 'doaction':
}
?>