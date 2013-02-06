{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a class="active" href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
	{include file="profile/tipcertify.tpl"}	
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
		<div class="padT10">
			Bạn đang ở trong phòng khách của <strong>{$objUser->username}</strong>. <br/>
			Bạn có thể gửi lời thăm hỏi hoặc thảo luận với <strong>{$objUser->username}</strong> ngay bây giờ bằng cách dùng hộp soạn thảo bên dưới.
		</div>
		<div class="padT2">
			<textarea id="pcontent" name="pcontent" style="height:60px;width:100%;"></textarea>
			<div id="idErrorContent" class="error">Vui lòng nhập nội dung.</div>
			<div class="space"></div>
			<div style="float:right;padding-right:0px;"><input type="button" class="bntSe" value="Gửi" onclick="postUComment({$objUser->id})" /></div>
		</div>
		<div class="space"></div>
		{foreach from=$arrResult item=row key=i}
		<div class="padT5B">
			<div class="padT2">
				<a class="{if $row.certify==0}black{elseif $row.certify==1}blue{else}green{/if}" href="{url_user_rating username=$row.username}"><strong>{$row.fullname}</strong></a> {star ratings=$row.ratings username=$row.username}:
				{$row.content}
				<div class="clr"></div>
				<span class="datex">Lúc {$row.postdate|date_format:"%H:%M %d/%m/%Y"}</span>{if $AppUI->id==$row.userid || $AppUI->id==$row.ruserid} - <a href="javascript:deleteUComment({$row.id})">Xóa</a>{/if}
			</div>
		</div>
		<div class="space"></div>
		{/foreach}
		{if $intTotal>$intLimit}
			<div class="alignR">{paging total=$intTotal limit=$intLimit page=$intPage}</div>
		{/if}
	</div>
</div>
</div>
{include file="common/footer.tpl"}