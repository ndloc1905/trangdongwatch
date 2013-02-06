{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Nhận xét về tôi</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
	{include file="profile/tipcertify.tpl"}	
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
		<div class="padT10">
			Dưới đây là những nhận xét của những thành viên khác về <strong>{$objUser->fullname}</strong> đã được ban quản trị công nhận.
		</div>
		{if $arrResult}
		<table class="mainTable" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolor="#e3e3e3">
		<tr>
			<th align="center" width="80">Nhận xét</th>
			<th align="center" width="200">Bởi thành viên</th>
			<th align="center">Lời nhận xét</td>
			<th align="center" width="120">Nhận xét lúc</th>
		</tr>
		{foreach from=$arrResult item=row key=i}
		<tr>
			<td align="center">{if $row.point==1}Tốt{else}Xấu{/if}</td>
			<td><a class="{if $row.certify==0}black{elseif $row.certify==1}blue{else}green{/if}" href="{url_user_rating username=$row.username}"><strong>{$row.fullname}</strong></a> {star ratings=$row.ratings username=$row.username}</a></td>
			<td>{$row.content}</td>
			<td align="center">{$row.lastupdate|date_format:"%H:%M %d/%m/%Y"}</td>
		</tr>
		{/foreach}
		</table>
		{/if}
		{if $intTotal > $intLimit}
		    <div class="alignC">{paging total=$intTotal limit=$intLimit page=$intPage}</div>
		{/if}
	</div>
</div>
</div>
{include file="common/footer.tpl"}