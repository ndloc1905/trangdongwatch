{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('ad_placement')}</h3>
	<form method="POST" action="{$smarty.const.HOST_ADMIN}/index/savebanner">
	<table width="800" cellpadding="0" cellspacing="0" border="0">
		{foreach from=$arrBanner item=row key=i}
		<tr>
			<td valign="top" width="150">{content lang=$l item=$row f='name'}</td>
			<td valign="top" width="100"><input name="pprice_{$row.bannerid}" type="text" value="{$row.price}" title="{$t->_('price')}/1 {$t->_('month')}" /></td>
			<td valign="top">{select_unit name="punit_`$row.bannerid`" selected=$row.unit} 1 {$t->_('month')}</td>
		</tr>
		{/foreach}
		<tr>			
			<td valign="top" colspan="3">
				<input type="submit" value="{$t->_('save')}" class="btnAction" />
			</td>
		</tr>
	</table>
	</form>
</div>
{include file="common/footer.tpl"}