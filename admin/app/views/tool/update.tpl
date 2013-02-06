{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Cấp danh hiệu cho thành viên {$arrUser.username}</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_TITLE}/save?puserid={$intUserId}&id={$arrResult.id|intval}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
	<td width="150px">(*) Chọn danh hiệu</td>
	<td>
		{select_title name="ptitleid" item0=$t->_('select') selected=$arrResult.titleid}
		<div id="idErrorName" class="error">{$t->_('msg_required_titleofmember')}</div>
	</td>
</tr>
<tr>
	<td>&nbsp;</td>
	<td><input class="inputText" type="text" id="ptxt" name="ptxt" value="{$arrResult.txt}" /></td>
</tr>
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}