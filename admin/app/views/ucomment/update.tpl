{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Tin nhắn nhà tôi</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_UCOMMENT}/save?id={$arrResult.id|intval}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
<tr>
	<td width="150px" valign="top">{$t->_('content')}</td>
	<td>{'pcontent'|fck:$arrResult.content:'':'600':'400'}</td>
</tr>
</table>
<div class="padT2">
<input type="hidden" id="pbackurl" name="pbackurl" value="{$strBackUrl}" />
<input type="submit" value="{$t->_('save')}" class="btnAction" />
<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}