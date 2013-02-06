<?php
include_once 'common/header.php';
if ($AppUI->id > 0) {	
	$this->_redirect(HOST);
}
$objContent = new Contents();
$this->view->strImage  = $strImage  = isset($_SESSION['SESSION_UPLOAD_AVATAR']) ? $_SESSION['SESSION_UPLOAD_AVATAR'] : '';
$this->view->arrResult = $arrResult = $objContent->getById(2);
?>