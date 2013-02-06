{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Thư đã gửi</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
	{include file="profile/tipcertify.tpl"}	
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
		<div class="tabNewsH">
			<div class="inTabNewsH">
				<div class="space"></div>
				{if $arrResult}
				<table class="mainTable" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolor="#e3e3e3">
				<tr>
					<td width="20px" align="center">
						<input value="0" type="checkbox" onclick="checkAll('items[]', this.checked ? 1 : 0)" />
					</td>
					<td>
						<a href="javascript:void(0);" onclick="deleteOutbox();" class="bntS1"><span>Xóa Thư</span></a>
					</td>
				</tr>
				{foreach from=$arrResult item=row key=i}
				<tr>
					<td align="center">
						<input type="checkbox" name="items[]" value="{$row.id}" />
					</td>
					<td>
						{*
						<div class="listImage75">
							<a href="{$smarty.const.HOST}/{$row.rusername}"><img src="{img_user image=$row.ravatar}" /></a>
						</div>
						*}
						<div class="listInfo">
						<ul style="width:700px;">
							<li>
								To: <a href="{$smarty.const.HOST}/{$row.rusername}"><strong>{$row.rusername}</strong></a>:
								<a href="{$smarty.const.HOST_VIEWMAIL}?id={$row.id}&u={$row.ruserid}" class="gray1">{$row.subject}</a> - <a href="{$smarty.const.HOST_VIEWMAIL}?id={$row.id}&u={$row.ruserid}">Trả lời</a>
							</li>
							<li class="datex">Lúc {$row.postdate|postdate}</li>
							<li></li>
						</ul>
						</div>
					</td>
				</tr>
				{/foreach}
				{if $intTotal>$intLimit}
				<tr><td colspan="2" align="right">{paging total=$intTotal page=$intPage limit=$intLimit}</td></tr>
				{/if}
				</table>
				{else}
					<div class="listEmpty">Hiện tại, Bạn chưa có thư gửi đi.</div>
				{/if}
			</div>
		</div>
	</div>
</div>
</div>
{include file="common/footer.tpl"}