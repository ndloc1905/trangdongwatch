{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{if $smarty.get.ptype==1}{$t->_('admin')}{else}{$t->_('member')}{/if}</h3>
<form method="POST" enctype="multipart/form-data" onsubmit="return validateForm();" action="{$smarty.const.HOST_USER}/save?id={$arrResult.id|intval}&ptype={$smarty.get.ptype}&page={$intPage}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) {$t->_('username')}</td>
		<td>
			<input style="width:600px" type="text" id="pusername" name="pusername" value="{$arrResult.username}" />
			<div id="idErrorUserName1" class="error">{$t->_('msg_required_username')}</div>
			<div id="idErrorUserName2" class="error">{$t->_('msg_invalid_username')}</div>
			<div id="idErrorUserName3" class="error">{$t->_('msg_duplicate_username')}</div>
		</td>
	</tr>
	<tr{if $arrResult} style="display:none;"{/if}>
		<td width="150px">(*) {$t->_('password')}</td>
		<td>
			<input style="width:600px" type="password" id="ppassword" name="ppassword" value="" />
			<div class="error" id="idErrorPassword1">{$t->_('msg_required_password')}</div>
			<div class="error" id="idErrorPassword2">{$t->_('msg_invalid_password')}</div>
		</td>
	</tr>
	<tr>
		<td>(*) Email</td>
		<td>
			<input style="width:600px" type="text" id="pemail" name="pemail" value="{$arrResult.email}" />
			<div id="idErrorEmail1" class="error">{$t->_('msg_required_email')}</div>
			<div id="idErrorEmail2" class="error">{$t->_('msg_invalid_email')}</div>
			<div id="idErrorEmail3" class="error">{$t->_('msg_duplicate_email')}</div>
		</td>
	</tr>
	<tr>
		<td>{$t->_('fullname')}</td>
		<td><input style="width:600px" type="text" id="pfullname" name="pfullname" value="{$arrResult.fullname}" /></td>
	</tr>		
	<tr>
		<td valign="top">{$t->_('content2')}</td>
		<td><textarea style="width:602px;height:100px;" id="pcontent" name="pcontent">{$arrResult.content}</textarea></td>
	</tr>	
</table>
<div class="padT2">
	<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
	<input type="hidden" id="puserid" value="{$arrResult.id|intval}" />
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}