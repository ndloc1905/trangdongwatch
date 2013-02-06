filter = function (kw) {	
	var ppageid=$('#ppageid').val();	
	var pcolumn=$('#pcolumn').val();	
	var ptype=$('#ptype').val();
	var url=HOST_ADMIN+'/banner?ppageid='+ppageid+'&pcolumn='+pcolumn+'&ptype='+ptype;
	document.location.href=url;
}
checkForm = function () {
	$('.error').hide();	
	var error = 0;
	var page  = getItemsChecked('pageid[]');
	if (page=='') {
		$('#idErrorPage').show();		
		error = 1;		
	}	
	var pname = $('#pname').val();		
	if (pname=='') {
		$('#idErrorName').show();	
		if (error==0) $('#pname').focus();
		error = 1;		
	}
	var pcolumn = $('#pcolumn').val();		
	if (pcolumn==''||pcolumn==-1) {
		$('#idErrorColumn').show();		
		if (error==0) $('#pcolumn').focus();
		error = 1;		
	}	
	var pbanner = $('#pbanner').attr('checked');
	if (pbanner==false) {
		$('#idErrorBanner').show();		
		error = 1;		
	}
	var pwidth  = $('#pwidth').val();
	var pheight = $('#pheight').val();
	if ((pwidth=='' || pwidth==0) || (pheight=='' || pheight==0)) {
		$('#idErrorSize').show();		
		error = 1;		
	}
	if (error==1) return false;
	return true;
}

$(function() {
	var btnUpload=$('#btnUpload');
	new AjaxUpload(btnUpload, {
		action: HOST_ADMIN+'/ajax/upload?ptype=4',
		name: 'fimage',
		onSubmit: function(file, ext){		
			if (! (ext && /^(jpg|png|jpeg|gif|swf)$/.test(ext))){
				alert('Only JPG, PNG or GIF files are allowed');
				return false;
			}
			if (ext=='swf') {
				$('#ptype').val(2);
			} else {
				$('#ptype').val(1);
			}
		},
		onComplete: function(file, response) {
			if (response) {				
				$('#idfilename').html(response);
				$('#pbanner').val(response);
				$('#idbanner').show();
			}
		}
	});
});