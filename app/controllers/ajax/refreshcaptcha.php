<?php
$strSession = $this->_request->getParam('session', '');
$this->view->assign('strSession', $strSession);
?>