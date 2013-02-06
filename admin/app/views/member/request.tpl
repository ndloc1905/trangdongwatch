{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Yêu cầu xác thực</h3>
<form onsubmit="filterRequest('{$t->_('keyword')}');return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_MEMBER}/doaction">
<div class="padT2">
	<input style="width:196px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
	<input type="button" value="{$t->_('search')}" onclick="filterRequest('{$t->_('keyword')}')" class="btnAction" />
</div>
<div class="space"></div> 
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="120px">{$t->_('postdate')}</th>
		<th width="120px">{$t->_('username')}</th>
		<th width="150px">{$t->_('email')}</th>
		<th width="150px">{$t->_('fullname')}</th>		
		<th>{$t->_('address')}</th>		
		<th width="100px">{$t->_('phone')}</th>				
		<th width="80px">{$t->_('id_image')}</th>		
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td align="center">{$row.lastupdate|date_format:"%H:%M %d/%m/%Y"}</td>
		<td>{$row.username}</td>
		<td>{$row.email}</td>
		<td>{$row.fullname}</td>				
		<td>{$row.address}</td>				
		<td align="center">{$row.phone}</td>		
		<td align="center"><a target="_blank" href="{if $row.id_image}{img_user username=$row.username image=$row.id_image}{else}javascript:void(0);{/if}">{$t->_('view')}</a></td>
	</tr>
	{/foreach}
	<tr>
		<td colspan="8" align="right">
		<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
		{if $intTotal>$intLimit}		
			{apaging total=$intTotal limit=$intLimit page=$intPage params=$intParams}
		{/if}
		</td>
	</tr>	
</table>
<div class="padT2">
	<input type="button" value="{$t->_('delete')}" onclick="doaction(6)" class="btnAction" />
	<input type="button" value="Xác thực" onclick="doaction(7)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}