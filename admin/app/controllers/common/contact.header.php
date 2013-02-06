<?php
$intPermission = 0;
switch ($strAction) {	
	case 'index':
		$intPermission = $arrPermission[F_CONTACT]['bit'];
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		break;
	case 'delete':
		break;	
}
$this->view->intPermission = $intPermission;
?>