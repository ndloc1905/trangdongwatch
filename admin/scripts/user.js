validateForm = function () {
	$('.error').hide();
	var error = 0;	
	var puserid = $('#puserid').val();	
	var pusername = $('#pusername').val();	
	var pcheckUserName = checkFormatUserName(pusername);
	if (pusername=='') {
		$('#idErrorUserName1').show();
		$('#idErrorUserName2').hide();
		$('#idErrorUserName3').hide();
		if (error==0) $('#pusername').focus();
		error = 1;
	}
	if (pusername!='' && pcheckUserName==false) {
		$('#idErrorUserName2').show();
		$('#idErrorUserName1').hide();
		$('#idErrorUserName3').hide();
		if (error==0) $('#pusername').focus();
		error = 1;
	}
	if (pusername!='' && pcheckUserName==true && checkDBUserName(pusername, puserid)==true) {
		$('#idErrorUserName3').show();
		$('#idErrorUserName1').hide();
		$('#idErrorUserName2').hide();
		if (error==0) $('#pusername').focus();
		error = 1;
	}
	
	if (puserid==0) {
		var ppassword = $('#ppassword').val();
		if (ppassword=='') {
			$('#idErrorPassword1').show();
			$('#idErrorPassword2').hide();
			if (error==0) $('#ppassword').focus();
			error = 1;
		}
		if (ppassword!='' && checkPassword(ppassword)==false) {
			$('#idErrorPassword2').show();
			$('#idErrorPassword1').hide();
			if (error==0) $('#ppassword').focus();
			error = 1;
		}
	}
	
	var pemail = $('#pemail').val();
	var pcheckEmail = checkFormatEmail(pemail);
	if (pemail=='') {
		$('#idErrorEmail1').show();
		$('#idErrorEmail2').hide();
		$('#idErrorEmail3').hide();
		if (error==0) $('#pemail').focus();
		error = 1;
	}
	if (pemail!='' && pcheckEmail==false) {
		$('#idErrorEmail2').show();
		$('#idErrorEmail1').hide();
		$('#idErrorEmail3').hide();
		if (error==0) $('#pemail').focus();
		error = 1;
	}
	if (pemail!='' && pcheckEmail==true && checkDBEmail(pemail, puserid)==true) {
		$('#idErrorEmail3').show();
		$('#idErrorEmail1').hide();
		$('#idErrorEmail2').hide();
		if (error==0) $('#pemail').focus();
		error = 1;
	}	
	var purl = $('#purl').val();
	if (purl!='' && checkURL(purl)==false) {
		$('#idErrorURL').show();
		if (error==0) $('#purl').focus();
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
	var url=HOST_ADMIN+'/user?pstatus='+pstatus+'&pkeyword='+pkeyword;
	location.href=url;
}