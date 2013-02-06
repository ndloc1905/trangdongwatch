{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$objTranslate->_('contact')}</h3>
	<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_CONTACT}/delete">
	<table width="100%" cellpadding="0" cellspacing="0" border="1">
		{if $intPermission&2}
		<tr>
			<td colspan="7" align="left">				
				<input type="button" value="{$objTranslate->_('delete')}" onclick="dodelete()" class="btnAction" />				
			</td>
		</tr>
		{/if}
		<tr>
			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
			<th width="100px">{$objTranslate->_('name')}</th>
			<th width="100px">Email</th>			
			<th width="100px">{$objTranslate->_('address')}</th>
			<th width="100px">{$objTranslate->_('phone')}</th>
			<th width="100px">{$objTranslate->_('mobile')}</th>						
			<th>{$objTranslate->_('note')}</th>			
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
			<td>{$row.fullname}</td>
			<td>{$row.email}</td>			
			<td>{$row.address}</td>
			<td align="center">{$row.phone}</td>
			<td align="center">{$row.mobile}</td>			
			<td>{$row.content}</td>		
		</tr>
		{/foreach}
		{if $intTotal>$intLimit}
		<tr>
			<td colspan="7" align="right">			
				{paging total=$intTotal limit=$intLimit page=$intPage}			
			</td>
		</tr>
		{/if}
		{if $intPermission&2}
		<tr>
			<td colspan="7" align="left">				
				<input type="button" value="{$objTranslate->_('delete')}" onclick="dodelete()" class="btnAction" />
			</td>
		</tr>
		{/if}
	</table>
	</form>
</div>
{include file="common/footer.tpl"}
{literal}
<script language="javascript">
dodelete = function () {	
	var msg_confirm_action = "{/literal}{$objTranslate->_('msg_confirm_action')}{literal}";
	if (getItemsChecked('items[]')=='') {
		return;
	}	
	if (confirm(msg_confirm_action)==false) {
		return;
	}
	document.form1.submit();
}
</script>
{/literal}