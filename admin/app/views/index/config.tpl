{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('config')}</h3>
	<form method="POST" action="{$smarty.const.HOST_ADMIN}/index/saveconfig">
	<table width="500" cellpadding="0" cellspacing="0" border="0">
		<tr><td colspan="2"><h4 class="pageTitle">{$t->_('common_conf')}</h4></td><tr>
		{foreach from=$arrConfig item=row key=i}
		{if $row.group=='COMMON'}
		<tr>
			<td valign="top" width="300">{content lang=$l item=$row f='name'}</td>
			<td valign="top">
			{if $row.id==7}
				<select style="width:300px;" id="pvalue_{$row.id}" name="pvalue_{$row.id}" >
					<option value="1"{if $row.value=='1'} selected="selected"{/if}>{$t->_('topmsg')}</option>
					<option value="2"{if $row.value=='2'} selected="selected"{/if}>{$t->_('adv_text')}</option>
					<option value="3"{if $row.value=='3'} selected="selected"{/if}>{$t->_('both')}</option>
				</select>
			{elseif $row.id==10}
				<select style="width:300px;" id="pvalue_{$row.id}" name="pvalue_{$row.id}" >
					<option value="jp"{if $row.value=='jp'} selected="selected"{/if}>{$t->_('japanese')}</option>
					<option value="en"{if $row.value=='en'} selected="selected"{/if}>{$t->_('english')}</option>
					<option value="vi"{if $row.value=='vi'} selected="selected"{/if}>{$t->_('vietnamese')}</option>
					<option value="th"{if $row.value=='th'} selected="selected"{/if}>{$t->_('thai')}</option>
				</select>
			{elseif $row.id==14}
				<textarea style="width:600px;height:80px;" name="pvalue_{$row.id}">{$row.value}</textarea>
			{elseif $row.id==17}
				<select style="width:300px;" id="pvalue_{$row.id}" name="pvalue_{$row.id}" >
					<option value="1"{if $row.value=='1'} selected="selected"{/if}>{$t->_('yes')}</option>
					<option value="0"{if $row.value=='0'} selected="selected"{/if}>{$t->_('no')}</option>
				</select>
			{else}
				<input style="width:300px;" name="pvalue_{$row.id}" type="text" value="{$row.value}" /> {if $row.id==4||$row.id==5||$row.id==6} ({$t->_('seconds')}) {/if}
			{/if}
			</td>
		</tr>
		{/if}
		{/foreach}
		{*
		<tr>
			<td valign="top">{$t->_('style')} (max=5)</td>
			<td valign="top">
				<div style="height:160px;width:300px;overflow-y:scroll;border:1px solid #ccc;">
				<table width="250px" cellpadding="0" cellspacing="0" border="0">
				{foreach from=$arrStyle item=row key=i}
					<tr>
						<td width="20px"><input type="checkbox" name="styles[]" value="{$row.id}" {if $row.status==1}checked="checked"{/if} /></td>
						<td width="20px" valign="top"><img src="{$smarty.const.HOST}/{$row.image}" /></td>
						<td>{$row.name}</td>
					</tr>
				{/foreach}
				</table>
				</div>
			</td>
		</tr>
		*}
	</table>
	
	<table width="500" cellpadding="0" cellspacing="0" border="0">
		<tr><td colspan="2"><h4 class="pageTitle">{$t->_('email')}</h4></td><tr>
		{foreach from=$arrConfig item=row key=i}
		{if $row.group=='EMAIL'}
		<tr>
			<td valign="top" width="300">{content lang=$l item=$row f='name'}</td>
			<td valign="top">
				<input style="width:300px;" name="pvalue_{$row.id}" type="text" value="{$row.value}" />
			</td>
		</tr>
		{/if}
		{/foreach}
	</table>
	
	
	<table width="500" cellpadding="0" cellspacing="0" border="0">
		<tr><td colspan="2"><h4 class="pageTitle">{$t->_('seo')}</h4></td><tr>
		{foreach from=$arrConfig item=row key=i}
		{if $row.group=='SEO'}
		<tr>
			<td valign="top" width="300">{content lang=$l item=$row f='name'}</td>
			<td valign="top">
				<textarea style="width:600px;height:80px;" name="pvalue_{$row.id}">{$row.value}</textarea>
			</td>
		</tr>
		{/if}
		{/foreach}
	</table>	
	
	<table width="500" cellpadding="0" cellspacing="0" border="0">		
		<tr>
			<td valign="top">
				<input type="submit" value="{$t->_('save')}" class="btnAction" />
			</td>
		</tr>
	</table>
	
	</form>
</div>
{include file="common/footer.tpl"}