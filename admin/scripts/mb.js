filter = function (kw) {
	var pkeyword=$('#pkeyword').val();
	if (pkeyword==kw) {
		pkeyword='';
	}
	var url=HOST_ADMIN+'/mb?pkeyword='+pkeyword;
	document.location.href=url;
}