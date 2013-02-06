filter = function (kw) {	
	var pstatus=$('#pstatus').val();	
	var pkeyword=$('#pkeyword').val();		
	if (pkeyword==kw) {
		pkeyword='';
	}	
	var url=HOST_ADMIN+'/comment?pstatus='+pstatus+'&pkeyword='+pkeyword;
	document.location.href=url;
}
validateForm = function () {
	$('.error').hide();	
	var error = 0;
	var ptitle = $('#ptitle').val();		
	if (ptitle=='') {
		$('#idErrorTitle').show();
		$('#ptitle').focus();
		if (error==0) $('#ptitle').focus();
		error = 1;		
	}
	var pparentid = $('#pparentid').val();
	if (pparentid=='' || pparentid==0) {
		$('#idErrorCate').show();
		$('#pparentid').focus();
		if (error==0) $('#pparentid').focus();
		error = 1;		
	}
	if (error==1) return false;
	return true;
}
subcate = function (pparentid) {
	var result 	= false;
	var purl 	= HOST_ADMIN+'/ajax/subcate?pparentid='+pparentid;	
	$.ajax({
		cache	: false,
		async	: false,
		type	: 'POST',
		data	: null,
		url		: purl,
		success	: function(response) {
			$('#idSubCate').html(response);
		}
	});	
}