<div id="ui500">
	<div class="title">
		<strong>Tặng sao </strong>
		<img src="{$smarty.const.HOST}/images/ico/close.gif" onclick="hideUI()" />
	</div>
	<div class="content" style="width:100%;background-color:#fff;padding:0px;">
	<center style="padding:10px;">
		<table style="font-size:14px;" cellpadding="4">
		<tr>
			<td align="center"><strong>Bạn đang gửi đánh giá (tặng sao) cho {$objUser->username}</strong></td>
		</tr>
		<tr>
			<td align="left">Hãy chọn ngôi sao mà bạn muốn gửi đến {$objUser->username}</strong></td>
		</tr>
		<tr>
			<td align="left">
				<div class="padT2"><input type="radio" id="idGood" name="ppoint" value="1"> <label for="idGood">Sao tốt</label></div>
				<div class="padT2"><input type="radio" id="idBad" name="ppoint" value="-1"> <label for="idBad">Sao xấu</label></div>
			</td>
		</tr>
		<tr>
			<td align="center">
				<label style="float:left;clear:both;">Hãy cho Admin biết lý do bạn tặng sao:</label><div class="clr"></div>
				<textarea style="height:60px;width:400px;padding:4px;" id="puicontent2" name="puicontent2"></textarea>
			</td>
		</tr>
		<tr>
			<td align="center">
				<label style="float:left;clear:both;">Hãy viết nhận xét của Bạn cho {$objUser->username}:</label><div class="clr"></div>
				<textarea style="height:60px;width:400px;padding:4px;" id="puicontent" name="puicontent"></textarea>
			</td>
		</tr>
		<tr>
			<td align="left">
				<input type="button" class="bntSe" value="Gửi" onclick="rating('{$objUser->username}')" />
			</td>
		</tr>
		</table>
		<div class="padT5">
			Lưu ý: Đánh giá của bạn phải được Admin duyệt trước khi chuyển đến <br/> <strong>{$objUser->username}</strong> {$intTime}
		</div>
	</center>
	</div>
</div>
{literal}
<script language="javascript">
rating = function(pusername) {
	var ppoint = $('input:radio[name=ppoint]:checked').val();
	if (ppoint == undefined) {
		alert('Vui lòng chọn sao.');
		return false;
	}
	var pcontent2 = $('#puicontent2').val();
	if (pcontent2=='') {
		alert('Vui lòng nhập lý do bạn tặng sao.');
		return false;
	}
	var pcontent = $('#puicontent').val();
	if (pcontent=='') {
		alert('Vui lòng nhập lời nhắn.');
		return false;
	}
	hideUI();
	var	pdata = {
		pusername: pusername,
		ppoint: ppoint,
		pcontent: pcontent,
		pcontent2: pcontent2
	}
	var purl = HOST+'/ajax/rating';
	$.ajax({
		cache	: false,
		async	: false,
		data	: pdata,
		url		: purl,
		type	: 'post',
		success	: function(error) {
			if (error=='0') {
				showUI('Đánh giá của Bạn đã gửi thành công. Vui lòng chờ Admin duyệt.');
				return;
			} else if(error=='1') {
				alert('Bạn chỉ có thể tặng sao tốt cho thành viên này cách lần tặng trước 30 ngày.');
				return;
			}
		}
	});
	return true;
}
</script>
{/literal}