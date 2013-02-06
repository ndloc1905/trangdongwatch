<?php
$intPermission = 0;
switch ($strAction) {
	case 'company':
		$intPermission = $arrPermission[F_COMPANY]['bit'];
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		break;
	case 'savecompany':
		break;
	case 'contact':
		$intPermission = $arrPermission[F_CONTACT]['bit'];
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		break;
	case 'deletecontact':
		break;
	case 'changepassword':
	case 'dochangepassword': 
		if ($arrParams['id'] != $AppUI->id) {
			$intPermission = $arrPermission[F_USER]['bit']; $intPermission = 3;			
			if (!($intPermission&2)) {
				$this->_redirect(HOST_NOPERMISSION);
			}
		}
		break;
	case 'statistics':
		$intPermission = $arrPermission[F_USER]['bit'];
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		$arrJS = array (
			'scripts/statistics.js'
		);
		break;
}
$this->view->intPermission = $intPermission;
?>