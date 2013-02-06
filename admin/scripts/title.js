filter = function (puserid, kw) {	
	var pstatus=$('#pstatus').val();	
	var pkeyword=$('#pkeyword').val();	
	if (pkeyword==kw) {
		pkeyword='';
	}	
	var url=HOST_ADMIN+'/title?(puserid='+puserid+'&pstatus='+pstatus+'&pparentid='+pparentid+'&pkeyword='+pkeyword;
	document.location.href=url;
}
validateForm = function () {
	$('.error').hide();	
	var error = 0;
	var ptitleid = $('#ptitleid').val();		
	if (ptitleid==''||ptitleid==0) {
		$('#idErrorName').show();
		$('#ptitleid').focus();
		if (error==0) $('#ptitleid').focus();
		error = 1;		
	}
	if (error==1) return false;
	return true;
}