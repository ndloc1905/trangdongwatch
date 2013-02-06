dojob = function (pact) {
	if (pact == 0) return;	
	if (confirm(msg_confirm_action)==false) {
		return;
	}
	$('#paction').val(pact);
	document.form1.submit();
}