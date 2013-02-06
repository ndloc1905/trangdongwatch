<?php
$objView 	= Zend_Registry::get('objView');
$objCache 	= Zend_Registry::get('objCache');
$objRequest	= $this->_request;
$intId 		= $objRequest->getParam('id', 0);
$intRoomId 	= $objRequest->getParam('proom', 0);
$objMsg 	= new Messages();
$arrMsg 	= $objMsg->getAll($intRoomId, $arrDraw);
$arrResult	= $arrId = array();
for ($i = 0; $i < count($arrDraw); $i++) {
	if ($arrDraw[$i]['id'] == $intId || $arrDraw[$i]['parentid'] == $intId) {
		$arrResult[] = $arrDraw[$i];
		if ($arrDraw[$i]['id'] == $intId) {
			$arrId[] = $arrDraw[$i]['parentid'];
		} else {
			$arrId[] = $arrDraw[$i]['id'];
		}
	}
}
echo $objRequest->getParam('callback') . '(' . Zend_Json::encode($arrId) . ')';
exit;

//$this->view->arrResult = $arrResult;
?>