{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Tặng sao</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_RATING}/doaction">
<div class="padT2">
	<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
	<select id="pstatus" name="pstatus" style="float:left;margin-right:2px;">
		<option value="-1">{$t->_('status')}</option>
		<option value="1">Đã duyệt</option>			
		<option value="2">Chờ duyệt</option>			
	</select>		
	<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
</div>
<div class="space"></div> 
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="150px">Người tặng </th>
		<th width="150px">Người nhận</th>
		<th>Lý do tặng sao</th>
		<th>Nhận xét</th>
		<th width="80px">Sao</th>
		<th width="120px">{$t->_('status')}</th>
		<th width="120px">{$t->_('postdate')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td>{$row.username}</td>
		<td>{$row.rusername}</td>
		<td>{$row.content2}</td>
		<td>{$row.content}</td>		
		<td align="center">{if $row.point==1}Tốt{else}Xấu{/if}</td>
		<td align="center">{if $row.status==1}Đã duyệt{else}Chờ duyệt{/if}</td>
		<td align="center">{$row.lastupdate|date_format:"%H:%M %d/%m/%Y"}</td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" align="right">
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
	{*<input type="button" value="Chờ duyệt" onclick="doaction(2)" class="btnAction" />*}
	<input type="button" value="Duyệt" onclick="doaction(3)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div> 
</form>
</div>
{include file="common/footer.tpl"}