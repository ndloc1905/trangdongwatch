filter = function (kw) {	
	var pstatus=$('#pstatus').val();	
	var pkeyword=$('#pkeyword').val();		
	if (pkeyword==kw) {
		pkeyword='';
	}	
	var url=HOST_ADMIN+'/ucomment?pstatus='+pstatus+'&pkeyword='+pkeyword;
	document.location.href=url;
}