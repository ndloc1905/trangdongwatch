{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">
	{if $intType==1}
		{$t->_('news_category')}
	{elseif $intType==2}
		{$t->_('tour_category')}		
	{elseif $intType==3}
		{$t->_('hotel_category')}	
	{/if}
</h3>
<form method="POST" onsubmit="return checkForm();" action="{$smarty.const.HOST_CATE}/save?id={$arrResult.cateid}">
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<td width="150px">(*) {$t->_('name_vi')}</td>
		<td>
			<input style="width:600px;" type="text" id="pname_vi" name="pname_vi" value="{$arrResult.name_vi}" />
			<div id="idErrorNameVI" class="error">{$t->_('msg_required_field')}</div>
		</td>
	</tr>
	<tr>
		<td>(*) {$t->_('name_en')}</td>
		<td>
			<input style="width:600px;" type="text" id="pname_en" name="pname_en" value="{$arrResult.name_en}" />
			<div id="idErrorNameEN" class="error">{$t->_('msg_required_field')}</div>
		</td>
	</tr>
	<tr>
		<td>{$t->_('zorder')}</td>
		<td><input style="width:600px;" type="text" id="pzorder" name="pzorder" value="{$arrResult.zorder}" /></td>
	</tr>
	<tr>
		<td colspan="2">
			<input type="hidden" id="pbackurl" name="pbackurl"  value="{$strBackUrl}" />
			<input type="hidden" value="{$intType}" id="ptype" name="ptype" />
			<input type="submit" value="{$t->_('save')}" class="btnAction" />
			<input type="button" value="{$t->_('cancel')}" class="btnAction" onclick="history.back();"/>
		</td>
	</tr>
</table>
</form>
</div>
{include file="common/footer.tpl"}