<?php
$AppUI 			= Zend_Registry::get('AppUI');
$objView 		= Zend_Registry::get('objView');
$objRequest 	= $this->_request;
$strUserName	= $objRequest->getParam('username', 0);
if ($strUserName != '') {
	$objDBUser = new Users();
	$arrUser = $objDBUser->getByUserName($strUserName);
	$this->view->objUser = $objUser = $objDBUser->toObjUser($arrUser);
	$objURatings = new URatings();
	$arrRating = $objURatings->getRating($AppUI->id, $objUser->id);
	$isRating = 1;
	if ($arrRating) {
		$intTime = time() - strtotime($arrRating['lastupdate']);
		if ($intTime < DAYS_RATING) {
			$isRating = 0;
		}		
	}
	$this->view->isRating = $isRating;
}
?>