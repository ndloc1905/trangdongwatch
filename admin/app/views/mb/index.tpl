{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Hợp thư</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_MB}/doaction">
<div class="padT2">
	<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
	<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
</div>
<div class="space"></div> 
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="150px">Người gửi</th>
		<th width="150px">Người nhận</th>
		<th>{$t->_('content')}</th>
		<th width="120px">{$t->_('postdate')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td>{$row.username}</td>
		<td>{$row.rusername}</td>
		<td>
		{*
		{foreach from=$row.content item=row1 key=i}
			<strong>{$row1.username} To {$row1.rusername}</strong>: {$row1.content} <div class="clr"></div>
		{/foreach}
		*}
		{$row.subject}
		</td>
		<td align="center">{$row.postdate|date_format:"%H:%M %d/%m/%Y"}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="5" align="right">
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
	<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div> 
</form>
</div>
{include file="common/footer.tpl"}