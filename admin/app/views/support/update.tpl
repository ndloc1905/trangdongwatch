{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('online_support')}</h3>	
<form id="frmSupport" onsubmit="return validateForm();" method="post" action="{$smarty.const.HOST_SUPPORT}/save?id={$arrResult.id}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) Email (Yahoo/Skype)</td>
		<td>
			<input style="width:600px" type="text" id="pemail" name="pemail" value="{$arrResult.email}" />
			<div id="idErrorEmail1" class="error">{$t->_('msg_required_email')}</div>
			<div id="idErrorEmail2" class="error">{$t->_('msg_invalid_email')}</div>
		</td>
	</tr>
	<tr>
		<td width="150px">{$t->_('fullname')}</td>
		<td><input style="width:600px" type="text" id="pname" name="pname" value="{$arrResult.name}" /></td>
	</tr>
	<tr>
		<td width="150px">{$t->_('phone')}</td>
		<td><input style="width:600px" type="text" id="pphone" name="pphone" value="{$arrResult.phone}" /></td>
	</tr>
	<tr>
		<td>{$t->_('mobile')}</td>
		<td><input style="width:600px" type="text" id="pmobile" name="pmobile" value="{$arrResult.mobile}" /></td>
	</tr>
	<tr>
		<td colspan="2" align="left">
			<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
			<input type="submit" value="{$t->_('save')}" class="btnAction" />
			<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
		</td>
	</tr>
</table>
</form>
</div>
{include file="common/footer.tpl"}