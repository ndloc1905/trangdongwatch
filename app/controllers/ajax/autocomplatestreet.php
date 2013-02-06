<?php
$objRequest = $this->_request;
$strName = trim($objRequest->getParam('val', ''));
$strIdLstResult = $objRequest->getParam('lst', '');
if (strlen($strName) >= 1) {
	$objCommon = new Common();
	$arrResult = $objCommon->searchType($strName);
	$html = '<select id="' . $strIdLstResult . '" style="border:0px;" multiple onkeydown="if(event.keyCode==13) {searchSelectItem(\'' . $strIdLstResult . '\'); return false;}" onclick="searchSelectItem(\'' . $strIdLstResult . '\')">';
	foreach ($arrResult as $row)
		$html .= "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
	$html .= '</select>';
	echo $objRequest->getParam('callback') . '(' . Zend_Json::encode($html) . ')';
}
exit;
?>