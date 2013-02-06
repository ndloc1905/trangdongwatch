<div class="mainLeft">
	{if $AppUI->id == $objUser->id}
	<div class="menuLeft">
		<ul class="categoties menu" id="menu1">
			<li><a href="{$smarty.const.HOST_ACCOUNT}"><span>Thông tin cá nhân</span></a></li>
			<li><a href="{url_user_topic username=$objUser->username}"><span>Tin đã đăng</span></a></li>
			<li><a href="{url_user_inbox username=$objUser->username}"><span>Hợp thư</span></a></li>
			<li><a href="{url_user_friend username=$objUser->username}"><span>Bạn bè</span></a></li>
			<li><a href="{$smarty.const.HOST_LOGOUT}"><span>Thoát</span></a></li>
		</ul>
	</div>
	{else}
	<div class="tabProfile">
		<div class="alignC padT2"><img src="{img_user image=$objUser->image}" style="width:180px"/></div>
		<div class="alignC padT2"><a class="nickGreen" style="font-size:15px;" href="{$smarty.const.HOST}/{$objUser->username}">{$objUser->username}</a></div>
		{if $objUser->sologan}<div class="alignC padT2" style="font-weight:bold;">{$objUser->sologan}</div>{/if}
		<div class="alignC padT2"><label>Thành viên từ:</label><br/> {$objUser->postdate|date_format:"%H:%M %d/%m/%Y"}</div>			
		<div class="alignC padT2"><label>{$t->_('address')}:</label> {$objUser->address}</div>			
		{if $objUser->phone}<div class="alignC padT2"><label>{$t->_('phone')}:</label> {$objUser->address}</div>{/if}
		{if $objUser->mobile}<div class="alignC padT2"><label>{$t->_('mobile')}:</label> {$objUser->mobile}</div>{/if}
		{if $objUser->bank_name && $objUser->bank_account && $objUser->bank_no}<div class="alignC padT2"><label>Tài khoản Ngân hàng</label><br/> {$objUser->bank_name} <br/> {$objUser->bank_account} <br/> {$objUser->bank_no}</div>{/if}
		{if $AppUI->id > 0 && $AppUI->id != $objUser->id}
		<div class="alignC padT5">
			<a href="javascript:uimail('{$objUser->username}');"><img style="cursor:pointer;" title="Gửi tin nhấn đến thành viên này" src="images/ico/mail.png"/></a>&nbsp;&nbsp;
			<a href="javascript:uirating('{$objUser->username}');"><img style="cursor:pointer;" title="Gửi tặng ngôi sao Uy Tín tốt hay xấu cho thành viên này?" src="images/ico/gold_star.gif"/></a>&nbsp;&nbsp;
			<a href="javascript:uifavor('{$objUser->username}');"><img style="cursor:pointer;" title="Gửi tặng điểm yêu thích đến thành viên này" src="images/ico/favor.gif"/></a>&nbsp;&nbsp;
			<a href="javascript:uimf('{$objUser->username}');"><img style="cursor:pointer;" title="Kết bạn với thành viên này"  src="images/ico/mf.png"/></a> 
		</div>
		{/if}
	</div>	
	{/if}
</div>