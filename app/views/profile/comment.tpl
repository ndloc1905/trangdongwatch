{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Nhận xét về tôi</a>
</div>
<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">
	{item_profile item=$arrUser}
</div>
<div class="mainRight">
	<div class="bodyAdmin">
		{include file="profile/tabmenu.tpl"}
	</div>
</div>
</div>
{include file="common/footer.tpl"}