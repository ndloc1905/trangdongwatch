{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('changepassword')}</h3>
<form id="form1" name="form1" method="POST" onsubmit="return checkform();" action="{$smarty.const.HOST_ADMIN}/index/dochangepassword?id={$smarty.get.id}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150">(*)&nbsp;<label for="pnewpassword">{$t->_('newpassword')}:</label></td>
		<td><input size="35" type="password" id="pnewpassword" name="pnewpassword"/></td>
	</tr>
	<tr>
		<td>(*)&nbsp;<label for="pconfirmpassword">{$t->_('confirmnewpassword')}:</label></td>
		<td><input size="35" type="password" id="pconfirmpassword" name="pconfirmpassword" /></td>
	</tr>
</table>
<div class="padT2">
	<input type="submit" value="{$t->_('save')}" class="btnAction"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}
{literal}
<script language="javascript">
checkform = function() {
var msg_required_newpassword = "{/literal}{$t->_('msg_required_newpassword')}{literal}";
var msg_invalid_confirmpassword = "{/literal}{$t->_('msg_invalid_confirmpassword')}{literal}";
var poldpassword = $('#poldpassword').val();
var pnewpassword = $('#pnewpassword').val();
var pconfirmpassword = $('#pconfirmpassword').val();
if (pnewpassword=='') {
	alert(msg_required_newpassword);
	return false;
}
if (pnewpassword!=pconfirmpassword) {
	alert(msg_invalid_confirmpassword);
	return false;
}
return true;
}
</script>
{/literal}