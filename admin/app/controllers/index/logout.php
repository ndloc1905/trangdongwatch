<?php
/* if (isset($_SESSION) && $_SESSION) {
	foreach ($_SESSION as $key=>$value) {
		unset($_SESSION[$key]);
	}
} */
Session::end();
$this->_redirect(HOST_ADMIN);
exit;
?>