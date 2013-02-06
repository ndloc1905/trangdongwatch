{if $AppUI->id==$arrUser.id && $arrUser.certify==0}
<div class="space"></div>
<div class="Tips190" style="margin:5px;">
	Hiện tại tài khoản của Bạn chưa được xác thực, vui lòng <a href="{$smarty.const.HOST_ACCOUNT}#certify"><strong>Hãy gửi yêu cầu xác thực</strong></a> đến BQT.
</div>
{/if}