<?php
Session::end();
$this->_redirect($_SERVER['HTTP_REFERER']);
exit;
?>