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
	var pfullname = strip_tags($('#pfullname').val());
	if (pfullname=='') {
		$('#idErrorFullName').show();
		if (error==0) $('#pfullname').focus();
		error = 1;
	}
	var paddress = strip_tags($('#paddress').val());
	if (paddress=='') {
		$('#idErrorAddress').show();
		if (error==0) $('#paddress').focus();
		error = 1;
	}
	if (error==1) return false;
	return true;
}
checkFormStar = function() {
	var pratings = $('#pratings').val();
	if (pratings=='') return;
	if (confirm('Bạn đồng ý cập nhật lại sao cho thành viên này không?')==false) {
		return;
	}
	document.form1.submit();
}
filter = function (kw, ptype) {
	var pstatus=$('#pstatus').val();
	var pkeyword=$('#pkeyword').val();
	if (pkeyword==kw) {
		pkeyword='';
	}
	var url=HOST_ADMIN+'/member?ptype='+ptype+'&pstatus='+pstatus+'&pkeyword='+pkeyword;
	location.href=url;
}
filterRequest = function (kw) {	
	var pkeyword=$('#pkeyword').val();
	if (pkeyword==kw) {
		pkeyword='';
	}
	var url=HOST_ADMIN+'/member/request?pkeyword='+pkeyword;
	document.location.href=url;
}