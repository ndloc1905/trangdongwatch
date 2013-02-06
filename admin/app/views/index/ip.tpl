{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('ip')}</h3>
	<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_ADMIN}/index/doip">
	<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
			<input style="width:196px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
			{select_status item0=$t->_('status') selected=$intStatus attribs='style="float:left;margin-right:2px;"'}
			<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
		</td>
	</tr>
	</table>
	<table width="100%" cellpadding="0" cellspacing="0" border="1">
		<tr>
			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
			<th>{$t->_('ip')}</th>
			<th width="180px">{$t->_('last_access')}</th>
			<th width="80px">{$t->_('status')}</th>
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td valign="top"><input type="checkbox" name="items[]" value="{$row.ip}" /></td>
			<td valign="top" align="center">{$row.ip}</td>
			<td valign="top" align="center">{$row.lastupdate}</td>
			<td valign="top" align="center">{if $row.status==0}{$t->_('inactive')}{else}{$t->_('active')}{/if}</td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="4" align="right">
				<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
				{if $intTotal>$intLimit}
					{apaging total=$intTotal limit=$intLimit page=$intPage}
				{/if}
			</td>
		</tr>
		<tr>
			<td colspan="4" align="left">
				<input type="button" value="{$t->_('inactive')}" onclick="doIP(1)" class="btnAction" />
				<input type="button" value="{$t->_('active')}" onclick="doIP(2)" class="btnAction" />
				<input type="hidden" id="paction" name="paction" value="0"/>
			</td>
		</tr>
	</table>
	</form>
</div>
{include file="common/footer.tpl"}