{include file="common/header.tpl"}
<div class="navMain">
<h3 class="pageTitle">{$t->_('member')}</h3>
<form onsubmit="filter();return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_MEMBER}/doaction">
<div class="padT2">
	<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
	{select_status item0=$t->_('status') selected=$intStatus attribs='style="float:left;margin-right:2px;"'}
	<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}', 2)" class="btnAction" />
</div>
<div class="space"></div>
<table width="100%" cellpadding="0" cellspacing="0" border="1">
	<tr>
		<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
		<th width="100px">{$t->_('username')}</th>
		<th width="120px">{$t->_('email')}</th>
		<th>{$t->_('fullname')}</th>		
		<th width="60px">Số topic</th>
		<th width="60px">Số sao</th>		
		<th width="100px">{$t->_('phone')}</th>
		<th width="100px">{$t->_('mobile')}</th>
		<th width="80px">Xác thực</th>
		<th width="80px">{$t->_('status')}</th>
		<th width="80px">Danh hiệu</th>
		<th width="80px">{$t->_('id_image')}</th>
		<th width="80px">{$t->_('password')}</th>
		<th width="50px">{$t->_('edit')}</th>
	</tr>
	{foreach from=$arrResult item=row key=i}
	<tr>
		<td width="20px" align="center"><input type="checkbox" name="items[]" value="{$row.id}" /></td>
		<td title="{$row.sologan}">{$row.username}</td>
		<td>{$row.email}</td>
		<td>{$row.fullname}</td>		
		<td align="center"><a href="{$smarty.const.HOST_TOPIC}?pkeyword={$row.username}">{$row.topics}</a></td>
		<td align="center"><a title="Click vào đây để tăng/giảm sao của thành viên này" href="{$smarty.const.HOST_MEMBER}/star?id={$row.id}">{$row.ratings|intval}</a></td>
		<td align="center">{$row.phone}</td>
		<td align="center">{$row.mobile}</td>
		<td align="center">{if $row.certify==1}Yes{else}No{/if}</td>
		<td align="center">{if $row.status==1}{$t->_('unlock_nick')}{else}{$t->_('lock_nick')}{/if}</td>
		<td align="center"><a href="{$smarty.const.HOST_TITLE}?puserid={$row.id}">{$t->_('view')}</a></td>
		<td align="center"><a target="_blank" href="{if $row.id_image}{$smarty.const.HOST_UPLOAD_USER}/{$row.id_image}{else}javascript:void(0);{/if}">{$t->_('view')}</a></td>
		<td align="center"><a href="{$smarty.const.HOST_CHANGEPASSWORD}?id={$row.id}">{$t->_('change')}</a></td>
		<td align="center"><a href="{$smarty.const.HOST_MEMBER}/update?id={$row.id}">{$t->_('edit')}</a></td>
	</tr>
	{/foreach}

	<tr>
		<td colspan="15" align="right">
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
</table>
<div class="padT2">
	<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_MEMBER}/update'" class="btnAction" />
	<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction" />
	<input type="button" value="{$t->_('unlock_nick')}" onclick="doaction(2)" class="btnAction" />
	<input type="button" value="{$t->_('lock_nick')}" onclick="doaction(3)" class="btnAction" />
	<input type="hidden" id="paction" name="paction" value="0"/>
</div>
</form>
</div>
{include file="common/footer.tpl"}