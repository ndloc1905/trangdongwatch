{include file="common/header.tpl"}

<div id="bodyMain">

<div class="navigation">

	<a href="{$smarty.const.HOST}" class="home">{$t->_('homepage')}</a>

	<a href="{$smarty.const.HOST}/{$objUser->username}">Trang nhà của <strong>{if $AppUI->id==$objUser->id}Bạn{else}{$objUser->fullname}{/if}</strong></a>

	<a class="active" href="#">Tin đã đăng</a>

</div>

<div class="mainLeft" style="border:1px solid #e3e3e3;padding:0px;">

	{item_profile item=$arrUser}

	{include file="profile/tipcertify.tpl"}	

</div>

<div class="mainRight">

	<div class="bodyAdmin">

		{include file="profile/tabmenu.tpl"}

		{if $AppUI->id==$objUser->id}

		<div class="space"></div>

		<div class="padT5B">

			<strong class="red">Tiết kiệm tài nguyên:</strong> vì số lượng thành viên quá lớn nên BQT chúng tôi tao hệ thống kiểm soát tin:<br/>

            Các thành viên sẽ được giới hạn số lượng tin như sau: <br/>

            - Thành viên chưa xác thực: Chỉ được giữ lại 2 bản tin (topic).<br/>

			- Thành viên đã xác thực: Chỉ được giữ lại 5 bản tin (topic).<br/>

				- Thành viên Silver hay Gold : được giũ lại 10 Bản tin (topic).<br/>

				- Thành viên Platium 15 bản tin (topic).<br/>

				- Thành viên Diamond không bị giới hạn số lượng tin.<br/>

				Nếu quá số lượng hệ thống sẽ tự động xoá bớt những Topic mà bạn đăng trước đó và chỉ giữ lại số lượng tin theo bảng thông báo ở trên. Nên bạn nên xoá bớt những topic không cần thiết để giữ lại những Topic mà bạn muốn giữ lại. <br/>Tất cả bản tin (topic) hệ thống sẽ tự động xoá với thời gian 1 tháng sau khi đăng

		</div>

		<div class="space"></div>

		{/if}

		{if $arrResult}

		<div class="tabNewsH">

			<div class="inTabNewsH">

				<div class="space"></div>

				<table class="mainTable" width="100%" cellspacing="0" cellpadding="0" border="1" bordercolor="#e3e3e3">

				{foreach from=$arrResult item=row key=i}

				<tr>

					<td valign="middle">

						<div class="listImage75">

							<a href="{url_topic_detail id=$row.id title=$row.title}"><img src="{img_topic username=$row.username image=$row.image}" /></a>

						</div>

						<div class="listInfo" style="width:350px;">

						<ul>

							<li><a href="{url_topic_detail id=$row.id title=$row.title}"><strong>{$row.title|mbtruncate:100}</strong></a></li>

							{if $row.price}<li class="red">Giá: {$row.price|number_format} VNĐ</li>{/if}

							<!--<li>Chuyên mục: <a href="{$smarty.const.HOST_FORUM}?id={$row.parentid}">{$arrCate[$row.parentid]}</a></li>-->
							
                            <li>Chuyên mục: {$arrCate[$row.parentid]}</li>
                            
							<li class="datex">Lúc {$row.postdate|postdate}</li>

						</ul>

						</div>

					</td>

					<td valign="middle" align="center" width="240">
						{if $row.comments}

						<li>Có <strong>{$row.comments}</strong> phản hồi và lần cuối bởi</li>

						<li><a <a class="{if $row.lastcomment_certify==0}black{elseif $row.lastcomment_certify==1}blue{else}green{/if}" href="{url_user_rating username=$row.lastcomment_username}"><strong>{$row.lastcomment_fullname}</strong></a> {star ratings=$row.lastcomment_ratings username=$row.lastcomment_username}</li>

						<li class="datex">Lúc {$row.lastcomment_postdate|postdate}</li>

						{else}

						Chưa có phản hồi

						{/if}

					</td>

					{if $AppUI->id==$objUser->id}

					<td valign="middle" align="center" width="80">

						<input onclick="document.location.href='{$smarty.const.HOST_POSTTOPIC}?id={$row.id}';" type="button" class="bntSe" value="Sửa" />

						<div class="space"></div>

						<input type="button" class="bntSe" value="Xóa" onclick="deleteTopic({$row.id});" />

					</td>

					{/if}

				</tr>

				{/foreach}

				</table>

				{if $intTotal > $intLimit}

					<div class="alignC">{paging total=$intTotal limit=$intLimit page=$intPage}</div>

				{/if}

			</div>

		</div>

		{/if}

	</div>

</div>

</div>

{include file="common/footer.tpl"}