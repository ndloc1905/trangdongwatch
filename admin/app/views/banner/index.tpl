{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">Banner</h3>
<form id="form1" name="form1" method="POST" action="{$smarty.const.HOST_BANNER}/doaction">
<div class="padT2">
	{selectbox name="ppageid" arr=$arrPage selected=$intPageId fkey="id" fvalue="name_vi" item0=$t->_('page') attribs="style=\"float:left;margin-right:2px;\""}
	<select id="pcolumn" name="pcolumn" style="width:110px;float:left;margin-right:2px;">
		<option value="-1">{$t->_('column')}</option>		
		<option value="0"{if $intCol=='0'} selected="selected"{/if}>Top banner</option>
		<option value="1"{if $intCol=='1'} selected="selected"{/if}>{$t->_('left')}</option>
		<option value="3"{if $intCol=='3'} selected="selected"{/if}>{$t->_('right')}</option>
	</select>
	<select id="ptype" name="ptype" style="width:110px;float:left;margin-right:2px;">
		<option value="0">Loại Banner</option>
		<option value="1"{if $intType=='1'} selected="selected"{/if}>{$t->_('image')}</option>
		<option value="2"{if $intType=='2'} selected="selected"{/if}>Flash</option>
	</select>
	<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">	
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="250px">{$t->_('page')}</th>
		<th>{$t->_('name')}</th>
		<th width="80px">{$t->_('column')}</th>
		<th width="110px">{$t->_('zorder')}</th>
		<th width="80px">{$t->_('type')}</th>
		<th width="80px">{$t->_('status')}</th>
		<th width="50px">{$t->_('edit')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td align="center"><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td>{if $l=='vi'}{$row.name_vi}{else}{$row.name_en}{/if}</td>
		<td>{$row.name}</td>
		<td align="center">{if $row.col==0}Top{elseif $row.col==1}{$t->_('left')}{elseif $row.col==2}{$t->_('center')}{elseif $row.col==3}{$t->_('right')}{/if}</td>
		<td align="center">{$row.zorder}</td>
		<td align="center">{if $row.type==1}{$t->_('image')}{else}Flash{/if}</td>
		<td align="center">{if $row.status==0}{$t->_('inactive')}{else}{$t->_('active')}{/if}</td>
		<td align="center">{if ($intPermission&2)}<a href="{$smarty.const.HOST_BANNER}/update?id={$row.id}">{$t->_('edit')}</a>{else}&nbsp;{/if}</td>
	</tr>
	{/foreach}
	{if $intTotal>$intLimit}
	<tr>
		<td colspan="8" align="right">
			{apaging total=$intTotal limit=$intLimit page=$intPage params=$intParams}
		</td>
	</tr>
	{/if}	
</table>
<div class="padT2">
	<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_BANNER}/update'" class="btnAction" />
	<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction" />
	<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction" />
	<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}