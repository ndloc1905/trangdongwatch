<div id="ui500">
	<div class="title">
		<strong>Nhắn tin</strong>
		<img src="{$smarty.const.HOST}/images/ico/close.gif" onclick="hideUI()" />
	</div>
	<div class="content" style="width:100%;background-color:#fff;padding:0px;">
	<center style="padding:10px;">
		<table style="font-size:14px;" cellpadding="4">
		<tr>
			<td align="center"><strong>Bạn đang soạn thư để gửi cho {$objUser->username}</strong></td>
		</tr>
		<tr>
			<td align="center">
				<label style="float:left;clear:both;">Hãy viết lời nhắn của Bạn dưới đây:</label><div class="clr"></div>				<textarea style="height:150px;width:400px;padding:4px;" id="puicontent" name="puicontent"></textarea>
			</td>
		</tr>
		<tr>
			<td align="left">
				<input type="button" class="bntSe" value="Gửi" onclick="sendmb('{$objUser->username}')" />
			</td>
		</tr>
		</table>
	</center>
	</div>
</div>
{literal}
<script language="javascript">
sendmb = function(pusername) {
	var pcontent = $('#puicontent').val();
	if (pcontent == '') {
		alert('Vui lòng nhập nội dung.');
		return;
	}
	var purl = HOST+'/ajax/sendmb';
	var pdata = {
		pusername: pusername,
		pcontent: pcontent
	}
	$.ajax({
		cache	: false,
		async	: false,
		data	: pdata,
		url		: purl,
		type	: 'post',
		success	: function(error) { //alert(error); return;
			if (error==0) {
				hideUI();
				showUI('Đã giử thư thành công.');
			}
		}
	});
}
</script>
{/literal}