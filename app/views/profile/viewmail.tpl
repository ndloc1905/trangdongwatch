{include file="common/header.tpl"}
<div id="bodyMain">
<div class="navigation">
	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>
	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>
	<a class="active" href="#">Thư đến</a>
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
				<div class="padT2" style="float:right;"><a href="javascript:void(0);" onclick="deleteOne({$arrDetail.id});" class="bntS1"><span>Xóa Thư</span></a></div>
				<div class="space"></div>
				{foreach from=$arrDetail.content item=row key=i}
				<div class="padT5B">
					<div class="padT2">
						<a href="{$smarty.const.HOST}/{$row.username}">{$row.username}</a>: {$row.content}
					</div>
				</div>
				<div class="space"></div>
				{/foreach}
				<div class="space"></div>
				<div class="tabNewsH">
					<h4 class="titleNewsH">Phải hồi thư cho {$strUserName}</h4>
					<div class="inTabNewsH" style="background:#E6EFFF;border-bottom:1px solid #e3e3e3;border-left:1px solid #e3e3e3;border-right:1px solid #e3e3e3;padding:5px;">
						<div class="padT5 alignC" id="reply">
							<textarea id="pcontent" name="pcontent" style="width:80%;height:100px;"></textarea>
							{*'pcontent'|fck:'':'Basic':'80%':'200'*}
						</div>
						<center><input type="button" class="bntLogin" value="Gửi phải hồi" onclick="sendmb('{$strUserName}', {$arrDetail.id})" /></center>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
{include file="common/footer.tpl"}