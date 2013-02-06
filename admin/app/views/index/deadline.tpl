{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('ad_deadline')}</h3>
	<form method="POST" action="{$smarty.const.HOST_ADMIN}/index/savedeadline">
	<table width="500" cellpadding="0" cellspacing="0" border="0">
		{foreach from=$arrDeadline item=row key=i}
		<tr>
			<td valign="top" width="100">{content lang=$l item=$row f='name'}</td>
			<td valign="top"><input style="width:50px;" name="psaleoff_{$row.deadlineid}" type="text" value="{$row.saleoff}" title="{$t->_('saleoff')} (%)" /> (%)</td>
		</tr>
		{/foreach}
		<tr>			
			<td valign="top" colspan="2">
				<input type="submit" value="{$t->_('save')}"  class="btnAction" />
			</td>
		</tr>
	</table>
	</form>
</div>
{include file="common/footer.tpl"}