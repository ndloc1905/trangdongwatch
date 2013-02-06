{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('comment')}</h3>
	<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_COMMENT}/doaction">
	<div class="padT2">	
		<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
		<select id="pstatus" name="pstatus" style="float:left;margin-right:2px;">
			<option value="0"><strong>{$t->_('all')}</strong></div>			
			<option value="1"{if $intStatus==1} selected="selected"{/if}>{$t->_('active')}</div>
			<option value="2"{if $intStatus==2} selected="selected"{/if}>{$t->_('inactive')}</div>			
			<option value="3"{if $intStatus==3} selected="selected"{/if}>Đặt gạch</div>				
		</select>
		<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
	</div> 
	<div class="space"></div> 
	<table width="100%" cellpadding="0" cellspacing="0" border="1">
		<tr>
			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
			<th width="120px">Đăng bởi</th>
			<th>{$t->_('content')}</th>
			<th width="80px">Đặt gạch</th>
			<th width="80px">{$t->_('status')}</th>			
			<th width="120px">Đăng lúc</th>
			<th width="50px">{$t->_('edit')}</th>
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
			<td>{$row.username}</td>
			<td>
				{$t->_('topic')}:<strong class="blue"> {$row.title}</strong> <br/>
				{$row.content}
			</td>
			<td align="center">{if $row.type==2}Yes{else}No{/if}</td>
			<td align="center">{$row.status|status}</td>
			<td align="center">{$row.postdate|date_format:"%H:%M %d/%m/%Y"}</td>
			<td align="center"><a href="{$smarty.const.HOST_COMMENT}/update?id={$row.id}">{$t->_('edit')}</a></td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="7" align="right">
			<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
			{if $intTotal>$intLimit}			
				{apaging total=$intTotal limit=$intLimit page=$intPage params=$intParams}			
			{/if}
			</td>
		</tr>				
	</table>
	<div class="padT2">
		<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction60" />
		{*
		<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction60" />
		<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction60" />
		*}
		<input type="hidden" id="paction" name="paction" value="0"/>
	</div>
	</form>
</div>
{include file="common/footer.tpl"}