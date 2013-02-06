<?php
$objJob = new Jobs();
$objMsg = new Messages();
$arrResult 	= $objJob->getAllMessage();
if ($arrResult) {	
	$strId = Functions::stringId($arrResult, 'id');
	$objMsg->delete($strId, 0);
}
echo 'Job execute successfully!';
exit;
?>