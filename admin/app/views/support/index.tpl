{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('online_support')}</h3>
	<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_SUPPORT}/doaction">
	<table width="100%" cellpadding="0" cellspacing="0" border="1">		
		<tr>
			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
			<th width="200px">Email (Yahoo/Skype)</th>
			<th>{$t->_('fullname')}</th>
			<th width="100px">{$t->_('phone')}</th>
			<th width="100px">{$t->_('mobile')}</th>
			<th width="80px">{$t->_('status')}</th>
			<th width="50px">{$t->_('edit')}</th>
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
			<td>{$row.email}</td>
			<td>{$row.name}</td>
			<td>{$row.phone}</td>
			<td>{$row.mobile}</td>
			<td align="center">{$row.status|status}</td>
			<td align="center"><a href="{$smarty.const.HOST_SUPPORT}/update?id={$row.id}">{$t->_('edit')}</a></td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="7" align="left">
				<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_SUPPORT}/update'" class="btnAction" />
				<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction" />
				<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction" />
				<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction" />
				<input type="hidden" id="paction" name="paction" value="0"/>
			</td>
		</tr>
	</table>
	</form>
</div>
{include file="common/footer.tpl"}