checkFormatUserName = function(pusername) {
	if (pusername.length<5 || pusername.length>15) {
		return false;
	}
	return isUserName(pusername);	
}
checkDBUserName = function (pusername, puserid) {
	var result 	= false;
	var purl 	= HOST_ADMIN+'/ajax/checkusername';
	var pdata 	= {
		pusername: pusername,
		puserid: puserid
	}
	$.ajax({
		cache	: false,
		async	: false,
		type	: 'POST',
		data	: pdata,
		url		: purl,
		success	: function(response) {
			result = (response == 1 ? true : false);
		}
	});
	return result;
}