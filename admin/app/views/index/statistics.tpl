{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('revenue_statistics')}</h3>
<form onsubmit="filter('{$t->_('emp_code')}');return false;" id="form1" name="form1" method="POST">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
<tr>
	<td>
		<input style="width:80px;float:left;margin-right:2px;text-align:center;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('emp_code')}{/if}" onfocus="search_focus('{$t->_('emp_code')}')" onblur="search_blur('{$t->_('emp_code')}')"/>
		<span style="float:left;margin:0 4px;">{$t->_('rdate')}</span>
		{text_date dname="prdatefrom" value=$strRDateFrom}
		<span style="float:left;margin:0 4px;">-</span>
		{text_date dname="prdateto" value=$strRDateTo}		
		<input type="button" value="{$t->_('statistics')}" onclick="filter('{$t->_('emp_code')}')" class="btnAction" />
	</td>
</tr>
</table>
{if $arrResult}
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="80px">{$t->_('emp_code')}</th>
		<th width="100px">{$t->_('car_type')}</th>
		<th width="80px">{$t->_('car_code')}</th>
		<th width="80px">{$t->_('seats')}</th>
		<th width="120px">{$t->_('ddate')}</th>
		<th width="120px">{$t->_('rdate')}</th>
		<th>{$t->_('price')}</th>
		<th width="120px">{$t->_('money_total')}</th>
		<th width="120px">{$t->_('addcost')}</th>
	</tr>
	{assign var="money" value=0}
	{assign var="addcost" value=0}
	{foreach from=$arrResult item=row key=i}
	{assign var="money" value=$money+$row.money}
	{assign var="addcost" value=$addcost+$row.addcost}
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td align="center">{$row.user_code}</td>
		<td align="center">{$row.ctype_name}</td>
		<td align="center">{$row.car_code}</td>
		<td align="center">{$row.car_seats}</td>
		<td align="center">{if $row.ddate!='0000-00-00 00:00:00'}{$row.ddate|date_format:"%d/%m/%Y %H:%M"}{else}-{/if}</td>
		<td align="center">{if $row.rdate!='0000-00-00 00:00:00'}{$row.rdate|date_format:"%d/%m/%Y %H:%M"}{else}-{/if}</td>
		<td align="right" style="color:red;font-weight:bold;">{$row.price|number_format} / {punit value=$row.punit}</td>
		<td align="right" style="color:red;font-weight:bold;">{$row.money|number_format}</td>
		<td align="right" style="color:red;font-weight:bold;">{$row.addcost|number_format}</td>
	</tr>
	{/foreach}
	<tr>
		<td align="right" colspan="9" style="color:red;font-weight:bold;">{$money|number_format}</td>
		<td align="right" style="color:red;font-weight:bold;">{$addcost|number_format}</td>
	</tr>	
</table>
{/if}
</form>
</div>
{include file="common/footer.tpl"}
{literal}<script language="javascript">
var kw = "{/literal}{$t->_('emp_code')}{literal}";
$(function() {	
	$("#prdatefrom").datepicker({showButtonPanel: true});
	$('#prdatefrom').datepicker('option', {dateFormat: 'dd/mm/yy'});
	$("#prdateto").datepicker({showButtonPanel: true});
	$('#prdateto').datepicker('option', {dateFormat: 'dd/mm/yy'});
});
</script>{/literal}