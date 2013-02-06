doactionphoto = function (pact) {	
	var pimages = '';
	var pcount = 0;
	var x=document.getElementsByName('items[]');
	for (var i=0; i<x.length; i++) {
		if ($('#'+x[i].id).css('display')!='none') {
			pimages+=$('#'+x[i].id).attr('rel')+',';
			pcount++;
		}
	}
	if (pimages=='') {
		return;
	}
	if (pact==0 && pcount>1) {
		alert('Vui lòng chỉ chọn 1 hình.');
		return;
	}
	if (confirm(msg_confirm_action)==false) {
		return;
	}
	$('#pimages').val(pimages);
	$('#paction').val(pact);
	document.form1.submit();
}
filter = function () {
	var palbum=$('#palbum').val();	
	var url=HOST_ADMIN+'/photo?palbum='+palbum;
	location.href=url;
}
checkitem = function(id) {
	if ($('#'+id).css('display')!='none') {
		$('#'+id).hide();
	} else {
		$('#'+id).show();
	}
}