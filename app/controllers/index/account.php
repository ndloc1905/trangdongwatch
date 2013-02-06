<?php
include_once 'common/header.php';
if ($AppUI->id <= 0) {
	$this->_redirect(HOST);
}
if (isset($_SESSION['AVATAR'])) {
	$this->view->strAvatar = $strAvatar = $_SESSION['AVATAR'];
} else {
	$this->view->strAvatar = $AppUI->image;
}
?>