validateForm = function () {
	$('.error').hide();	
	var error  = 0;	
	var pemail = $('#pemail').val();
	var pcheckEmail = checkFormatEmail(pemail);
	if (pemail=='') {
		$('#idErrorEmail1').show();
		$('#idErrorEmail2').hide();		
		if (error==0) $('#pemail').focus();
		error = 1;
	}
	if (pemail!='' && pcheckEmail==false) {
		$('#idErrorEmail2').show();
		$('#idErrorEmail1').hide();		
		if (error==0) $('#pemail').focus();
		error = 1;
	}
	if (error==1) return false;
	return true;
}
filter = function (kw) {
	var pstatus=$('#pstatus').val();	
	var pkeyword=$('#pkeyword').val();	
	if (pkeyword==kw) {
		pkeyword='';
	}
	var url=HOST_ADMIN+'/agent?pstatus='+pstatus+'&pkeyword='+pkeyword;
	document.location.href=url;
}