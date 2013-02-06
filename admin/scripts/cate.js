filter = function (kw) {	
	var pstatus=$('#pstatus').val();	
	var pkeyword=$('#pkeyword').val();	
	var pparentid=$('#pparentid').val();	
	if (pkeyword==kw) {
		pkeyword='';
	}	
	var url=HOST_ADMIN+'/cate?pstatus='+pstatus+'&pparentid='+pparentid+'&pkeyword='+pkeyword;
	document.location.href=url;
}
validateForm = function () {
	$('.error').hide();	
	var error = 0;
	var pname = $('#pname').val();		
	if (pname=='') {
		$('#idErrorName').show();
		$('#pname').focus();
		if (error==0) $('#pname').focus();
		error = 1;		
	}
	if (error==1) return false;
	return true;
}