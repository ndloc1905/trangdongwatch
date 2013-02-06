checkitem = function(id) {
	if ($('#'+id).css('display')!='none') {
		$('#'+id).hide();
	} else {
		$('#'+id).show();
	}
}
dodelete = function () {	
	var pimage = '';	
	var x=document.getElementsByName('items[]');	
	for (var i=0; i<x.length; i++) {
		if ($('#'+x[i].id).css('display')!='none') {			
			pimage+=$('#'+x[i].id).attr('rel')+',';
		}
	}
	if (pimage=='') {
		return;
	}
	if (confirm(msg_confirm_action)==false) {		
		return;
	}
	var pimage = (pimage != '' ? pimage.substr(0, pimage.length - 1) : '');
	$('#pimage').val(pimage);	
	document.form1.submit();
}
$(function() {
	var btnUpload=$('#btnUpload');
	new AjaxUpload(btnUpload, {
		action: HOST_ADMIN+'/ajax/upload?ptype=3',
		name: 'fimage',
		onSubmit: function(file, ext){
			if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
				alert('Only JPG, PNG or GIF files are allowed');
				return false;
			}
		},
		onComplete: function(file, response) {						
			document.location.reload();		
		}
	});
});