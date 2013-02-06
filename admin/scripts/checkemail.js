checkFormatEmail = function(stringIn) {
	var re = /^([A-Za-z0-9\_\-]+\.)*[A-Za-z0-9\_\-]+@[A-Za-z0-9\_\-]+(\.[A-Za-z0-9\_\-]+)+$/;
	if (stringIn.search(re) == -1){
		return false;
	}
	return true;
}
checkDBEmail = function (pemail, puserid) {
	var result 	= false;
	var purl 	= HOST_ADMIN+'/ajax/checkemail';
	var pdata 	= {
		pemail: pemail,
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