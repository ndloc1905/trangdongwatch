{include file="common/header.tpl"}
<div class="navMain">
	<h3 class="pageTitle">{$t->_('topic')}</h3>
	<form onsubmit="return false;" id="form1" name="form1" method="POST" action="{$smarty.const.HOST_TOPIC}/doaction">
	<div class="padT2">
		<input style="width:150px;float:left;margin-right:2px;" type="text" id="pkeyword" name="pkeyword" value="{if $smarty.get.pkeyword}{$smarty.get.pkeyword}{else}{$t->_('keyword')}{/if}" onfocus="search_focus('{$t->_('keyword')}')" onblur="search_blur('{$t->_('keyword')}')"/>
		<select id="pstatus" name="pstatus" style="float:left;margin-right:2px;">
			<option value="-1"><strong>{$t->_('all')}</strong></div>			
			<option value="1"{if $intStatus==1} selected="selected"{/if}>{$t->_('active')}</div>
			<option value="0"{if $intStatus==2} selected="selected"{/if}>{$t->_('inactive')}</div>			
			<option value="3"{if $intStatus==3} selected="selected"{/if}>{$t->_('lock')}</div>
			<option value="4"{if $intStatus==4} selected="selected"{/if}>Tổng Hợp</div>			
			<option value="5"{if $intStatus==5} selected="selected"{/if}>Đóng Đinh</div>			
			<option value="6"{if $intStatus==6} selected="selected"{/if}>Đã xác nhận đặt gạch</div>			
			<option value="7"{if $intStatus==7} selected="selected"{/if}>Chờ xác nhận đặt gạch</div>
		</select>		
		{select_cateparent item0=$t->_('parent_name') selected=$smarty.get.pparentid attribs='onchange="subcate(this.value);" style="float:left;margin-right:2px;"'}
		<span id="idSubCate" style="float:left;margin-right:2px;">{select_cate item0=$t->_('category') selected=$smarty.get.pcateid parentid=$smarty.get.pparentid}</span>
		<input type="button" value="{$t->_('search')}" onclick="filter('{$t->_('keyword')}')" class="btnAction" />
	</div>	
	<div class="space"></div>
	<table width="100%" cellpadding="0" cellspacing="0" border="1">
		<tr>
			<th width="20px"><input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" /></th>
			<th width="120px">Đăng bởi</th>
			<th>{$t->_('title')}</th>
			<th width="100px">{$t->_('price')}</th>
			<th width="80px">Phản hồi</th>			
			<th width="80px">Tổng hợp</th>
			<th width="150px">Đóng đinh</th>
			<th width="80px">{$t->_('lock')}</th>
			<th width="80px">{$t->_('status')}</th>
			<th width="120px">Đăng lúc</th>
			<th width="50px">{$t->_('edit')}</th>
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td><input type="checkbox" name="items[]" value="{$row.id}" /></td>
			<td>{$row.username}</td>
			<td>{$row.title}</td>
			<td align="right">{$row.price|number_format}</td>
			<td align="center"><a href="{$smarty.const.HOST_COMMENT}?ptopicid={$row.id}">{$row.comments}</a></td>			
			<td align="center">{if $row.status&2}Yes{else}No{/if}</td>
			<td align="center">{if $row.top==1}Yes ({$row.topdate|date_format:"%H:%M %d/%m/%Y"}){else}No{/if}</td>
			<td align="center">{if $row.flags==2}Yes{else}No{/if}</td>			
			<td align="center">{if $row.status==0}{$t->_('inactive')}{else}{$t->_('active')}{/if}</td>
			<td align="center">{$row.postdate|date_format:"%H:%M %d/%m/%Y"}</td>
			<td align="center"><a href="{$smarty.const.HOST_TOPIC}/update?id={$row.id}">{$t->_('edit')}</a></td>
		</tr>
		{/foreach}
		<tr>
			<td colspan="11" align="right">
			<div style="float:left;font-weight:bold;">{$t->_('total')}: {$intTotal|number_format}</div>
			{if $intTotal>$intLimit}			
				{apaging total=$intTotal limit=$intLimit page=$intPage params=$intParams}			
			{/if}
			</td>
		</tr>
		{*
		<tr>
			<td colspan="8" align="left">				
				<input type="button" value="{$t->_('addnew')}" onclick="document.location.href='{$smarty.const.HOST_TOPIC}/update'" class="btnAction" />
				<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction60" />
				<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction60" />
				<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction60" />
				<input type="button" value="Khóa" onclick="doaction(5)" class="btnAction60" />
				<input type="button" value="Mở Khóa" onclick="doaction(6)" class="btnAction60" />
				<input type="button" value="Tổng hợp" onclick="doaction(4)" class="btnAction" />
				<input type="button" value="Đóng đinh" onclick="doaction(7)" class="btnAction" />
				<input type="hidden" id="paction" name="paction" value="0"/>
			</td>
		</tr>
		*}
	</table>
	<div class="padT2">
		<input type="button" value="{$t->_('delete')}" onclick="doaction(1)" class="btnAction60" />
		<input type="button" value="{$t->_('active')}" onclick="doaction(2)" class="btnAction60" />
		<input type="button" value="{$t->_('inactive')}" onclick="doaction(3)" class="btnAction60" />
		<input type="button" value="{$t->_('unlock')}" onclick="doaction(4)" class="btnAction60" />
		<input type="button" value="{$t->_('lock')}" onclick="doaction(5)" class="btnAction60" />		
		<input type="button" value="Tổng hợp" onclick="doaction(6)" class="btnAction" />
		<input type="button" value="Xóa Tổng Hợp" onclick="doaction(7)" class="btnAction" />
		<input type="button" value="Đóng đinh" onclick="doaction(8)" class="btnAction" />
		<input type="button" value="Xóa Đóng Đinh" onclick="doaction(9)" class="btnAction" />
		<input type="hidden" id="paction" name="paction" value="0"/>
		{*		
		<select id="paction" name="paction" style="float:left;margin-right:2px;" onchange="doaction(this.value);">
			<option value="0"><strong>{$t->_('action')}</strong></div>
			<option value="1">{$t->_('delete')}</div>
			<option value="2">{$t->_('active')}</div>
			<option value="3">{$t->_('inactive')}</div>
			<option value="4">{$t->_('unlock')}</div>
			<option value="5">{$t->_('lock')}</div>
			<option value="6">Tổng Hợp</div>
			<option value="7">Xóa Tổng Hợp</div>
			<option value="8">Đóng Đinh</div>
			<option value="9">Xóa Đóng Đinh</div>
		</select>
		*}
	</div>
	</form>
</div>
{include file="common/footer.tpl"}