<div class="space"></div>
<ul class="tabBDSDetail">
	<li><a {if $strAction=='index'}class="active"{/if} href="{$smarty.const.HOST}/{$objUser->username}"><span>Nhà tôi</span></a></li>
	<li><a {if $strAction=='info' || $strAction=='account'}class="active"{/if} href="{url_user_info username=$objUser->username}"><span>Thông tin cá nhân</span></a></li>
	<li><a {if $strAction=='rating'}class="active"{/if} href="{url_user_rating username=$objUser->username}"><span>Nhận xét về tôi</span></a></li>
	<li><a {if $strAction=='topic'}class="active"{/if} href="{url_user_topic username=$objUser->username}"><span>Tin đã đăng</span></a></li>
	{if $AppUI->id==$objUser->id}
	<li><a {if $strAction=='inbox' || $intType==2}class="active"{/if} href="{$smarty.const.HOST_INBOX}"><span>Thư đến</span></a></li>
	<li><a {if $strAction=='outbox' || $intType==1}class="active"{/if} href="{$smarty.const.HOST_OUTBOX}"><span>Thư đã gửi</span></a></li>
	{/if}
</ul>
<div class="lineBlue"></div>