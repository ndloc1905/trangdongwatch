<h3 class="pageTitle">{$t->_('member')}</h3>
<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_USER}/doaction">
<table width="100%" cellpadding="0" cellspacing="0" border="0">
	<tr>
		<td>
			<input style="width:196px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
			{select_status item0=$t->_('status') selected=$intStatus attribs='style="float:left;margin-right:2px;"'}
			<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}', 2)" class="btnAction" />
		</td>
	</tr>		
</table>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="40px">&nbsp;</th>
		<th width="250px">{$t->_('username')}</th>		
		<th width="180px">Email</th>
		<th>{$t->_('place')}</th>
		<th width="140px">{$t->_('lastlogin')}</th>
		<th width="80px">{$t->_('status')}</th>			
		<th width="80px">{$t->_('password')}</th>
		<th width="50px">{$t->_('edit')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td><img src="{img_user image=$row.image}" width="32" /></td>
		<td>{$row.username} {if $row.fullname}({$row.fullname}){/if}</td>
		<td>{$row.email}</td>
		<td>{$row.placename}</td>		
		<td align="center">{$row.lastlogin}</td>		
		<td align="center">{if $row.status==0}{$t->_('inactive')}{else}{$t->_('active')}{/if}</td>			
		<td align="center">{if ($intPermission&2)}<a href="{$smarty.const.HOST_CHANGEPASSWORD}?id={$row.id}">{$t->_('change')}</a>{else}&nbsp;{/if}</td>
		<td align="center">{if ($intPermission&2)}<a href="{$smarty.const.HOST_USER}/update?id={$row.id}&ptype=2">{$t->_('edit')}</a>{else}&nbsp;{/if}</td>
	</tr>
	{/foreach}
	
	<tr>
		<td colspan="9" align="right">
		<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
		{if $intTotal>$intLimit}
		{if $smarty.get.ptype!=''}
			{apaging total=$intTotal limit=$intLimit page=$intPage params=1}
		{else}
			{apaging total=$intTotal limit=$intLimit page=$intPage}
		{/if}
		{/if}
		</td>
	</tr>
	
	{if ($intPermission&2)}
	<tr>
		<td colspan="9" align="left">
			<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_USER}/update?ptype=2'" class="btnAction" />
			<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction" />
			<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction" />
			<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction" />
			<input type="hidden" id="paction" name="paction" value="0"/>
		</td>
	</tr>
	{/if}
</table>
</form>