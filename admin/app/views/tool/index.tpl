{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Tools</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_TOOL}/doaction">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td>
		<strong class="red">Xóa topic thành viên:</strong><div class="space"></div>
		Xoá tất cả topic đã đăng quá 1 tháng
		<div class="space"></div>
		<input type="button" value="Xóa topic" onclick="dojob(1)" class="btnAction" />
	</td>
</tr>
</table>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td>
		<strong class="red">Xóa tin nhắn thành viên:</strong><div class="space"></div>		
		Xoá tất cả tin nhắn đã đăng quá 10 ngày
		<div class="space"></div>
		<input type="button" value="Xóa tin nhắn" onclick="dojob(2)" class="btnAction" />
	</td>
</tr>
</table>
<input type="hidden" id="paction" name="paction" value="0"/>
</form>
</div>
{include file="common/footer.tpl"}