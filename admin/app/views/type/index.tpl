{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Hãng</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_TYPE}/doaction">
<div class="padT2">
	<input style="width:196px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
	{select_status item0=$t->_('status') selected=$intStatus attribs='style="float:left;margin-right:2px;"'}
	<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th>Tên hãng</th>
		<th width="80px">{$t->_('status')}</th>
		<th width="50px">{$t->_('edit')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td>{$row.name}</td>
		<td align="center">{$row.status|status}</td>
		<td align="center"><a href="{$smarty.const.HOST_TYPE}/update?id={$row.id}">{$t->_('edit')}</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="6" align="right">
		<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
		{if $intTotal>$intLimit}
		{if $smarty.get.pkeyword!=''}
			{apaging total=$intTotal limit=$intLimit page=$intPage params=1}
		{else}
			{apaging total=$intTotal limit=$intLimit page=$intPage}
		{/if}
		{/if}
		</td>
	</tr>
</table>
<div class="padT2">
	<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_TYPE}/update'" class="btnAction" />
	<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction60" />
	<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction60" />
	<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction60" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}