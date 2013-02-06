<?php
$intPermission = $arrPermission[F_COMPANY]['bit'];
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
		break;
}
$this->view->intPermission = $intPermission;
?>