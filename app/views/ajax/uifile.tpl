<div id="ui800">
	<div class="uiTitle">
		<strong>Hình ảnh</strong>
		<img src="{$smarty.const.HOST}/images/ico/close.gif" onclick="hideUI()" />
	</div>
	<div class="content" style="width:788px;background-color:#fff;padding:5px;border:1px solid #999;">
	<table style="width:790px;float:left;text-align:left;">
		{if $intType==3}
		<tr>
			<td>Biểu tượng vui</td>
		</tr>
		<tr>
			<td>
				<div style="width:780px;height:85px;overflow-y:scroll;border:1px solid #999;padding:2px;">
				<ul class="listIcon">
				{foreach from=$arrIcon item=row key=i}
					<li><a href="javascript:selectFile(2, '{$row.file}');"><img title="{$row.title}" src="{$smarty.const.HOST_UPLOAD}/image/{$row.file}"/></a></li>
				{/foreach}
				</ul>
				</div>
			</td>
		</tr>
		{/if}
		<tr>
			<td>Hình ảnh đã upload</td>
		</tr>
		<tr>
			<td>
				<div style="width:780px;height:260px;overflow-y:scroll;border:1px solid #999;padding:2px;" id="idfile">
					{include file="ajax/file.tpl"}
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<a href="javascript:void(0);" id="btnUpload" class="bntS1"><span>Upload hình ảnh</span></a>&nbsp;
				<span class="fr"><a href="javascript:void(0);" onclick="hideUI();return false;" class="bntS1"><span>Đóng</span></a></span>
			</td>
		</tr>
	</table>
	</div>
</div>
{literal}<script language="javascript">
var pusername = "{/literal}{$AppUI->username}{literal}";
var ptype = "{/literal}{$intType}{literal}";
$(function() {
	var btnUpload=$('#btnUpload');
	new AjaxUpload(btnUpload, {
		action: HOST+'/ajax/upload?ptype='+ptype,
		name: 'fimage',		
		onSubmit: function(file, ext) {
			if (! (ext && /^(jpg|png|jpeg|gif)$/.test(ext))){
				alert('Only JPG, PNG or GIF files are allowed');
				return false;
			}
		},
		onComplete: function(file, response) {			
			if (response != '') {				
				$('#idfile').html(response);
			} else {
				alert('Hình ảnh vượt quá kích thước cho phép 50kb. Hệ thống đã tự động thu nhỏ hình ảnh cho phù hợp.');
				listFile(ptype); 
			}
		}
	});
});
selectFile = function(t, file) {
	if (ptype == 4) {
		$('#idfilename2').html(file);
		$('#pidimage').val(file);
		hideUI();
	} else if (ptype == 2) {
		$('#idfilename').html(file);
		$('#pimage').val(file);
		$('#idimage').show();
		hideUI();
	} else {
		if (t==1) {
			var file = '<img src="'+HOST+'/upload/image/'+pusername+'/'+file+'"/>&nbsp;';
		} else {
			var file = '<img src="'+HOST+'/upload/image/'+file+'"/>&nbsp;';
		}
		CKEDITOR.instances['pcontent'].insertHtml(file);
		alert('Đã chèn hình vào nội dung.');
	}
}
listFile = function (ptype) {	
	var purl = HOST+'/ajax/file?ptype='+ptype;
	$.ajax({
		cache	: false,
		async	: false,
		data	: null,
		url		: purl,
		type	: 'post',
		success	: function(response) {
			$('#idfile').html(response);
		}
	});
}
</script>{/literal}