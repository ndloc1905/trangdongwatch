filter = function (kw) {
	var pkeyword=$('#pkeyword').val();
	var pstatus=$('#pstatus').val();
	if (pkeyword==kw) {
		pkeyword='';
	}
	var url=HOST_ADMIN+'/rating?pkeyword='+pkeyword+'&pstatus='+pstatus;
	document.location.href=url;
}