<?php
$intPermission = $intPermission = $arrPermission[F_COMPANY]['bit'];
switch ($strAction) {
	case 'index':		
		if (!($intPermission&1)) {
			$this->_redirect(HOST_NOPERMISSION);
		}
		break;
	case 'save':
		break;	
}
$this->view->intPermission = $intPermission;
?>