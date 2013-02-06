{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('permission')}</h3>
<form method="POST" onsubmit="return checkform();" action="{$smarty.const.HOST_USER}/savepermission?id={$arrResult.id}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td colspan="4">{$t->_('username')}: <strong>{$arrResult.username}</strong></td>
	</tr>
	<tr>
		<th width="300px">{$t->_('function')}</th>
		<th>{$t->_('desc')}</th>
		<th width="80px">{$t->_('view')}</th>
		<th width="80px">{$t->_('update')}</th>
	</tr>
	{foreach from=$arrPermission item=row key=i}
	<tr>
		<td valign="top">{content lang=$l item=$row f="name"}</td>
		<td valign="top">{content lang=$l item=$row f="desc"}</td>
		<td valign="top" align="center"><input type="checkbox" name="view[]" value="{$row.id}" {if $row.bit&1}checked="checked"{/if} /></td>
		<td valign="top" align="center"><input type="checkbox" name="update[]" value="{$row.id}" {if $row.bit&2}checked="checked"{/if}/></td>
	</tr>
	{/foreach}	
</table>
<div class="padT2">
	<input type="submit" value="{$t->_('save')}" class="btnAction" />
	<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}